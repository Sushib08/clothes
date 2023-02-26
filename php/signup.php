<?php

if (
    isset($_POST['fname']) &&
    isset($_POST['uname']) &&
    isset($_POST['pass'])
) {

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=" . $fname . "&uname=" . $uname;

    if (empty($fname)) {
        $em = "Nom et prénom requis";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($uname)) {
        $em = "Pseudo requis";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Mot de passe requis";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {

        // hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(fname, username, password) 
    	        VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);

        header("Location: ../index.php?success=Votre compte a été crée avec succès");
        exit;
    }
} else {
    header("Location: ../index.php?error=error");
    exit;
}
