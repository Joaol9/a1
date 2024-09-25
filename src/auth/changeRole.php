<?php
include("../utils/dbConnection.php");
if (isset($_GET['uid'])) {
    $userID = $_GET['uid'];
    $groupID = $_GET['admin'];


    $updateSql = "UPDATE users SET groupID=$groupID WHERE id=$userID";
    $result1 = mysqli_query($conn, $updateSql);
    if ($result1) {
        echo "Uptade com sucesso no user $userID";
    } else {
        echo "Erro no uptade do user $userID";
    }
}
