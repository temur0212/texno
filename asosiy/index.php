<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="page">
  <h1>TEXNO NEWS</h1>
  <div class="archive">
    <article class="article" >
      
    <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 1 ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 
      echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=800 height=500>";?>

     <p><?php echo $row['malumot']?></p>
     <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
     

    </article>
    <article class="article">2
    <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 1 ,1";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=180 height=200>";?>
    <p><?php echo $row['malumot']?></p>
    <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
    </article>


    <article class="article">3
    <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 2 ,1";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=180 height=200>";?>
    <p><?php echo $row['malumot']?></p>
    <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
    </article>


    <article class="article">4
      <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 3,1";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=180 height=200>";?>
    <p><?php echo $row['malumot']?></p>
    <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
    
    </article>


    <article class="article">5
    <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4,1";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=180 height=200>";?>
    <p><?php echo $row['malumot']?></p>
    <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
    </article>


    <article class="article">6
    <?php
$sql = "SELECT * FROM images ORDER BY id DESC LIMIT 5,1";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    echo "<h1>".$row['title']."</h1>";
    echo "<img src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "' width=180 height=200>";?>
    <p><?php echo $row['malumot']?></p>
    <a href="<?php $row['link'] ?>" > ko'proq malumot</a>
    <a href="<?php echo $row['link'] ?>" target="_blank"> ko'proq malumot</a>
    </article>


    <article class="article">7
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">8
      <hr>
      <hr>
    </article>
    <article class="article">9
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">10
      <hr>
      <hr>
    </article>
    <article class="article">11
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">12
      <hr class="image"><hr>
      <hr>
      <hr>
    </article>
    <article class="article">13
      <hr class="image"><hr>
      <hr>
    </article>
    <article class="article">14
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">15
      <hr class="image">
      <hr>
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">16
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
      <hr>
    </article>
    <article class="article">17<hr>
      <hr>
      <hr></article>
  </div>
</div>
</body>
</html>