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

    function transformRSSItoCoordinates(rssi) {
        var x = (rssi + 100) * 8; // Transforme RSSI en coordonnée x
        var y = (rssi + 100) * 6; // Transforme RSSI en coordonnée y
        return {x: x, y: y};
    }

    function updateMarkerPosition(x, y) {
        var marker = document.getElementById('device-marker');
        marker.style.left = x + 'px';
        marker.style.top = y + 'px';
    }

    function fetchRSSIData(callback) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "data_rssi.json", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
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
                var coordinates = transformRSSItoCoordinates(entry.rssi);
                updateMarkerPosition(coordinates.x, coordinates.y);
                index = (index + 1) % data.length; // Incrémenter et revenir au début après la dernière valeur
            }
            setTimeout(loop, 2000); // Mettre à jour toutes les 2 secondes
        }
        loop();
    }

    fetchRSSIData(startLooping);

  
</script>

</body>
</html>
