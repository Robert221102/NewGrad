<?php
// Process form submission and calculate score
$score = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Correct answers
    $correctAnswers = [
        "q1" => "b",
        "q2" => "b",
        "q3" => "a",
        "q4" => "c",
        "q5" => "b",
    ];

    // Check user answers
    foreach ($correctAnswers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Lab</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        .question {
            margin: 20px 0;
        }

        .options {
            margin: 10px 0 20px;
        }

        .options label {
            display: block;
            margin-bottom: 10px;
        }

        .nav-btn, .submit-btn {
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

        .nav-btn:hover, .submit-btn:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #eaf4ff;
            border-left: 5px solid #007BFF;
        }

        .result strong {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Phishing Lab Questions</h1>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result">
                <h2>Your Score: <strong><?php echo $score; ?>/5</strong></h2>
                <p>
                    <?php
                    if ($score == 5) {
                        echo "Excellent! You have a strong understanding of phishing.";
                    } elseif ($score >= 3) {
                        echo "Good job! You understand most of the concepts, but there's room for improvement.";
                    } else {
                        echo "Keep learning! Review the lecture to improve your understanding.";
                    }
                    ?>
                </p>
                <a href="lab.php" class="nav-btn">Try Again</a>
            </div>
        <?php else: ?>
            <form method="post">
                <!-- Question 1 -->
                <div class="question">
                    <h3>1. What is phishing?</h3>
                    <div class="options">
                        <label><input type="radio" name="q1" value="a"> A method to send legitimate emails to users.</label>
                        <label><input type="radio" name="q1" value="b"> A type of social engineering attack to steal sensitive information.</label>
                        <label><input type="radio" name="q1" value="c"> A strategy for securely sharing passwords.</label>
                        <label><input type="radio" name="q1" value="d"> None of the above.</label>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="question">
                    <h3>2. What does "spear phishing" target?</h3>
                    <div class="options">
                        <label><input type="radio" name="q2" value="a"> Everyone using an email account.</label>
                        <label><input type="radio" name="q2" value="b"> Specific individuals or organizations.</label>
                        <label><input type="radio" name="q2" value="c"> Social media accounts only.</label>
                        <label><input type="radio" name="q2" value="d"> Large corporations exclusively.</label>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="question">
                    <h3>3. What is "smishing"?</h3>
                    <div class="options">
                        <label><input type="radio" name="q3" value="a"> Phishing via text messages.</label>
                        <label><input type="radio" name="q3" value="b"> Phishing through social media platforms.</label>
                        <label><input type="radio" name="q3" value="c"> Phishing using fake phone calls.</label>
                        <label><input type="radio" name="q3" value="d"> Phishing attacks that target executives.</label>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="question">
                    <h3>4. Which of the following is NOT a phishing indicator?</h3>
                    <div class="options">
                        <label><input type="radio" name="q4" value="a"> Urgent and threatening language.</label>
                        <label><input type="radio" name="q4" value="b"> Generic greetings like "Dear Customer."</label>
                        <label><input type="radio" name="q4" value="c"> Emails from known contacts using official channels.</label>
                        <label><input type="radio" name="q4" value="d"> Suspicious links or attachments.</label>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="question">
                    <h3>5. What is the purpose of multi-factor authentication (MFA)?</h3>
                    <div class="options">
                        <label><input type="radio" name="q5" value="a"> To simplify login processes.</label>
                        <label><input type="radio" name="q5" value="b"> To add an extra layer of security.</label>
                        <label><input type="radio" name="q5" value="c"> To store passwords securely.</label>
                        <label><input type="radio" name="q5" value="d"> To prevent software updates.</label>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
                <a href="lecture.php" class="nav-btn">Back to Lecture</a>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
