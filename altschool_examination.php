<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oluwatosin Altschool Examination</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 1.2em;
        }
</head>
<body>
    <h1>Welcome to My Website on AWS EC2 Instance</h1>
    <p>This is Oluwatosin's Altschool Examination project hosted on an AWS EC2 instance.</p>
    <p>Feel free to explore and learn more about AWS and web hosting!</p>
    <p>This page is served from <b><?php echo gethostname(); ?></b></p>
    <p>Current date and time is: <b><?php echo date('Y-m-d H:i:s'); ?></b></p>
    <p>Server IP address is: <b><?php echo $_SERVER['SERVER_ADDR']; ?></b></p>
</body>
</html>