<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página no encontrada</title>
    <meta name="robots" content="noindex, follow">
    
    <style>
        :root {
            --bg-color: #0f0f0f;
            --text-color: #f0f0f0;
            --accent-color: #FF0050; /* Color corporativo o de alerta */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Arial', sans-serif;
            margin: 0;
            overflow: hidden;
        }

        .container { text-align: center; }

        /* Efecto Glitch CSS Puro */
        .glitch {
            font-size: 8rem;
            font-weight: bold;
            position: relative;
            color: var(--text-color);
            letter-spacing: -5px;
        }

        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--bg-color);
        }

        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 var(--accent-color);
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim-2 3s infinite linear alternate-reverse;
        }

        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00E6F2;
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2.5s infinite linear alternate-reverse;
        }

        p { font-size: 1.2rem; margin-bottom: 2rem; color: #888; }

        .btn {
            padding: 12px 24px;
            border: 2px solid var(--text-color);
            color: var(--text-color);
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn:hover { background-color: var(--text-color); color: var(--bg-color); }

        @keyframes glitch-anim {
            0% { clip: rect(10px, 9999px, 31px, 0); }
            20% { clip: rect(75px, 9999px, 80px, 0); }
            40% { clip: rect(20px, 9999px, 60px, 0); }
            60% { clip: rect(40px, 9999px, 25px, 0); }
            80% { clip: rect(65px, 9999px, 5px, 0); }
            100% { clip: rect(15px, 9999px, 95px, 0); }
        }
        @keyframes glitch-anim-2 {
            0% { clip: rect(65px, 9999px, 100px, 0); }
            100% { clip: rect(5px, 9999px, 20px, 0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="glitch" data-text="404">404</h1>
        <p>Parece que el enlace está roto o la noticia ha volado.</p>
        <a href="/" class="btn">Volver a la portada</a>
    </div>
</body>
</html>