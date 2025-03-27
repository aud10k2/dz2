<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        header, footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav {
            background: #555;
            padding: 10px;
            display: flex;
            justify-content: space-around;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            background: #777;
            border-radius: 5px;
        }
        nav a:hover {
            background: #999;
        }
        main {
            flex: 1;
            padding: 0;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

<header>
    <h1>Сайт</h1>
</header>

<nav>
    <a href="index.html" target="content-frame">GET_POST</a>
    <a href="forms.php" target="content-frame">forms</a>
</nav>

<main>
    <iframe name="content-frame"></iframe>
</main>

<footer>
    <p>© 2025 Отставнов Максим</p>
</footer>

</body>
</html>
