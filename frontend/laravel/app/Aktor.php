<?php

namespace App;

/**
 * Description of Gqlclient
 *
 * @author tobias
 */
class Aktor extends gqlObject{
    
    public function __construct() {
        parent::__construct();
    }
    public function getAktors($fields, $args) {
        return $this->Query($fields, $args);
    }
    /*
     * The Raw query place the tokens where needed.
     */
    protected function getQuery() {
        $query = <<<'GRAPHQL'
            query {
              Aktoers($arguments)
              {
                $fields
              }
            }
GRAPHQL;
        return $query;
    }

}
