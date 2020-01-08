<?php
//include_once 'vendor/autoload.php';
include_once 'folketing.php';
ini_set("memory_limit", "-1");
set_time_limit (0);
//$client = new MongoDB\Client("mongodb://localhost:27017");

$client = new folketing_client();
$json = file_get_contents("model.json");
$model = json_decode($json);

foreach($model as $id)
{
    echo "Getting Objects for: " . $id . "\n";
    $model_data = array();
    $model_data[$id] = $client->GetAll($id);
    if($model_data[$id] != null)
    {
        echo "Objects: " . sizeof($model_data[$id]) . "\n";
        $fp = fopen('dump/'.$id.'.json', 'w+');
        fwrite($fp, json_encode($model_data[$id]));
        fclose($fp);
        unset($model_data);
    }
}

