<?php
$random_nums_array = [];

while(count($random_nums_array) < 15){
    $number = rand(1, 100);
    if (!in_array($number, $random_nums_array)) {
        $random_nums_array[] = $number;
    }
}

$arr_to_string = implode(" - ", $random_nums_array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random numbers</title>
</head>
<body>
    <p><?php echo "Random numbers generated => " . $arr_to_string?></p>
</body>
</html>