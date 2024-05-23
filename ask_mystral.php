<?php

function callHuggingFaceApi($data) {
    $apiUrl = "https://api-inference.huggingface.co/models/mistralai/Mistral-7B-Instruct-v0.2";
    $apiKey = "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"; // Remplacez par votre clé API Hugging Face

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        "Authorization: Bearer " . $apiKey
    ));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Indiquez à cURL le chemin du fichier cacert.pem (si nécessaire)
    curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . '/cacert.pem');

    // Activer les erreurs cURL
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_VERBOSE, true);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($response === false) {
        $error_msg = curl_error($ch);
    }
    curl_close($ch);

    if ($response === false) {
        return ['error' => 'cURL Error: ' . $error_msg, 'httpcode' => $httpcode];
    }

    if ($httpcode != 200) {
        return ['error' => 'Failed to fetch data from Hugging Face API', 'httpcode' => $httpcode];
    }

    return json_decode($response, true);
}

function getTeamInfo() {
    $jsonData = file_get_contents('team_info.json');
    return json_decode($jsonData, true);
}

function extractAnswer($fullResponse, $question) {
    $startPos = strrpos($fullResponse, "Q: " . $question . "\nA:");
    if ($startPos !== false) {
        $answer = substr($fullResponse, $startPos + strlen("Q: " . $question . "\nA:"));
        $firstSentence = extractFirstSentence($answer);
        return trim($firstSentence);
    }
    return $fullResponse;
}

function extractFirstSentence($text) {
    $sentences = preg_split('/(?<=[.?!:])\s+/', $text, 2, PREG_SPLIT_NO_EMPTY);
    return $sentences[0];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postData = file_get_contents("php://input");
    $request = json_decode($postData, true);
    $question = $request['question'];
    $teamInfo = getTeamInfo();
    $context = json_encode($teamInfo, JSON_PRETTY_PRINT);
    //$context = "Here is some information about our team:\n" . json_encode($teamInfo, JSON_PRETTY_PRINT);

    $data = [
        'inputs' => $context . "\nQ: " . $question . "\nA:"
    ];

    $result = callHuggingFaceApi($data);
    if (isset($result['error'])) {
        echo json_encode(['error' => $result['error'], 'httpcode' => $result['httpcode']]);
    } else {
        $fullResponse = $result[0]['generated_text'];
        $answer = extractAnswer($fullResponse, $question);
        echo json_encode(['answer' => $answer]);
    }
}


?>
