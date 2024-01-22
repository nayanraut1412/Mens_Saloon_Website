<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>About Us - My Salon</title>
  <style>
    /* CSS styles for the About section */

    nav {
      display: flex;
      width: 100%;
      align-items: center;
      flex-wrap: wrap;
      padding: 5px 0;
    }

    nav ul {
      flex: 1;
      text-align: right;
      padding-right: 30px;
    }

    nav ul li {
      display: inline-block;
      list-style: none;
      margin: 10px 30x;
      padding: 30px;

    }

    nav ul li a {
      color: black;
      text-decoration: none;
      font-family: 'Poltawski Nowy', serif;
      position: relative;
    }

    nav ul li a::after {
      content: '';
      width: 0%;
      height: 3px;
      position: absolute;
      bottom: -5px;
      left: 50%;
      transform: translateX(-50%);
      background: black;
      transition: width 0.3s;
    }

    nav ul li a:hover::after {

      width: 100%;
    }

    #services {
      text-align: center;
      padding: 50px;
    }

    .service {
      margin-bottom: 40px;
    }

    .service img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
    }

    .service h3 {
      margin-top: 20px;
      font-size: 24px;
    }

    .service p {
      margin-top: 1px;
      font-size: 16px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      background-color: #e91e63;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    .btn:hover {
      background-color: lightseagreen;
    }
  </style>
</head>

<body>

  <div class="aa">
    <nav>
      <img src="logo_saloon.png" class="logo" alt="logo">
      <ul>
        <li><a href="saloon_web.php">Home</a> </li>
        <li><a href="about.php">About</a> </li>
        <li><a href="services.php">Services</a> </li>
        <li><a href="lo.php">Admin</a> </li>
      </ul>
    </nav>
  </div>

  <section id="services">
    <h2>Our Services</h2>
    <div class="service">
      <img src="haircut.jpg" alt="Haircut">
      <h3>Haircut</h3>
      <p>Get a stylish and trendy haircut from our professional stylists.</p>
      <a href="index.php" class="btn">Book Now</a>
    </div>
    <div class="service">
      <img src="hair_color.jpg" alt="Hair Color">
      <h3>Hair Color</h3>
      <p>Enhance your hair with vibrant colors and highlights.</p>
      <a href="index.php" class="btn">Book Now</a>
    </div>
    <div class="service">
      <img src="facial.jpg" alt="Facial">
      <h3>Facial</h3>
      <p>Rejuvenate your skin with our refreshing facial treatments.</p>
      <a href="index.php" class="btn">Book Now</a>
    </div>
  </section>

  </div>
</body>

</html>