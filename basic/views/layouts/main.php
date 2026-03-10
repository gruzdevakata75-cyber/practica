<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container_1 {
            background-image: url('/images/fon.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            border-radius: 20px;
        }
        .container_1 h1 {
            text-align: center;
            color: white;
            padding-top: 100px;
        }
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .container h2.text-center {
            color: white;
        }

        /* Фиксируем размер картинок в карточках */
        .card-img-top {
            width: 100%;         
            height: 550px;       
            object-fit: cover;   
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Салон красоты центрифуга</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?r=site/about">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Контакты</a>
                    </li>
                </ul>
                <div class="text-white">🛍️</div>
            </div>
        </div>
    </nav>

    <main class="container_1">
        <?= $content ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
