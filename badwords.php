<?php

// VARIABILI CHE PRENDIAMO DA INDEX.HTML 
$text = $_POST['text'];
$badword = $_POST['badword'];

$final_text = str_replace($badword, '***', $text);
$length_text = strlen($text);
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwors</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="input">
            <h3 class="info">Testo censurato:</h3>
            <div class="text-box text-area">
                <?php echo $final_text ?>
            </div>
        </div>
        <div class="footer">
            Lunghezza testo:
            <?php echo $length_text ?>
        </div>
    </div>
</body>

</html>