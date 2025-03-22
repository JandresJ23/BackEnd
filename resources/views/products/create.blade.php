<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
<body class="bg-gray-100">
    
    <nav class="bg-orange-600 p-4 text-black flex justify-between">
        <a href="/" class="font-bold text-lg">Mi E-commerce</a>
        <div>
            <a href="/products" class="mx-2">Productos</a>
            <a href="/products/create" class="mx-2">Crear Producto</a>
            <a href="/contact" class="mx-2">Contacto</a>
        </div>
    </nav>

    <div class="container mx-auto mt-10 bg-white p-6 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Crear Producto</h1>
        <form action="/products" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold">Nombre del Producto</label>
                <input type="text" name="name" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block font-semibold">Descripción</label>
                <textarea name="description" class="w-full p-2 border rounded"></textarea>
            </div>
            <div>
                <label class="block font-semibold">Precio</label>
                <input type="number" name="price" class="w-full p-2 border rounded">
            </div>
            <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
    
    <footer class="bg-orange-900 text-white py-4 text-center mt-10">
        <p>&copy; 2025 Andres Felipe Joya Buitrago. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
