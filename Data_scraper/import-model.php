<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$directory = '/path/to/my/directory';
$dbName = "folketing";
$cwd = getcwd();
chdir($cwd . "/dump");
$scanned_directory = array_diff(scandir($cwd . "/dump"), array('..', '.'));
foreach($scanned_directory as $file)
{
    $collection_name = reset(explode('.',$file));
    exec("mongoimport --db $dbName --collection $collection_name --file $file --jsonArray");
}
