<?php
/*
* This gets the data from the opendata api from the danish folketing.
* It dumps the data as json files in /dump for later processing and import.
* The Api is very unstable and will often block the scrape.
* It is neccesary to resume from time to time
*/
include_once 'folketing.php';
ini_set("memory_limit", "-1");
set_time_limit (0);


$client = new folketing_client();
$json = file_get_contents("model.json");
$model = json_decode($json);

$json = file_get_contents("done_model.json");
$done_model = json_decode($json);
$target_db ="folketing";

foreach($model as $id)
{
    if(in_array($id,$done_model))
    {
        echo "Skipping: " . $id . "\n";
        continue;
    }
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
        updateDoneModels($id);
    }
}
//are we done downloading the models ?
if(sizeof($model) == sizeof($done_model))
{
    importModelOnComplete();
}

//helper functions.
function updateDoneModels($id)
{
    global $done_model;
    array_push($done_model,$id);
    $fp = fopen('done_model.json', 'w+');
    fwrite($fp, json_encode($done_model));
    fclose($fp);
    return true;
}
function importModelOnComplete()
{
    global $target_db;
    exec('php import-model.php '.$target_db);
}
