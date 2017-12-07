# NCBI E-Utils Guzzle Client

Provides an implementation of the Guzzle library to query NCBI E-Utils service.

The Entrez Programming Utilities (E-utilities) are a set of nine server-side programs that provide a stable interface into the Entrez query and database system at the National Center for Biotechnology Information (NCBI).

The E-utilities use a fixed URL syntax that translates a standard set of input parameters into the values necessary for various NCBI software components to search for and retrieve the requested data. The E-utilities are therefore the structured interface to the Entrez system, which currently includes 38 databases covering a variety of biomedical data, including nucleotide and protein sequences, gene records, three-dimensional molecular structures, and the biomedical literature.

- https://www.ncbi.nlm.nih.gov/books/NBK25497/

## The Nine E-utilities in Brief

### EInfo (database statistics)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/einfo.fcgi

Provides the number of records indexed in each field of a given database, the date of the last update of the database, and the available links from the database to other Entrez databases.

### ESearch (text searches)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi

Responds to a text query with the list of matching UIDs in a given database (for later use in ESummary, EFetch or ELink), along with the term translations of the query.

### EPost (UID uploads)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/epost.fcgi

Accepts a list of UIDs from a given database, stores the set on the History Server, and responds with a query key and web environment for the uploaded dataset.

### ESummary (document summary downloads)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esummary.fcgi

Responds to a list of UIDs from a given database with the corresponding document summaries.

### EFetch (data record downloads)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/efetch.fcgi

Responds to a list of UIDs in a given database with the corresponding data records in a specified format.

### ELink (Entrez links)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi

Responds to a list of UIDs in a given database with either a list of related UIDs (and relevancy scores) in the same database or a list of linked UIDs in another Entrez database; checks for the existence of a specified link from a list of one or more UIDs; creates a hyperlink to the primary LinkOut provider for a specific UID and database, or lists LinkOut URLs and attributes for multiple UIDs.

### EGQuery (global query)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/egquery.fcgi

Responds to a text query with the number of records matching the query in each Entrez database.

### ESpell (spelling suggestions)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/espell.fcgi

Retrieves spelling suggestions for a text query in a given database.

### ECitMatch (batch citation searching in PubMed)

https://eutils.ncbi.nlm.nih.gov/entrez/eutils/ecitmatch.cgi

Retrieves PubMed IDs (PMIDs) corresponding to a set of input citation strings.

## Usage

To use the NCBI API Client simply instantiate the client.

```php
<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Tutor\NCBI\EUtilsClient;
$client = EUtilsClient::factory();

// if you want to see what is happening, add debug => true to the factory call
$client = EUtilsClient::factory(['debug' => true]);
```

Invoke Commands using the `__call` method (auto-complete phpDocs are included)

```php
<?php

$client = EUtilsClient::factory();
$response = $client->eFetch([
  'db' => 'protein',
  'id' => '194680922,50978626,28558982,9507199,6678417',
]);

```

Or Use the `getCommand` method (in this case you need to work with the $response['data'] array:

```php
<?php

$client = EUtilsClient::factory();

//Retrieve the Command from Guzzle
$command = $client->getCommand('EFetch', [
  'db' => 'protein',
  'id' => '194680922,50978626,28558982,9507199,6678417',
]);
$command->prepare();

$response = $command->execute();

$data = $response['data'];

```

## Examples
You can execute the examples in the examples directory.

You can look at the services.json for details on what methods are available and what parameters are available to call them.

## TODO

- [ ] Add some more examples
- [ ] Add tests
- [ ] Add some Response models
- [ ] Integrate with api token
- [ ] EPost
- [ ] EGQuery
- [ ] ESpell
- [ ] ESummary
- [ ] ELink
- [ ] ECitMatch

## Contributions welcome

Found a bug, open an issue, preferably with the debug output and what you did.
Bugfix? Open a Pull Request and I'll look into it.

## License

The use NCBI\EUtilsClient API client is available under an MIT License.
