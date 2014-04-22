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
    $range = 'timestamp:[' . $data[1][1] . ' TO ' . $data[1][2] . ']';
    $query->addFilterQuery($range);
}
if ($data[2][0] == true) {
    $comment = 'editionReason:' . $data[2][1];
    $query->addFilterQuery($comment);
}
$page = $data[3];
if (!$page) {
    $page = 1;
}
$page = $page - 1;

$query->setRows($data[4]);
$query->setStart($page * $data[4]);
;
// $query->addHighlightField("text");
$query->setHighlight(TRUE);
$query->setHighlightSimplePre('<span class="result-highlighted">');
$query->setHighlightSimplePost('</span>');
$query->setHighlightUsePhraseHighlighter(true);
$query->setHighlightFragsize(250);




$parser = new wikiParser(); //błążejowe
//$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

$query_response = $client->query($query);
$query_response->setParseMode(SolrQueryResponse::PARSE_SOLR_DOC);
$results = $query_response->getResponse();

$total_found = $results['response']['numFound'];
$total_found = $total_found / $data[4];

//$facet_data = $results->facet_counts->facet_dates;

/*
 * Parsowanie tekstu artykułów
 */

/* for ($i = 0; $i < count($results['response']['docs']); $i++) {
  $results['highlighting'][$i]['text'] = $parser->parse($results['highlighting'][$i]['text']);
  } */

$ret = array($results, $total_found);
echo json_encode($ret);
//echo json_encode($query_response->getResponse());
?>
