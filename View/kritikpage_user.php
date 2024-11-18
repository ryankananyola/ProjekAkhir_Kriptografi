<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kritik User</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <?php
        
            session_start(); 
            //echo $_SESSION['username'];

            if(empty($_SESSION['username'])) {
                echo "
                    <script>
                        alert('Anda belum login. Silakan login terlebih dahulu.');
                        document.location.href = 'login.php';
                    </script>
                ";
            }
        ?>
        <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style scoped>

            footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                padding: 15px;
                background: rgba(255, 255, 255, 0.1); 
                backdrop-filter: blur(10px); 
                color: black;
                text-align: center;
            }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .navbar-1-1.navbar-light .navbar-nav .nav-link {
            color: #092a33;
            transition: 0.3s;
        }

        .navbar-1-1.navbar-light .navbar-nav .nav-link.active {
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started {
            border-radius: 20px;
            padding: 12px 30px;
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started-blue {
            background-color: #0ec8f8;
            transition: 0.3s;
        }

        .navbar-1-1 .btn-get-started-blue:hover {
            background-color: #3ad8ff;
            transition: 0.3s;
        }
        </style>
        <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body"
        style="font-family: Poppins, sans-serif">
        <div class="container">
            <div>
            Halo <?php echo $_SESSION['username'];?>!
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link px-md-4 active" aria-current="page" href="homepage_user.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-md-4" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-md-4" href="kritikpage_user.php">Kritik dan Saran</a>
                </li>

                <li class="nav-item">
                <a class="nav-link px-md-4" href="reviewpage_user.php">Review</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-get-started btn-get-started-blue text-white" href="../session/logout.php">Logout</a>
            </div>
            </div>
        </div>
        </nav>
        <center>
            <h1>Kritik dan Saran</h1>
            <p>Kritik dan Saran dari kalian akan mendorong perbaikan Restoran Kami :v</p>
        </center>

        <div align="center">
            <form action="../encrypt/enkripsi_kritik.php" method="POST">
                <textarea name="comment" id="Textarea1" rows="10" cols="50"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Kirim</button> <br>
            </form>
            
        </div>

        <!-- Blurred Footer -->
        <footer>
            © 2024 By Ryan Kana Nyola. All rights reserved.
        </footer>
        
    </body>
</html>
    
