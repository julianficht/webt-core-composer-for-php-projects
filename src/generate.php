<?php
require '../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
$phoneNumber = "tel:+4312233444";
$qr = new QrCode($phoneNumber);
$write = new PngWriter();

try {
    $res = $write->write($qr);

    $file = __DIR__ . '/tel.png';
    $res->saveToFile($file);
} catch (\Exception $e){}

header('Content-Type: '.$res->getMimeType());
echo $res->getString();