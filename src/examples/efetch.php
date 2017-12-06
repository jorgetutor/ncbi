<?php

require dirname(__FILE__) . '/../../vendor/autoload.php';

use Tutor\NCBI\EUtilsClient;

// @see https://www.ncbi.nlm.nih.gov/books/NBK25498/#chapter3.ESearch__ESummaryEFetch

$client = EUtilsClient::factory();
$response = $client->eFetch([
  'db' => 'protein',
  'id' => '194680922,50978626,28558982,9507199,6678417',
]);
print_r($response);


