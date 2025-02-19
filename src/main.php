<?php
require '../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qr = new QrCode('https://example.com');
$write = new PngWriter();

try {
    $res = $write->write($qr);

    $file = __DIR__ . '/qrcode.png';
    $res->saveToFile($file);
} catch (\Exception $e){}