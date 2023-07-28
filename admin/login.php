<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $conn = require __DIR__ . "./src/database.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                    $conn->real_escape_string($_POST['email']));
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST['password'], $user['password_hash'])){
            session_start();
            session_regenerate_id();

            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Login</title>
</head>
<body>
    <h1>Log in</h1>
    <?php if($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    <form action="" method="post">
        <label for="">Email</label>
        <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "" ?>">

        <label for="">Password</label>
        <input type="password" id="password" name="password">

        <button>Log in</button>
    </form>
</body>
</html>