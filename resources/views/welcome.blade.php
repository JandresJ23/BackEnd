<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones Exclusivas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFAF0;
            border: 10px solid #FF8C00;
            box-shadow: 0 0 20px rgba(255, 140, 0, 0.6);
            padding: 20px;
        }
        .bg-promo {
            background-image: url('/images/promo-bg.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            border: 5px solid #FF8C00;
        }
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 140, 0, 0.6);
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(255, 140, 0, 0.6);
        }
    </style>
</head>
<body class="bg-yellow-50">
    
    <div class="bg-promo h-96 flex items-center justify-center text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="text-center relative z-10">
            <h1 class="text-5xl font-bold mb-4">Ecommerce Unab</h1>
            <p class="text-xl mb-6">Aprovecha descuentos imperdibles y ofertas limitadas que no puedes dejar pasar.</p>
            <button onclick="window.location.href='/'" class="mt-6 bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-8 rounded-full btn-glow">
                Ir a Inicio
            </button>
            <button onclick="window.location.href='/products'" class="mt-6 ml-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full btn-glow">
                Ver Productos
            </button>
            <button onclick="window.location.href='/products/create'" class="mt-6 ml-4 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full btn-glow">
                Crear Producto
            </button>
        </div>
    </div>
    
    <footer class="bg-orange-900 text-white py-8 border-t-4 border-orange-500">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Andres Felipe Joya Buitrago. Todos los derechos reservados.</p>
        </div>
    </footer>
    
</body>
</html>
