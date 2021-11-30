<?php
    // Query string for testing => ?name=Aldo&email=aldo@baglio.it&age=50;

    $name = empty($_GET["name"]) ? "" : trim($_GET["name"]) ;
    $email = empty($_GET["email"]) ? "" : trim($_GET["email"]);
    $age = empty($_GET["age"]) ? "" : trim($_GET["age"]) ;

    $is_name_valid = strlen($name) > 3;
    $is_email_valid = strpos(strrchr($email, "@"), ".") !== false;
    $is_age_valid = is_numeric($age);

    $is_access_successfull = $is_name_valid && $is_email_valid && $is_age_valid;
    $message = $is_access_successfull ? "Accesso riuscito" : "Accesso negato";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php echo $message ?>
    </h2>
</body>
</html>