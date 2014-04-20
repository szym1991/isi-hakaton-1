<?php

include "bootstrap.php";
require_once(dirname(__FILE__) . '/wikiparser/wikiParser.class.php');

$options = array
    (
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login' => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port' => SOLR_SERVER_PORT,
);

$temp = $_POST['result'];
$data = json_decode("$temp", true);

$client = new SolrClient(array('hostname' => '127.0.0.1', 'port' => 8983, 'wt' => 'json'));



$query = new SolrQuery();

$query->setQuery($data[0]);
if ($data[1][0] == true) {
    $range = 'timestamp:['.$data[1][1].' TO '.$data[1][2].']';
    $query->addFilterQuery($range); 
}

$query->setStart(0);

$query->setRows(50);

$parser = new wikiParser(); //błążejowe
//$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

$query_response = $client->query($query);
$query_response->setParseMode(SolrQueryResponse::PARSE_SOLR_DOC);
$results = $query_response->getResponse();

//$facet_data = $results->facet_counts->facet_dates;

/*
 * Parsowanie tekstu artykułów
 */

for ($i = 0; $i < count($results['response']['docs']); $i++) {
    $results['response']['docs'][$i]['text'] = $parser->parse($results['response']['docs'][$i]['text']);
}

echo json_encode($results);
//echo json_encode($query_response->getResponse());
?>
