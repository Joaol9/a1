<?php
include("../utils/dbConnection.php");
session_start();
if (isset($_SESSION['id'])) {
    header("Location: ../index.php");
}

$username = $password = $re_password = "";
$errors = array('username' => '', 'password' => '', 're_password' => '', "matchPass" => "", "existUser" => "");
if (isset($_POST['submit'])) {
    function cleanData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = cleanData($_POST['username']);
    $password = cleanData($_POST['password']);

    $re_password = cleanData($_POST['re_password']);


    if (empty($username)) {
        $errors['username'] = "Username can not be empty !";
    }
    if (empty($password)) {
        $errors['password'] = "Password can not be empty !";
    }
    if (empty($re_password)) {
        $errors['re_password'] = "Confirm password can not be empty !";
    }
    if ($password !== $re_password) {
        $errors['matchPass'] = "The confirmation password does not match !";
    }

    $sql = "SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['existUser'] = "User is already exist !";
    }

    if (array_filter($errors)) {
        echo "Have errors";
    } else {
        $password = md5($password);
        $sql2 = "INSERT INTO users(username, password, groupID) VALUE('$username', '$password', 2)";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    body {

  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh;
  flex-direction: column;
  overflow: hidden;
  position: relative;
  top: 50px;
  
    
}
html{
    background-image: url(banner-transformed.jpeg);
   

 background-position: center;
    background-size: cover;
 
   
}
</style>
<body>
    <form action="signup.php" method="post">
        <h2>Entrar</h2>
        <p class="error-container"><?php echo $errors['matchPass']; ?></p>
        <p class="error-container"><?php echo $errors['existUser']; ?></p>
        <label>Username</label>
        <input class="<?php if ($errors['username'] != '') {
                        echo 'error1';
                        } ?>" 
        type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <p class="error-container"><?php echo $errors['username']; ?></p>

        <label>Senha</label>
        <input class="<?php if ($errors['password'] != '') {
                        echo 'error1';
                        } ?>" 
        type="password" name="password" placeholder="Senha" value="<?php echo $password; ?>">
        <p class="error-container"><?php echo $errors['password']; ?></p>

        <label>Confirme a senha</label>
        <input class="<?php if ($errors['re_password'] != '') {
                        echo 'error1';
                        } ?>" 
        type="password" name="re_password" placeholder="Confirme a senha">
        <p class="error-container"><?php echo $errors['re_password']; ?></p>
        

        <button type="submit" name="submit">Confirmar</button>
        <a href="login.php" class="ca">Já tem uma conta?</a>
    </form>
</body>

</html>