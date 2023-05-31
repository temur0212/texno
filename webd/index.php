<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link  -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>TEXNO NEWS</title>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light nav__bar ">
    <div class="container-fluid">
      <a class="navbar-brand fs-2" href="index.php">TEXNO NEWS</a>
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
  <div></div>

  <div class="container ">
    <div class="row g-4 mt-4 ">
      <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 1 ";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();  ?>
      <div class="col-sm-6 col-md-5">

        <?php echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=95% height=700px  class=img-fluid >"; ?>

      </div>
      <div class="col-sm-6 col-md-5">
        <p><?php echo $row['sana'] ?></p>
        <h3><?php echo $row['title'] ?></h3>
        <p><?php echo $row['malumot'] ?> <a href="<?php echo $row['link'] ?>">ko'proq malumot</a></p>

        <!-- <a href="" target="_blank">ko'proq malumot -></a> -->
      </div>
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
      <div class="col ">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 1,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 2,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 3,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <div> <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?> </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>

      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 5,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 6,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 5,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 6,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
    </div>








    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 7,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=285px widht=635px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 8,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img hheight=285px widht=635px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
        
      </div>
      


    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 7,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=285px widht=635px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 8,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img hheight=285px widht=635px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' class=card-img-top>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
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
          <input type="text" class="field" name="ism" placeholder="Ismingiz...">
          <input type="email" class="field" name="email" placeholder="Email...">
          <input type="text" class="field" name="tele" placeholder="Telefon...">
          <input placeholder="Xabar..." class="field"></input>
          <button class="btn__y">Yuborish</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container footer_i">
      <div class="row footer__o">
        <div class="col text-white">
          <h3 >About Us</h3>
          <p>Texnologik yangiliklarni yoritib beruvchi web sayt</p>
        </div>
        <div class="col text-white">
          <h3>Contact</h3>
          <p>TATUUF</p>
          <p>Email: erkinovtemur48@gmail.com</p>
          <p>Phone: +998 99 288 02 12</p>
        </div>
        <div class="col text-white">
          <h3>Follow Us</h3>
          <ul class="social-media">
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-telegram"></i></a></li>
            <li><a href="https://www.instagram.com/erkinov.0212/"><i class="fab fa-instagram"></i></a></li>
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