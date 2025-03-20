<?php
$binatang = ['🐵', '🐱', '🐺', '🐯', '🦒'🦊🐮];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < 5; $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>