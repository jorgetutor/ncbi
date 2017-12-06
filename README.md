# NCBI E-Utils Guzzle Client

Provides an implementation of the Guzzle library to query NCBI E-Utils service.

The Entrez Programming Utilities (E-utilities) are a set of nine server-side programs that provide a stable interface into the Entrez query and database system at the National Center for Biotechnology Information (NCBI).

The E-utilities use a fixed URL syntax that translates a standard set of input parameters into the values necessary for various NCBI software components to search for and retrieve the requested data. The E-utilities are therefore the structured interface to the Entrez system, which currently includes 38 databases covering a variety of biomedical data, including nucleotide and protein sequences, gene records, three-dimensional molecular structures, and the biomedical literature.

- https://www.ncbi.nlm.nih.gov/books/NBK25497/

## The Nine E-utilities in Brief

### EInfo (database statistics)

eutils.ncbi.nlm.nih.gov/entrez/eutils/einfo.fcgi

Provides the number of records indexed in each field of a given database, the date of the last update of the database, and the available links from the database to other Entrez databases.

### ESearch (text searches)

eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi

Responds to a text query with the list of matching UIDs in a given database (for later use in ESummary, EFetch or ELink), along with the term translations of the query.

### EPost (UID uploads)

eutils.ncbi.nlm.nih.gov/entrez/eutils/epost.fcgi

Accepts a list of UIDs from a given database, stores the set on the History Server, and responds with a query key and web environment for the uploaded dataset.

### ESummary (document summary downloads)

eutils.ncbi.nlm.nih.gov/entrez/eutils/esummary.fcgi

Responds to a list of UIDs from a given database with the corresponding document summaries.

### EFetch (data record downloads)

eutils.ncbi.nlm.nih.gov/entrez/eutils/efetch.fcgi

Responds to a list of UIDs in a given database with the corresponding data records in a specified format.

### ELink (Entrez links)

eutils.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi

Responds to a list of UIDs in a given database with either a list of related UIDs (and relevancy scores) in the same database or a list of linked UIDs in another Entrez database; checks for the existence of a specified link from a list of one or more UIDs; creates a hyperlink to the primary LinkOut provider for a specific UID and database, or lists LinkOut URLs and attributes for multiple UIDs.

### EGQuery (global query)

eutils.ncbi.nlm.nih.gov/entrez/eutils/egquery.fcgi

Responds to a text query with the number of records matching the query in each Entrez database.

### ESpell (spelling suggestions)

eutils.ncbi.nlm.nih.gov/entrez/eutils/espell.fcgi

Retrieves spelling suggestions for a text query in a given database.

### ECitMatch (batch citation searching in PubMed)

eutils.ncbi.nlm.nih.gov/entrez/eutils/ecitmatch.cgi

Retrieves PubMed IDs (PMIDs) corresponding to a set of input citation strings.
