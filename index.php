<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p>
        <?php
        $discesa = "L'Italia è il Paese che amo. Qui ho le mie radici, le mie speranze, i miei orizzonti. Qui ho imparato, da mio padre e dalla vita, il mio mestiere di imprenditore. Qui ho appreso la passione per la libertà.";
        echo $discesa;
        $user_param = $_GET["censor"];
        ?>
    </p>
    <p>
        <?php
        $discesa_len = strlen($discesa);
        echo "Lunghezza: ".$discesa_len;
        ?>
    </p>
    <p>
        <?php
        $discesa_censored = str_replace($user_param, "***", $discesa);
        echo $discesa_censored;
        ?>
    </p>
</body>
</html>