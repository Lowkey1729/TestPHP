<?php

namespace App;

require('../../vendor/autoload.php');

use App\Streams\StreamFile;

$stream = new StreamFile();
$filePath = "/sample.txt";
return $stream->boot($filePath, 'r')
//    ->tellTheLineItReadsFrom()
    ->closeFile($filePath);