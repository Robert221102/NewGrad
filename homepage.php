<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Training Platform</title>
    <style>
        /* General Reset */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header Section */
        .header {
            background: linear-gradient(90deg, #007BFF, #0056b3);
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .header p {
            font-size: 1.2rem;
        }

        /* About Us Section */
        .about-us {
            padding: 40px 20px;
            background: #f8f9fa;
            text-align: center;
        }

        .about-us h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .about-us p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Lessons Section */
        .lessons {
            padding: 40px 20px;
            text-align: center;
            background: #ffffff;
        }

        .lessons h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .lessons p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .lesson-btn {
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 12px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 10px;
        }

        .lesson-btn:hover {
            background-color: #0056b3;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Cybersecurity Training Platform</h1>
            <p>Your gateway to mastering cybersecurity through real-world simulations and expert knowledge.</p>
        </div>
    </header>

    <main>
        <!-- About Us Section -->
        <section class="about-us">
            <div class="container">
                <h2>About Us</h2>
                <p>
                    Welcome to the Cybersecurity Training Platform, your partner in building a robust understanding of cybersecurity threats 
                    and solutions. Our platform offers interactive lessons, engaging simulations, and valuable resources to equip you with 
                    the skills to identify, mitigate, and respond to cyber threats effectively. Whether you're a beginner or a professional, 
                    we provide a comprehensive learning experience tailored to all levels.
                </p>
            </div>
        </section>

        <!-- Lesson Selection Section -->
        <section class="lessons">
            <div class="container">
                <h2>Start Learning</h2>
                <p>Select a lesson to begin your journey toward becoming a cybersecurity expert.</p>
                <a href="index.php" class="lesson-btn">Choose your Lesson</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Cybersecurity Training Platform. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
