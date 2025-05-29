<?php
header('Content-Type: application/json');

// Simulated processing delay for help-related responses
function simulateDelay() {
    sleep(2); // Simulates database processing delay
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = strtolower(trim($_POST['message'] ?? ''));

    // Instant static responses
    $staticResponses = [
        "hi" => "Hello, Hi, how are you?",
        "hello" => "Hi there! What can I help you with?",
        "how are you" => "I'm just a bot, but I'm functioning perfectly!",
        "bye" => "Goodbye! Have a great day!",
        "thanks" => "You're welcome!",
    ];

    // Help menu and detailed responses (with delay)
    $helpMenu = "Here are the things I can help you with. Type the number of the option you want to know more about:\n\n" .
                "1. How many pending invoices to process?\n" .
                "2. What is the stock running low?\n" .
                "3. Which vendor is missing supplies?\n" .
                "4. Which payment needs to be processed?";

    $helpDetails = [
        "1" => "Answer: 2 invoices are in the queue.",
        "2" => "Answer: We are running out of Lenovo laptops for new joiners.",
        "3" => "Answer: Network cables.",
        "4" => "Answer: None at the moment.",
    ];

    // Handle static responses (no delay)
    if (array_key_exists($input, $staticResponses)) {
        echo json_encode(['response' => $staticResponses[$input]]); // Return instantly
        exit;
    }

    // Handle help menu and detailed responses (with delay)
    if ($input === "help") {
        simulateDelay(); // Add delay
        echo json_encode(['response' => nl2br($helpMenu)]);
        exit;
    } elseif (array_key_exists($input, $helpDetails)) {
        simulateDelay(); // Add delay
        echo json_encode(['response' => $helpDetails[$input]]);
        exit;
    }

    // Default response for unmatched inputs
    echo json_encode(['response' => "I'm not sure how to respond to that. Try typing 'help' to see available options."]);
    exit;
}

  //  response for invalid request
echo json_encode(['response' => 'Invalid request.']);
exit;
