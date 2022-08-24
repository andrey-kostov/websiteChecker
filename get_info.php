<?php

function getInfo(){
    // Initialize a connection with cURL (ch = cURL handle, or "channel")
    $ch = curl_init();

    // Set the URL
    curl_setopt($ch, CURLOPT_URL, 'https://www.scrapingbee.com/blog/web-scraping-php/');

    // Set the HTTP method
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // Return the response instead of printing it out
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Send the request and store the result in $response
    $response = curl_exec($ch);

    echo 'HTTP Status Code: ' . curl_getinfo($ch, CURLINFO_HTTP_CODE) . PHP_EOL;
    echo 'Response Body: ' . $response . PHP_EOL;

    // Close cURL resource to free up system resources
    curl_close($ch);
}


function viewList() {
    $listFile = file_get_contents("list.json");
    print_r($listFile);
}

// switch($_GET['function']) {
//     case 'viewList':
//         viewList();
// }
