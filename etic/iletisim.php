<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Friendyol</title>
    <?php include 'inc/navbar.php'; ?>
</head>
<body>

     <div class="container">
        <form id="contact" action="" method="">
            <h2>İletişim Sayfası</h2>
            <div class="form-control">
                <input placeholder="Adınız Soyadınız" type="text" required autofocus>
            </div>
            <div class="form-control">
                <input placeholder="E-Posta Adresiniz" type="email" required>
            </div>
            <div class="form-control">
                <input placeholder="Konu" type="text" required>
            </div>
            <div class="form-control">
                <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
            </div>
            <div class="form-control">
                <button name="submit" type="submit" id="submit">GÖNDER</button>
            </div>
        </form>
    </div>






<script
  src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
  integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
  crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
<?php include 'inc/footer.php'; ?>
</body>
  
</html>