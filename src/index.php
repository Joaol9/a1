

<?php
include("./utils/getUrl.php");
include("./utils/dbConnection.php");
include("./auth/auth.php");


function redirect($url)
{
    echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
}

$getAllSongsQuery = "SELECT songs.id, songs.title title,
                            songs.filePath audio, songs.imgPath img,
                            singers.name singerName, singers.id singerID
                    FROM songs 
                    LEFT JOIN singers on singers.id = songs.singerID
                    ORDER BY songs.dateAdded DESC";

$result = mysqli_query($conn, $getAllSongsQuery);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Generate random songs
$randomKeys = (count($songs) >= 3) ? array_rand($songs, 3) : $songs;

$formatSongs = array();

foreach ($songs as $song) {
    $formatSongs[$song["id"]] = $song;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/homePage.css">
    <link rel="stylesheet" href="./css/singerPage.css">
    <link rel="stylesheet" href="./css/searchPage.css">
    <link rel="stylesheet" href="./css/favourite.css">
    <link href='https://css.gg/home.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-up-r.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>


    <title>Alphamsc</title>
</head>
<style>
.logo-links h3 {
    font-family: 'Roboto', sans-serif;
    font-size: 1.5rem;
    padding: .5rem 0; 
    color: #611db9;
}
.queue-title i {
    padding: 0 20px;
    min-height: 50px;
    font-size: 25px;
    cursor: pointer;
    transform: rotate(90deg);
    color: rgb(169, 144, 238);
}

.playing-songs .stroke {
    display: block;
    padding: 0;
    height: 50%;
    min-width: 4px;
    background-color: purple;
    margin: 0 1px;
    opacity: 0;
}

li.playing {
    color: white;
}

.login-modal__info .login {
    padding: 5px 20px;
    border-radius: 20px;
    text-decoration: none;
    color: white;
    margin-top: 20px;
    background-color: #7b17bd;
}
.card h5 {
    font-size: 12px;
    color: rgb(131, 23, 194);
}

.card:hover {
    background: rgb(0, 0, 0);
}
 
  .card {
    height: 100%;
    padding: 10px;
    margin-right: 40px;
    border-radius: 5px;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    transition: background 1s ease;
    background: linear-gradient(180deg, rgb(0, 0, 0) 0%, rgb(109, 10, 223) 0%, rgb(0, 0, 0) 100%);
}
  body {
  background-image: url("fundo2.jpg");
 

  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  overflow: hidden;
}
</style>
<body>
    <div class="login-modal">
        <div class="login-modal__logo">
        <i class="fa fa-ghost"></i>
            <h2>Alphamsc</h2>
        </div>
        <div class="login-modal__info">
            <p>Você precisa estar logado.</p>
            <a href="./auth/login.php" class="login">Login</a>
            <a href="./auth/signup.php" class="signup">Ainda não criou sua conta?</a>
            <div class="close">+</div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <!-- Sidebar -->
            <?php include("./components/sidebar.php"); ?>
            <!-- End sidebar -->

            <!-- Music UI -->
            <div class="musicContainer" id="home">
                <?php include("./pages/homeContent.php"); ?>
            </div>
            <div class="musicContainer hide" id="favourites">
                <?php if ($authenticated) : ?>
                    <?php include("./pages/favContent.php"); ?>
                <?php endif; ?>
            </div>
            <div class="musicContainer hide" id="search">
                <?php include("./pages/searchContent.php"); ?>
            </div>
            <div class="musicContainer hide" id="playlist">
                <?php include("./pages/playlistContent.php"); ?>
            </div>
            <div class="musicContainer hide" id="singer">
                <?php include("./pages/singerContent.php"); ?>
            </div>
            <!-- End Music UI -->
        </div>
        <!-- Music Player -->
        <?php include("./components/musicPlayer.php"); ?>
    </div>
</body>
<script>
    let songDetails = JSON.parse('<?php echo json_encode($formatSongs); ?>');
    let authenticated = JSON.parse('<?php echo json_encode($authenticated); ?>');
</script>
<script src="./js/songTile.js"></script>
<script src="./js/playingQueue.js"></script>
<script src="./js/loginRequired.js"></script>
<script src="./js/main.js"></script>
<?php if ($authenticated) : ?>
    <script src="./js/favourite.js"></script>
<?php endif; ?>
<?php include("./utils/changePageJs.php"); ?>


</html>