<header>
    <h1><?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] . "'s Video Bookmark Gallery": 'Welcome To The Private Video Bookmark Gallery' ?></h1>
    <nav class="event">
        <ul>
            <li>
            <!-- <a href="registerform.php" id="register">Register</a> -->
            </li>
            <li>
            <a href="loginform.php" id="login">Login</a>
            </li>
            <li>
            <a href="main.php" id="logout">Logout</a>
            </li>
        </ul>
    </nav>
    <nav class="show">
        <ul>
            <li>
                <a href="main.php" id="home">Home</a>
            </li>
            <li class="li-home-login">
                <a href="home.php" id="logged">Home</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
            <a href="registerform.php" id="register">Register</a>
            </li>
        </ul>
    </nav>
</header>
