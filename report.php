<?php
// Correct answers for the quiz
$correctAnswers = [
    "q1" => "b", // A type of social engineering attack to steal sensitive information
    "q2" => "b", // Specific individuals or organizations
    "q3" => "a", // Phishing via text messages
    "q4" => "c", // Emails from known contacts using official channels
    "q5" => "b", // To add an extra layer of security
];

// Question texts
$questions = [
    "q1" => "What is phishing?",
    "q2" => "What does 'spear phishing' target?",
    "q3" => "What is 'smishing'?",
    "q4" => "Which of the following is NOT a phishing indicator?",
    "q5" => "What is the purpose of multi-factor authentication (MFA)?",
];

// Options for each question
$options = [
    "q1" => [
        "a" => "A method to send legitimate emails to users.",
        "b" => "A type of social engineering attack to steal sensitive information.",
        "c" => "A strategy for securely sharing passwords.",
        "d" => "None of the above.",
    ],
    "q2" => [
        "a" => "Everyone using an email account.",
        "b" => "Specific individuals or organizations.",
        "c" => "Social media accounts only.",
        "d" => "Large corporations exclusively.",
    ],
    "q3" => [
        "a" => "Phishing via text messages.",
        "b" => "Phishing through social media platforms.",
        "c" => "Phishing using fake phone calls.",
        "d" => "Phishing attacks that target executives.",
    ],
    "q4" => [
        "a" => "Urgent and threatening language.",
        "b" => "Generic greetings like 'Dear Customer.'",
        "c" => "Emails from known contacts using official channels.",
        "d" => "Suspicious links or attachments.",
    ],
    "q5" => [
        "a" => "To simplify login processes.",
        "b" => "To add an extra layer of security.",
        "c" => "To store passwords securely.",
        "d" => "To prevent software updates.",
    ],
];

// Process the submitted answers
$userAnswers = $_POST;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Lab - Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007BFF;
        }

        .question {
            margin-bottom: 20px;
        }

        .correct {
            color: green;
            font-weight: bold;
        }

        .incorrect {
            color: red;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz Report</h1>
        <?php foreach ($questions as $questionID => $questionText): ?>
            <div class="question">
                <p><strong><?php echo $questionText; ?></strong></p>
                <p>Your Answer: 
                    <?php 
                    if (isset($userAnswers[$questionID])) {
                        $userAnswer = $userAnswers[$questionID];
                        echo $options[$questionID][$userAnswer];
                        echo $userAnswer == $correctAnswers[$questionID] ? 
                            " <span class='correct'>(Correct)</span>" : 
                            " <span class='incorrect'>(Incorrect)</span>";
                    } else {
                        echo "<span class='incorrect'>No answer provided</span>";
                    }
                    ?>
                </p>
                <p>Correct Answer: <span class="correct"><?php echo $options[$questionID][$correctAnswers[$questionID]]; ?></span></p>
            </div>
        <?php endforeach; ?>

        <a href="lab.php" class="btn">Retake Quiz</a>
    </div>
</body>
</html>
