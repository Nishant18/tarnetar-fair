<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarnetar Fair</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"> </script>
    <script src="js/script.js" type="text/javascript"> </script>


</head>

<body background="images/bg.gif" topmargin="0" marginheight="0" marginwidth="0">






    <div class="container">
        <?php
        include('header.php');
        ?>

    </div>
    <div class="container">
        <?php
        include('carousel.php');
        ?>
    </div>
    <div class="container align-item-streach">
        <div class="row align-self-stretch">
            <div class="col-md-8 mt-2">
                <div class="card rounded-5">
                    <div class="card-header bg-primary text-white text-center">
                        <a href="details.php" class="text-white">All Events at Tarnetar Mela</a>

                    </div>
                    <div id="events">
                        <?php
                        include('events.php');
                        ?>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mt-2 align-item-streach">
                <div class="card rounded-5 overflow-auto" style="height: 365px;">
                    <?php
                    include('sidebar.php');
                    ?>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <?php
        include('footer.php');
        ?>
    </div>


</body>

</html>