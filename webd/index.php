<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link  -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <title>Modalar - olami</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light nav__bar">
    <div class="container-fluid">
      <a class="navbar-brand fs-2" href="index.html">Texno.uz</a>
      <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav fs-4 fw-bold">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#aloqa">Aloqa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="openModalBtn" onclick="openModal()" aria-current="page" href="../login/signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="openModalBtn" href="../login/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <!-- main  -->

      <div class="container">
        <div class="row g-0 mt-5">
          <div class="col-sm-6 col-md-5">
            <img src="./img/download (1).jpeg" alt="..." width="95%" height="700px" class="img-fluid">
          </div>
          <div class="col-sm-6 col-md-5">
            <h3>card title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, magni quibusdam laborum repellat doloremque placeat unde cum at, deserunt, quidem ipsum nobis officia quae asperiores omnis vel exercitationem perferendis ea!</p>
          </div>
          <div class="col-6 col-md-2">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, tempora amet? Deleniti necessitatibus dolor voluptate ratione aspernatur! Expedita aliquid quos neque aperiam tempore adipisci fugit eos quisquam sapiente, ab inventore. </p>
          </div>
        </div>


        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./img/download (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>


      </div>
      </div>



      <div class="container " id="aloqa">
        <h1 class="mt-3 text-center fs-4 text-uppercase">Taklif</h1>
        <div class="contact mt-5">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Aloqa uchun</h2>
            <input type="text" class="field" placeholder="Ismingiz...">
            <input type="text" class="field" placeholder="Email...">
            <input type="text" class="field" placeholder="Telefon...">
            <textarea placeholder="Xabar..." class="field"></textarea>
            <button class="btn__y">Yuborish</button>
          </div>
        </div></div>
      </div>

      <footer>
        <div class="container footer_i">
          <div class="row footer__o">
            <div class="col">
              <h3>About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col">
              <h3>Contact</h3>
              <p>123 Street, City, Country</p>
              <p>Email: info@example.com</p>
              <p>Phone: +123 456 789</p>
            </div>
            <div class="col">
              <h3>Follow Us</h3>
              <ul class="social-media">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>



  <!-- js link -->
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</body>
</html>