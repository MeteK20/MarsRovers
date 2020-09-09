<html>
<head>
        <title>Mars rover foto's</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

    <div class="container">

        <h4 class="heading-main">Kies een rover en klik op 'Herlaad' om andere foto's te zien</h4>
        <form action="" method="POST">
            <input type="radio" id="cur" name="rover" value="cur">
            <label for="cur">Curiosity</label></br>
            <input type="radio" id="opp" name="rover" value="opp">
            <label for="opp">Opportunity</label></br>
            <input type="submit" name="submit" class="btn btn-primary" value="Herlaad">
        </form>
        </br>
        <?php include('main.php') ?>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
