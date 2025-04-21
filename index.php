<?php
$data = json_decode(file_get_contents("status.json"), true);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Biergarten Status</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="status-box">
        <h1>Biergarten ist <span class="<?= $data['status'] ?>"><?= strtoupper($data['status']) ?></span></h1>
        <p>Letztes Update: <?= $data['updated'] ?></p>
    </div>
</body>
</html>