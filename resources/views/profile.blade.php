<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WLTugas2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .profile-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-container .info {
            background-color: #ddd;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <img src="https://i.pinimg.com/736x/1f/b4/0c/1fb40cbdabd03a89c9ee410d2c6d494d.jpg" alt="Spidermine">
        <div class="info">
            <strong>Nama:</strong> <?= $nama ?>
        </div>
        <div class="info">
            <strong>Kelas:</strong> <?= $kelas ?>
        </div>
        <div class="info">
            <strong>NPM:</strong> <?= $npm ?>
        </div>
    </div>
</body>

</html>