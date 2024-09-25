<nav>
    <div class="searchContainer hide">
        <div class="searchBox">
            <input type="text" name="search" spellcheck="false" class="search" placeholder="Artistas, sons...">
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <style>
           .searchContainer .searchBox .icon{
	position: absolute;
	top: 0;
	right: 0;
	width: 35px;
	height: 100%;
	background: #7205b1;
	z-index: 1;
	cursor: pointer;
	border-radius: 50%;
}
           
           nav {
    padding: 2rem 2rem;
    height: 10vh;
    background-image: url("fund.jpg");
    display: flex;
    align-items: center;
    width: 100%;
    margin-bottom: 1rem;
}
        </style>
    </div>
    <div class="logo-container">
        <img src="./images/users/default.png" alt="" class="logo">
        <ul class="logo-links">
            <h3><?php echo $username; ?></h3>
            <?php if ($authenticated) : ?>
                <li><a href="./auth/logout.php">Logout</a></li>
                <?php if ($admin) : ?>
                    <li><a href="./auth/adminDashboard.php">Registro dos adm</a></li>
                <?php endif; ?>
            <?php else : ?>
                <li><a href="./auth/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>