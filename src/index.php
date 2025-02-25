<?php
require '../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qrCode = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumber = trim($_POST['phone']);
    $phoneNumber = preg_replace('/\s+/', '', $phoneNumber);

    try {
        $qr = new QrCode("tel:{$phoneNumber}");
        $writer = new PngWriter();
        $result = $writer->write($qr);

        $qrCode = 'data:' . $result->getMimeType() . ';base64,' . base64_encode($result->getString());
    } catch (\Exception $e) {
        $error = "Fehler beim Generieren des QR-Codes: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR-Code Generator für Telefonnummern</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>

<div class="container">
    <h2>QR-Code Generator für Telefonnummern</h2>
    <form method="post">
        <input type="text" name="phone" placeholder="Telefonnummer eingeben" required>
        <button type="submit">QR-Code generieren</button>
    </form>

    <?php if (!empty($qrCode)): ?>
        <h3>QR-Code:</h3>
        <img src="<?= $qrCode ?>" alt="QR Code">
    <?php endif; ?>
</div>

</body>
</html>