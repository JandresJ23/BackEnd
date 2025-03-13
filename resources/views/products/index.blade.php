<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Ecommerce Increíble</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Arial", sans-serif;
    }

    body {
      background: #fff3e0;
      color: #5d4037;
    }

    header {
      width: 100%;
      background: #d84315;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: bold;
    }

    header nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    header nav ul li a:hover {
      color: #ffcc80;
    }

    .hero {
      width: 100%;
      height: 70vh;
      background: url('descarga.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      max-width: 600px;
      margin: 0 auto 30px;
    }

    .hero-content a {
      background: #ffb74d;
      color: #000;
      padding: 15px 25px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .hero-content a:hover {
      background: #ffa726;
    }

    .categories {
      padding: 50px 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      background: #fff;
    }

    .category {
      flex: 1 1 250px;
      min-width: 250px;
      max-width: 300px;
      background: #ffecb3;
      border: 1px solid #e0a800;
      border-radius: 8px;
      text-align: center;
      padding: 20px;
      transition: box-shadow 0.3s;
    }

    .category:hover {
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    footer {
      background: #6d4c41;
      color: #fff;
      padding: 50px 30px;
      text-align: center;
    }

    .footer-links a {
      color: #ffcc80;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: #ffab40;
    }

    .footer-copy {
      font-size: 0.9rem;
      color: #d7ccc8;
      margin-top: 10px;
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

  <section class="hero">
    <div class="hero-content">
      <h1>Bienvenido a la mejor tienda</h1>
      <p>
        Explora nuestro catálogo exclusivo y disfruta de una experiencia de compra sin igual. Calidad, precio y variedad en un solo lugar.
      </p>
      <a href="#">¡Compra ahora!</a>
    </div>
  </section>

  <footer>
    <h2>Andres Felipe Joya Buitrago</h2>
    <div class="footer-links">
      <a href="#">Términos</a>
      <a href="#">Políticas</a>
      <a href="#">Soporte</a>
      <a href="#">Contacto</a>
    </div>
    <div class="footer-copy">
      &copy; 2025 Mi E-commerce. Todos los derechos reservados.
    </div>
  </footer>
</body>
</html>
