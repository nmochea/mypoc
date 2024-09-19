<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff; /* White background */
            color: #000; /* Black text */
        }
        .container {
            text-align: center;
            padding: 30px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #000; /* Black text for paragraph */
        }
    </style>
</head>
<body>
 <?php header("Location: data:text/html,<script>document.write('<h1>URL spoofing using Data Uri</h1>')</script>");?>
</body>
</html>
