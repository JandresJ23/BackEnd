<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Detalle de Producto - Estilo Amazon</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: #fffbf2;
      color: #222;
    }

    header {
      background: #d35400;
      color: #fff;
      padding: 15px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
    }

    .search-bar input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .nav-links a {
      color: #fff;
      font-size: 1rem;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #ffcc00;
    }

    .product-detail {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1200px;
      margin: 20px auto;
      background: #fff5e1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .product-info h1 {
      font-size: 2rem;
      color: #c0392b;
      margin-bottom: 10px;
    }

    .price {
      font-size: 1.8rem;
      color: #e74c3c;
      font-weight: bold;
    }

    .buy-box button {
      background: #f39c12;
      padding: 12px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .buy-box button:hover {
      background: #e67e22;
    }

    footer {
      background: #d35400;
      color: #fff;
      padding: 30px;
      text-align: center;
    }

    .footer-copy {
      font-size: 1rem;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Mi E-commerce</div>
    <div class="search-bar">
      <input type="text" placeholder="Buscar productos, marcas y más...">
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categorías</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Mi Cuenta</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="product-detail">
    <div class="product-info">
      <h1>Ferrari</h1>
      <div class="price">US $430,000. </div>
      <p>Experimenta el máximo rendimiento con este increíble portátil gaming, diseñado para los jugadores más exigentes.</p>
    </div>
    <div class="buy-box">
      <button>Agregar al Carrito</button>
      <button>Comprar Ahora</button>
    </div>
  </div>

  <footer>
    <div class="footer-copy">&copy; 2025 Andres Felipe Joya Buitrago. Todos los derechos reservados.</div>
  </footer>
</body>
</html>