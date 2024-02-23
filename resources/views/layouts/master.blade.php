<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollo Ofertas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
            background-blend-mode: multiply,multiply;
        }
        header {
            background-color: #464b50cb;
            padding: 20px 0;
            color: #fff;
        }
        header img {
            height: 40px;
            margin-right: 10px;
        }
        header h1 {
            display: inline-block;
            font-size: 1.5rem;
            margin-bottom: 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
        }
        h5 {
            width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <header class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 text-left">
                <img src="img/logo.png" alt="Logo de Chollo Ofertas">
            </div>
            <div class="col-md-4 text-center">
                <nav>
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#">Nuevos</a></li>
                        <li><a href="#">Destacados</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4"></div>
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="container-fluid">
        <p>©CholloOfertas {{ date('Y') }}</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
