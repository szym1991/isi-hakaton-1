
<?php

include "bootstrap.php";

$options = array
(
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login'    => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port'     => SOLR_SERVER_PORT,
);

$client = new SolrClient(array('hostname' => '127.0.0.1', 'port' => 8983, 'wt'=>'json'));

$query = new SolrQuery();
$temp = $_POST['query'];
$query->setQuery($temp);

$query->setStart(0);

$query->setRows(50);

//$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

$query_response = $client->query($query);
$query_response->setParseMode(SolrQueryResponse::PARSE_SOLR_DOC);
echo json_encode($query_response->getResponse());
//$response = $query_response->getResponse();

//print_r($response);

?>
