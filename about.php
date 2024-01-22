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


    .about-section {
      padding: 50px;
      text-align: center;
    }

    .about-section h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .about-section p {
      font-size: 18px;
      line-height: 1.5;
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
      </ul>
    </nav>
  </div>
  <div class="about-section">
    <h2>About Us</h2>
    <p>Welcome to My Salon, your go-to destination for all your hair and beauty needs. With our team of highly skilled stylists and therapists, we provide a wide range of services to help you look and feel your best.</p>
    <p>At My Salon, we believe in delivering exceptional customer service and ensuring that each visit is a delightful experience. Whether you're looking for a trendy haircut, a relaxing massage, or a pampering manicure, our dedicated staff will cater to your individual preferences and provide personalized services.</p>
    <p>With our state-of-the-art facilities and top-quality products, we strive to exceed your expectations and leave you completely satisfied. We stay updated with the latest industry trends and techniques to offer you the best possible results.</p>
    <p>Visit us today and let our talented team transform your look and boost your confidence. We can't wait to serve you!</p>
  </div>
</body>

</html>