<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saloon Website</title>
  <!--  <link rel="stylesheet" href="/Seminar_Practical/Saloon/stylesaloon.css"> -->

  <style>
    * {
      margin: 0;
      padding: 0;

    }

    .aa {
      width: 100%;
      height: 100vh;
      background: linear-gradient(rgba(0, 0, 0, 0.5), #f29778), url(bg.jpeg) no-repeat top left;

      background-size: cover;
    }

    nav {
      display: flex;
      width: 100%;
      align-items: center;
      flex-wrap: wrap;
      padding: 5px 0;
    }

    .logo {
      width: 120px;
      counter: pointer;
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
      color: white;
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

    .mid {
      max-width: 650px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }

    .mid span {
      letter-spacing: 10px;

    }

    .mid h1 {
      font-size: 3.5em;
    }

    .mid a {
      text-decoration: none;
      background-color: rgb(254, 254, 254);
      color: black;
      padding: 10px 20px;
      letter-spacing: 5px;
      transition: 0.4s;
      text-size-adjust: 25px;
    }

    .mid a:hover {
      background: transparent;
      border: 1px solid rgb(160, 181, 40);
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
  <section class="mid">
    <span>Explore</span>
    <h1>HAIRCUT</h1>
    <br>
    <a href="index.php">BOOK SLOT</a>
  </section>
</body>

</html>