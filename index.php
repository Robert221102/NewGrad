<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberWise</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Inline Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f9;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 1rem 2rem;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        header a {
            background-color: #fff;
            color: #007BFF;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .content {
            padding: 2rem;
            margin: auto;
            max-width: 800px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .card h3 {
            margin-top: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .progress {
            margin-top: 0.5rem;
            height: 10px;
            background: #eaeaea;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress div {
            height: 100%;
            background: #007BFF;
            width: 0%; /* Set progress to 0% */
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #ddd;
            margin-top: 2rem;
        }

        .badge {
            background-color: #28a745;
            color: white;
            padding: 0.2rem 0.5rem;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <header>
        <h1>CyberWise</h1>
        <a href="#">Add New Simulation</a>
    </header>
    <main class="content">
        <h2>Simulated Attacks</h2>
        <div class="card">
            <h3>
                <a href="phishing.php">Phishing Email Simulation</a> 
                <span class="badge">Active</span>
            </h3>
            <p>Learn to identify phishing emails and prevent unauthorized access.</p>
            <div class="progress">
                <div></div>
            </div>
            <p>0% Complete</p>
        </div>

        <div class="card">
            <h3>Ransomware Simulation <span class="badge">Upcoming</span></h3>
            <p>Experience a ransomware attack and learn how to respond.</p>
            <div class="progress">
                <div></div>
            </div>
            <p>0% Complete</p>
        </div>

        <h2>Training Progress</h2>
        <div class="card">
            <h3>Overall Progress</h3>
            <div class="progress">
                <div></div>
            </div>
            <p>0% Complete</p>
        </div>
    </main>
    <footer>
        <p>© 2024 Cybersecurity Awareness Platform. All Rights Reserved.</p>
    </footer>
</body>
</html>
