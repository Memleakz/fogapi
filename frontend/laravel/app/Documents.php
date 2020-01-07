<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Documents
 *
 * @author tobias
 */
class Documents extends gqlObject {
     public function getKeywords($fields, $args) {
        return $this->Query($fields, $args);
    }

    protected function getQuery() {
        $query = <<<'GRAPHQL'
           query { Documents($arguments) { $fields } }
GRAPHQL;
        return $query;
    }
}
