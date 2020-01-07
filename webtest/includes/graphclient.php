<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of graphclient
 *
 * @author tobias
 */
class graphclient {
   private $endpoint = "http://localhost:8080";
   public function Query($query,$filters)
   {
      
       $result = array();
       $filters = str_replace('"', '\"',$filters); // proper escape json filters.
       $query = str_replace('$filters', $filters,$query); // proper escape json filters.
       //Combine filters and query
       
       //Query the server!
       
       $result = $this->graphql_query($query,['filters' => $filters],null);
       
       return $result;
   }
   private function graphql_query(string $query, $variables, string $token = null)
    {
     
    $headers = ['Content-Type: application/json', 'User-Agent: opentingen graph client'];
    if (null !== $token) {
        $headers[] = "Authorization: bearer $token";
    }
    if (false === $data = file_get_contents($this->endpoint, false, stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => $headers,
    'content' => json_encode(['query' => $query]),
        ]
    ]))) {
        $error = error_get_last();
        throw new \ErrorException($error['message'], $error['type']);
    }
    return json_decode($data, true);
}
}
