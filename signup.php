<?php
require ("conn.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to our website</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="jumbotron">

    <section>

        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-md-8 col-sm-6 m-auto">

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
                        <div class="text-center">

                            <a class="navbar-brand text-center" href="#">
                                Create a new account here!
                            </a>
                        </div>
                    </nav>
                    <div class="card">
                        <div class="card-body border-0">
                            <div class="icon text-center">
                                <svg class="my-3 mx-auto" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                    fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg>
                            </div>

                            <!-- form-sanitization -->

                            <form action="" method="post">
                                <input type="text" name="username" class="form-control my-4 py-2"
                                    placeholder="Enter a Valid Email-ID" required>
                                <input type="password" name="password" class="form-control my-4 py-2"
                                    placeholder="Password (Minimum length = 8) " required>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-primary" name="signup" value="Signup">
                                    <a href="login.php" class="nav-link">Go back to Login</a>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>



            <?php

            if (isset($_POST['signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $minLength = 8;
                // validate 
            
                $flag = FILTER_SANITIZE_EMAIL;
                $NewUsername = filter_var($username, $flag);

                function validateEmail($NewUsername)
                {
                    // Define the regular expression pattern for a valid email address
                    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

                    // Use preg_match to perform the regex match
                    if (preg_match($pattern, $NewUsername)) {
                        return true; // Valid email
                    } else {
                        return false; // Invalid email
                    }
                }
                function validatePasswordLength($password, $minLength)
                {
                    $minLength = 8;
                    // Check if the password length is at least the specified minimum length
                    if (strlen($password) >= $minLength) {
                        return true; // Password meets the minimum length requirement
                    } else {
                        return false; // Password does not meet the minimum length requirement
                    }
                }
                if ((validateEmail($NewUsername)) && (validatePasswordLength($password, $minLength)) == true) {
                    $query = "INSERT INTO logininputs (username, password) VALUES ('$NewUsername', '$password')";
                    $result = mysqli_query($conn, $query);
                    // Insertion successful
                    echo '<script>alert("Account created successfully. Please log in now!");</script>';
                    echo '<script>window.location.replace("login.php");</script>';
                    exit; // Ensure script stops after redirection
                } else {
                    // Insertion failed
                    echo '<script>alert("Failed to create account. Please use valid credentials.");</script>';
                }
            }
            ?>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>