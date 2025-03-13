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
        }
        .bg-promo {
            background-image: url('/images/promo-bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
            <h1 class="text-5xl font-bold mb-4">¡Descubre Nuestras Promociones Especiales!</h1>
            <p class="text-xl mb-6">Aprovecha descuentos imperdibles y ofertas limitadas que no puedes dejar pasar.</p>
            <button class="mt-6 bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-8 rounded-full btn-glow">
                Explorar Ofertas
            </button>
        </div>
    </div>
    
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-orange-800 mb-8 text-center">Productos Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="category-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="/images/producto1.jpg" alt="Producto destacado" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-orange-800 mb-2">Producto Premium</h3>
                    <p class="text-gray-700">Disfruta de la mejor calidad con un precio especial por tiempo limitado.</p>
                    <a href="#" class="mt-4 inline-block text-red-500 hover:text-red-600">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-orange-100 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-orange-800 mb-8 text-center">Opiniones de Nuestros Clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-lg shadow-lg bg-white">
                    <p class="text-gray-700">"Una experiencia de compra increíble, sin duda volveré pronto."</p>
                    <div class="mt-4 flex items-center">
                        <img src="/images/cliente1.jpg" alt="Cliente feliz" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <h4 class="text-orange-800 font-semibold">María González</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-orange-900 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Andres Felipe Joya Buitrago. Todos los derechos reservados.</p>
        </div>
    </footer>
    
</body>
</html>
