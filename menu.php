<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand my-2" href="">@productionAtSquare<br>
        <span class="nav-item" style="font-size:15px; opacity:0.5;">Welcome! <?php echo $_SESSION['user'] ?>
        </span>
    </a>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links and form -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">
            <li>
                <form method="post">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="logout">Logout</button>
                </form>

                <?php
                if (isset($_POST['logout'])) {
                    session_destroy();
                    header("location: login.php");
                }
                ?>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="productionAtSquare.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productionAtSquare.php#section-1">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productionAtSquare.php#section-3">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productionAtSquare.php#section-2">Contact Here</a>
            </li>
        </ul>
        <!-- Logout button -->

        <!-- Search form -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>