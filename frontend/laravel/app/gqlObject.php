<?php
namespace App;
abstract class gqlObject
{
    private $originalQuery = "";
    private $LastQuery = "";
    function __construct() {
        $this->originalQuery = $this->getQuery();
    }
    protected abstract function getQuery();
    
    public function Query($fields,$args)
    {
        $this->LastQuery = $this->originalQuery;
        $query = $this->ParseArguments($args);
        $query = $this->ParseFields($fields);
        //var_dump($query);
        //exit(1);
        $client = new \App\Gqlclient();
        $result = $client->Query($query);
        return $result;
    }
    private function ParseArguments($args)
    {
        $combine= "";
        $count = 0;
        foreach($args['data'] as $key => $value)
        {
                if(is_array($args['data'][$key]))
                {
                    $value = json_encode(array('data' => array($args['data'][$key])),JSON_OBJECT_AS_ARRAY );
                    $value = "\"" . str_replace('"', '\"',$value) . "\""; // proper escape json filters.

                }
                if($count == 0)
                {

                    $combine .= $key . ": " . $value;
                    $count++;
                }
                else
                {
                    $combine .= " , ".$key . ": " . $value;
                }
        }
        return $this->LastQuery = str_replace('$arguments', $combine, $this->LastQuery);
    }
    function ParseFields($fields)
    {
        $fields = implode(',', $fields);
        return $this->LastQuery = str_replace('$fields', $fields, $this->LastQuery);
    }
    function Reset()
    {
        $this->$last_query = $this->$orig_query;
    }
}

