<header>
    <h1><?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] . "'s Video Bookmark Gallery": 'Welcome To The Private Video Bookmark Gallery' ?></h1>
    <nav>
        <ul>
            <li>
            <a href="form\register.form.php" id="register">Register</a>
            </li>
            <li>
            <a href="form\login.form.php" id="login">Login</a>
            </li>
            <li>
            <a href="main.php" id="logout">Logout</a>
            </li>
        </ul>
    </nav>
</header>
