<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time RSSI Tracking with Map</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<div id="map-container">
    <img id="map" src="https://i.ibb.co/4pSPxHS/ENSIM.jpg" alt="School Map">
    <div id="device-marker"></div>
</div>
<div id="chat-container">
    <div id="chat-header">
        <h2>AI Localisation Indoor</h2>
    </div>
    <div id="chat-messages"></div>
    <div id="chat-input">
        <input type="text" id="question" name="question" placeholder="Enter your question..." required>
        <button id="send-button">Send</button>
    </div>
</div>



<script>
    document.getElementById('send-button').addEventListener('click', function(event) {
        event.preventDefault();
        var questionInput = document.getElementById('question');
        var question = questionInput.value;
        if (question.trim() === '') return;

        displayMessage('user', question);
        questionInput.value = '';

        fetch('ask_mystral.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ question: question })
        })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    displayMessage('bot', 'Error: ' + data.error + ' (HTTP ' + data.httpcode + ')');
                } else {
                    displayMessage('bot', data.answer);
                }
            })
            .catch(error => {
                displayMessage('bot', 'Error: ' + error.message);
            });
    });

    document.getElementById('question').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Empêche le comportement par défaut
            document.getElementById('send-button').click(); // Déclenche le clic sur le bouton "Envoyer"
        }
    });

    function displayMessage(sender, text) {
        var messageContainer = document.createElement('div');
        messageContainer.classList.add('message', sender);
        var messageContent = document.createElement('div');
        messageContent.classList.add('message-content');
        messageContent.textContent = text;
        messageContainer.appendChild(messageContent);
        document.getElementById('chat-messages').appendChild(messageContainer);
        messageContainer.scrollIntoView();
    }


    function rssiToDistance(rssi, rssi0 = -30) {
        return Math.pow(10, (rssi0 - rssi) / 20);
    }
    function triangulation(g1, g2, g3) {
        const d1 = rssiToDistance(g1.rssi);
        const d2 = rssiToDistance(g2.rssi);
        const d3 = rssiToDistance(g3.rssi);

        console.log(`Distances: d1=${d1}, d2=${d2}, d3=${d3}`);
        const A = 2 * (g2.x - g1.x);
        const B = 2 * (g2.y - g1.y);
        const C = d1*d1 - d2*d2 - g1.x*g1.x + g2.x*g2.x - g1.y*g1.y + g2.y*g2.y;
        const D = 2 * (g3.x - g2.x);
        const E = 2 * (g3.y - g2.y);
        const F = d2*d2 - d3*d3 - g2.x*g2.x + g3.x*g3.x - g2.y*g2.y + g3.y*g3.y;

        const denominator = A*E - B*D;
        if (denominator === 0) {
            console.error('Denominator in triangulation is 0, cannot divide by 0');
            return { x: NaN, y: NaN };
        }
        const x = (C*E - B*F) / denominator;
        const y = (A*F - C*D) / denominator;
        if (isNaN(x) || isNaN(y) || !isFinite(x) || !isFinite(y)) {
            console.error(`Calculated coordinates are invalid: x=${x}, y=${y}`);
        } else {
            console.log(`Calculated coordinates: x=${x}, y=${y}`);
        }
        return { x, y };
    }

    function updateMarkerPosition(x, y) {
        var marker = document.getElementById('device-marker');
        marker.style.left = x + 'px';
        marker.style.top = y + 'px';
        console.log(`Marker position updated: x=${x}, y=${y}`);
    }

    function fetchRSSIData(callback) {
        var cacheBust = new Date().getTime(); // Utiliser un timestamp pour éviter le cache
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "data_rssi.json?cache_bust=" + cacheBust, true); // Ajouter le paramètre cache_bust à l'URL
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                console.log("Data fetched: ", data);
                callback(data);
            }
        };
        xhr.send();
    }

    function startLooping(data) {
        var index = 0;
        function loop() {
            if (data.length > 0) {
                var entry = data[index];
                var g1 = { rssi: entry.gateway1, x: 0, y: 0  };
                var g2 = { rssi: entry.gateway2, x: 0, y: 300 };
                var g3 = { rssi: entry.gateway3, x: 1500 , y: 900 }; // Passerelle 3 en bas à droite
                var coordinates = triangulation(g1, g2, g3);
                updateMarkerPosition(coordinates.x, coordinates.y);
                index = (index + 1) % data.length; // Incrémenter et revenir au début après la dernière valeur
            }
            setTimeout(loop, 500); // Mettre à jour toutes les 1 secondes
        }
        loop();
    }

    fetchRSSIData(startLooping);


</script>

</body>
</html>
