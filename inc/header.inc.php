<header>
    <h1><?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] . "'s Video Bookmark Gallery": 'Welcome To The Private Video Bookmark Gallery' ?></h1>
    <nav class="event">
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
    <nav class="show">
        <ul>
            <li>
                <a href="main.php" id="home">Home</a>
            </li>
            <li>
                <a href="login.php" id="logged">Home</a>
            </li>
            <li>
            </li>
        </ul>
    </nav>
</header>
