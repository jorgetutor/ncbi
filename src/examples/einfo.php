<?php

require dirname(__FILE__) . '/../../vendor/autoload.php';

use Tutor\NCBI\EUtilsClient;

$client = EUtilsClient::factory();

echo "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/einfo.fcgi\n";
$response = $client->EInfo();
print_r($response);

echo "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/einfo.fcgi?db=pubmed\n";
$response = $client->EInfo(['db' => 'pubmed']);
print_r($response);

