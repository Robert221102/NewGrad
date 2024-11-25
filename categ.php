<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Categories</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
        }

        .header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .category-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-card h2 {
            font-size: 1.5rem;
            color: #333;
            margin: 0;
        }

        .category-card p {
            font-size: 1rem;
            color: #555;
            margin: 5px 0 0;
        }

        .category-card .btn {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .category-card .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            margin-top: 40px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>Assessment Categories</h1>
    </header>

    <div class="container">
        <!-- Web Category -->
        <div class="category-card">
            <div>
                <h2>Web</h2>
                <p>Learn about web-based assessment techniques.</p>
            </div>
            <a href="web.php" class="btn">Open</a>
        </div>

        <!-- Network Category -->
        <div class="category-card">
            <div>
                <h2>Network</h2>
                <p>Explore methods to assess network vulnerabilities.</p>
            </div>
            <a href="network.php" class="btn">Open</a>
        </div>

        <!-- Mobile Category -->
        <div class="category-card">
            <div>
                <h2>Mobile</h2>
                <p>Understand security assessments for mobile applications.</p>
            </div>
            <a href="mobile.php" class="btn">Open</a>
        </div>

        <!-- Cloud Category -->
        <div class="category-card">
            <div>
                <h2>Cloud</h2>
                <p>Delve into cloud security and assessment techniques.</p>
            </div>
            <a href="cloud.php" class="btn">Open</a>
        </div>

        <!-- API Category -->
        <div class="category-card">
            <div>
                <h2>Application Programming Interface (API)</h2>
                <p>Learn about API security and assessment practices.</p>
            </div>
            <a href="api.php" class="btn">Open</a>
        </div>

        <!-- Application Category -->
        <div class="category-card">
            <div>
                <h2>Application</h2>
                <p>Focus on security in software applications.</p>
            </div>
            <a href="application.php" class="btn">Open</a>
        </div>

        <!-- Wireless Category -->
        <div class="category-card">
            <div>
                <h2>Wireless</h2>
                <p>Explore assessments for wireless network security.</p>
            </div>
            <a href="wireless.php" class="btn">Open</a>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Cybersecurity Awareness Platform. All Rights Reserved.</p>
    </footer>

</body>
</html>
