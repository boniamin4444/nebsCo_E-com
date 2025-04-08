<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .footer-dark {
      padding: 50px 0;
      color: #f0f9ff;
      background-color: #282d32;
    }

    .footer-dark h3 {
      margin-top: 0;
      margin-bottom: 12px;
      font-weight: bold;
      font-size: 16px;
    }

    .footer-dark ul {
      padding: 0;
      list-style: none;
      line-height: 1.6;
      font-size: 14px;
      margin-bottom: 0;
    }

    .footer-dark ul a {
      color: inherit;
      text-decoration: none;
      opacity: 0.8;
    }

    .footer-dark ul a:hover {
      opacity: 1;
    }

    .footer-dark .item.text p {
      opacity: 0.8;
      margin-bottom: 0;
    }

    .footer-dark .item.social {
      text-align: center;
    }

    .footer-dark .item.social > a {
      font-size: 20px;
      width: 36px;
      height: 36px;
      line-height: 36px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      box-shadow: 0 0 4px rgba(255, 255, 255, 0.1);
      margin: 0 8px;
      color: #fff;
      opacity: 0.75;
    }

    .footer-dark .item.social > a:hover {
      opacity: 0.9;
    }

    .footer-dark .copyright {
      text-align: center;
      padding-top: 24px;
      opacity: 0.3;
      font-size: 13px;
      margin-bottom: 0;
    }

    @media (max-width: 767px) {
      .footer-dark .item:not(.social) {
        text-align: center;
        padding-bottom: 20px;
      }

      .footer-dark .item.text {
        margin-bottom: 0;
      }
    }
  </style>
</head>
<body>

<div class="footer-dark">
  <footer>
    <div class="container">
      <div class="row row-cols-2 row-cols-md-4">
        <div class="col item">
          <h3>NebsCommerze</h3>
          <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>consectetur Wnae nunc.</li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Condition</a></li>
          </ul>
        </div>
        <div class="col item">
          <h3>INFORMATION</h3>
          <ul>
            <li><a href="#">Old City Street.Use</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Check out</a></li>
            <li><a href="#">Return and refund</a></li>
          </ul>
        </div>
        <div class="col item text">
          <h3>Let's get discount for your every order!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          <form class="d-flex mt-2">
            <input class="form-control me-2" type="email" placeholder="Email Address" aria-label="Email">
            <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
        <div class="col item social">
          <h3>SOCIAL MEDIA</h3>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <p class="mt-2"><i class="fas fa-phone"></i> 1000-000-00-0000</p>
          <p><i class="fas fa-envelope"></i> info@email.com</p>
        </div>
      </div>
      <p class="copyright">NebsCommerze © 2024 | All Rights Reserved</p>
    </div>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
