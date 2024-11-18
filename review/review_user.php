<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review User</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- local css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="content">
    <?php
        session_start();
        echo $_SESSION['username'];

        if(empty($_SESSION['username'])){
            echo "
                <script>
                alert('Anda belum login. Silahkan login terlebih dahulu');
                document.location.href = 'LoginPage.php';
            ";
        }
    ?>

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        
    </section>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>