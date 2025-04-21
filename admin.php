<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newStatus = $_POST['status'];
    $data = [
        'status' => $newStatus,
        'updated' => date("Y-m-d H:i")
    ];
    file_put_contents("status.json", json_encode($data));
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Admin – Biergarten Status ändern</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="status-box">
        <h1>Status ändern</h1>
        <form method="post">
            <button name="status" value="offen" class="green">🟢 Offen</button>
            <button name="status" value="geschlossen" class="red">🔴 Geschlossen</button>
        </form>
    </div>
</body>
</html>