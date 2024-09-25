<?php
include("../utils/dbConnection.php");
session_start();
if (isset($_SESSION['id'])) {
    header("Location: ../index.php");
}
$username = $password = "";
$errors = array('username' => '', 'password' => '');

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

    if (empty($username)) {
        $errors['username'] = "Username cant be empty!";
    }

    if (empty($password)) {
        $errors['password'] = "Password cant be empty!";
    } else {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['admin'] = ($row['groupID'] == 1) ? true : false;

                header("Location: ../index.php");
                exit();
            } else {
                $errors['password'] = "Nome ou senha incorretos!";
            }
        } else {
            $errors['username'] = "Nome ou senha incorretos!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    body {

  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  overflow: hidden;
  
    
}
html{
    background-image: url(banner-transformed.jpeg);
   

 background-position: center;
    background-size: cover;
    position: relative;
 
}
</style>

<body>
  
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <label>Username</label>
        <input class="<?php if ($errors['username'] != '') {
                        echo 'error1';
                        } ?>" 
        type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <p class="error-container"><?php echo $errors['username']; ?></p>

        <label>senha</label>
        <input class="<?php if ($errors['password'] != '') {
                        echo 'error1';
                        } ?>"
         type="password" name="password" placeholder="Senha">
        <p class="error-container"><?php echo $errors['password']; ?></p>

        <button type="submit" name="submit">Login</button>
        <a href="signup.php" class="ca">Crie uma conta</a>
        
    </form>
    
</body>

</html>