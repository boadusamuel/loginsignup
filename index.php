<?php include("functions.php") ?>

<!doctype html>
<html lang="en">

<head>
    <title>LogIn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body id="index">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php if (isset($_GET['fillerror'])) { ?>

                    <div class="alert alert-danger text-center mt-3 mb-0"> <?php echo $_GET['fillerror'];   ?></div>

                <?php } else if (isset($_GET['loginerror'])) { ?>

                    <div class="alert alert-danger text-center mt-3 mb-0"> <?php echo $_GET['loginerror'];   ?></div>
                <?php } else if (isset($_GET['success'])) { ?>

                    <div class="alert alert-success text-center mt-3 mb-0"> <?php echo $_GET['success'];   ?></div>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="container">

        <div class="row">

            <main class="col-12">

                

                        <form action="processlogin.php" method="post">
                            <div class="mb-4">

                                <h4 class="text-center font-weight-bold text-secondary">LogIn</h4>
                            </div>

                            <?php

                            inputElement("text", "username", "Username");

                            inputElement("text", "password", "Password");

                            inputElement("submit", "submit", "", "btn btn-outline-primary form-control")
                            ?>
                            <p class="text-center text-secondary">
                                Don't have an account? <a href="signup.php"> SignUp here</a>
                            </p>

                        </form>
                    </div>
                </div>

            </main>

        </div>

    </div>


   <div class="footer">
       <p> Copyright &copy 2020 samuelboadu</p>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>