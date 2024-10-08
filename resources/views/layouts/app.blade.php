<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom right, #e3f2fd, #bbdefb);
        }
        form {
            background: grey;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Adds padding and border to the element's total width and height */
        }
        input[type="submit"] {
            background-color: #363636;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #000080;
        }
        h2 {
            text-align: center; /* Center align the title */
        }
        .submit-container {
            text-align: right; /* Menyelaraskan isi container ke kanan */
        }


        /* CSS untuk tabel */
        table {
            width: 80%;
            border-collapse: collapse; /* Menggabungkan border tabel dan cell */
            margin: 20px auto; /* Pusatkan tabel */
            background-color: #D9DDDC; /* Warna latar belakang tabel */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar tabel */
        }

        th, td {
            padding: 10px; /* Ruang di dalam sel */
            text-align: left; /* Perataan teks di kiri */
            border-bottom: 1px solid #222021; /* Garis bawah setiap baris */
        }

        th {
            background-color: #363636; /* Warna latar belakang header */
            color: white; /* Warna teks header */
        }

        tr:hover {
            background-color: #777B7E; /* Efek hover untuk baris tabel */
        }

        td {
            color: #333; /* Warna teks */
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
