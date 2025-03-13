<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Producto - Mi E-commerce</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: #ffefd5;
      color: #5a3e1b;
    }

    header {
      background: #d2691e;
      padding: 20px;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: bold;
      letter-spacing: 2px;
    }

    header nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s;
    }

    header nav ul li a:hover {
      color: #ffcc00;
    }

    .form-container {
      max-width: 800px;
      margin: 50px auto;
      background: #fff8dc;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-title h1 {
      font-size: 2rem;
      color: #a0522d;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-group input, .form-group textarea, .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #d2691e;
      border-radius: 5px;
    }

    .submit-btn {
      background: #d2691e;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .submit-btn:hover {
      background: #a0522d;
    }

    footer {
      background: #8b4513;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Mi E-commerce</div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <div class="form-container">
    <div class="form-title">
      <h1>Agregar un Nuevo Producto</h1>
      <p>Completa los detalles para registrar un nuevo producto en nuestro catálogo.</p>
    </div>

    <form id="productForm">
      <div class="form-group">
        <label for="productName">Nombre del Producto:</label>
        <input type="text" id="productName" name="productName" required>
      </div>
      
      <div class="form-group">
        <label for="productDescription">Descripción:</label>
        <textarea id="productDescription" name="productDescription" required></textarea>
      </div>

      <div class="form-group">
        <label for="price">Precio (USD):</label>
        <input type="number" id="price" name="price" step="0.01" required>
      </div>

      <div class="form-group">
        <label for="stock">Stock Disponible:</label>
        <input type="number" id="stock" name="stock" required>
      </div>

      <div class="form-group">
        <label for="category">Categoría:</label>
        <select id="category" name="category" required>
          <option value="">--Selecciona una categoría--</option>
          <option value="ropa">Ropa</option>
          <option value="accesorios">Accesorios</option>
          <option value="tecnologia">Tecnología</option>
        </select>
      </div>

      <button type="submit" class="submit-btn">Crear Producto</button>
    </form>
  </div>

  <footer>
    <p>Creado por <strong>Andres Felipe Joya Buitrago</strong>. Todos los derechos reservados &copy; 2025.</p>
  </footer>

</body>
</html>
