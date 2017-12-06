<?php

require dirname(__FILE__) . '/../../vendor/autoload.php';

use Tutor\NCBI\EUtilsClient;

$client = EUtilsClient::factory();
$response = $client->ESearch([
  'db' => 'protein',
  'term' => 'cancer',
]);
print_r($response);

// Search in PubMed with the term cancer for abstracts that have an Entrez date within the last 60 days; retrieve the first 100 PMIDs and translations; post the results on the History server and return a WebEnv and query_key:
echo "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?db=pubmed&term=cancer&reldate=60&datetype=edat&retmax=100&usehistory=y\n";

$response = $client->ESearch([
  'db' => 'pubmed',
  'term' => 'cancer',
  'reldate' => 60,
  'datetype' => 'edat',
  'retmax' => 100,
  'usehistory' => 'y',
]);
print_r($response);
