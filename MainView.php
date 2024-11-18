<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .content{
            background-image: url('assets/image/bgHomePage.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>

</head>
<body class="content">
    <center>
        <h1 class="headerTengah">Menu Utama</h1>
    </center>

    <center class="tombol">
        <div class="row justify-content-center">
            <!-- enkripsi kritik -->
            <div class = "col-2">
                <a href="../encrypt/enkripsi_kritik.php">
                    <button type="button" id="tombol" class="btn btn-secondary btn-lg">Enkripsi Kritik</button>
                </a>
            </div>
            <!-- dekripsi review -->
            <div class="col-2 ">
              <a href="../encrypt/enkripsi_review.php">
                  <button type="button" id="tombol" class="btn btn-secondary btn-lg">Enkripsi Review</button>
              </a>
            </div>

    </center>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- local js -->
    <script src="assets/js/script.js"></script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>