<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 900px; /* Genişlik arttırıldı */
            width: 90%; /* Mobil uyum için esnek yapıldı */
            margin-top: 50px;
            overflow: auto; /* Taşan içerikler için kaydırma ekledik */
        }
        h1 {
            color: #6c5ce7;
        }
        button {
            background-color: #6c5ce7;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            font-weight: bold;
        }
        button:hover {
            background-color: #4a3db7;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
