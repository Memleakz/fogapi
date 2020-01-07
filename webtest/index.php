<?php

require_once('includes/graphclient.php');


$client = new graphclient();

$query = <<<'GRAPHQL'
query {
  Aktoers(filter: "$filters")
  {
    id
    navn
  }
}
GRAPHQL;

$filters = '{"data": []}';
$result = $client->Query($query, $filters);

foreach($result["data"] as $aktors)
{
    foreach($aktors as $aktor)
    {
        echo $aktor["id"] . " - -" . $aktor["navn"] . "<br/>";
    }
}