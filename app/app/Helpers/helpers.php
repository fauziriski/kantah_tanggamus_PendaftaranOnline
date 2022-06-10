<?php

use GuzzleHttp\Client;
use Ilovepdf\Ilovepdf;

function convertPdf($word, $path)
{

    $api = new Ilovepdf(
        'project_public_6f05b43cbd7828d73c694eb47cdcc58a_R8Q4760e74ba0eec1561138d305c14b266ed8',
        'secret_key_fd9bc627b2e9b8ba9938da471d59d30c_mOtV0bc98679c92fcf3f58f43c5a5727124a5'
    );
    // Create a new task
    $myTaskConvertOffice = $api->newTask('officepdf');
    // Add files to task for upload
    $file1 = $myTaskConvertOffice->addFile($word);
    // Execute the task
    $myTaskConvertOffice->execute();
    // Download the package files
    $myTaskConvertOffice->download($path);
}
