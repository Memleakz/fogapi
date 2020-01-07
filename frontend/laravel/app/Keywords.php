<?php

namespace App;

/**
 * Description of Gqlclient
 *
 * @author tobias
 */
class Keywords extends gqlObject {

    public function getKeywords($fields, $args) {
        return $this->Query($fields, $args);
    }

    protected function getQuery() {
        $query = <<<'GRAPHQL'
           query { Keywords($arguments) { $fields } }
GRAPHQL;
        return $query;
    }

}
