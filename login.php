<?php
require ("conn.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="jumbotron">

    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-md-8 col-sm-6 m-auto">

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fluid-container text-center">
                        <div class="text-center">

                            <a class="navbar-brand text-center" href="#">
                                Login Panel
                            </a>
                        </div>
                    </nav>
                    <div class="card">
                        <div class="card-body border-0">
                            <div class="icon text-center">
                                <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="username" class="form-control my-4 py-2" placeholder="Email"
                                    required>
                                <input type="password" name="password" class="form-control my-4 py-2"
                                    placeholder="Password" required>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                                    <a href="signup.php" class="nav-link">Create a new account here!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <?php
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $query = "SELECT * FROM logininputs WHERE username='$username' AND password='$password'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) == 1) {
                        session_start();
                        $_SESSION["user"] = $username;
                        header('Location: productionAtSquare.php');
                    } else {
                        echo '<script>alert("Email or password is incorrect")</script>';
                    }
                }

                ?>
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>