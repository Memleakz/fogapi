<?php

/* 
* Imports all files from /dump into the mongo db.
* Example: php import-model.php <dbname>
*/
$dbName = $argv[1];
$cwd = getcwd();
chdir($cwd . "/dump");
$scanned_directory = array_diff(scandir($cwd . "/dump"), array('..', '.'));
foreach($scanned_directory as $file)
{
    $collection_name = reset(explode('.',$file));
    echo "========= Updating: " . $collection_name ."\n";
    exec("mongoimport -v --upsertFields=id --db $dbName --collection $collection_name --file $file --jsonArray");
    echo "==========================:\n";
}
