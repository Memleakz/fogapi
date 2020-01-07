<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class DagsordenspunktType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'DagsordenspunktType',
            'description' => 'DagsordenspunktType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'kørebemærkning' => Types::string(),
                    'titel' => Types::string(),
                    'kommentar' => Types::string(),
                    'nummer' => Types::string(),
                    'forhandlingskode' => Types::string(),
                    'forhandling' => Types::string(),
                    'superid' => Types::int(),
                    'sagstrinid' => Types::int(),
                    'mødeid' => Types::int(),
                    'offentlighedskode' => Types::string(),
                    'opdateringsdato' => Types::string(),
                ];
            },
            'resolveField' => function($AktørTypeType, $args, $context, ResolveInfo $info) {
                $method = 'resolve' . ucfirst($info->fieldName);
                if (method_exists($this, $method)) {
                    return $this->{$method}($AktørTypeType, $args, $context, $info);
                } else {
                    return $AktørTypeType->{$info->fieldName};
                }
            }
        ];
        parent::__construct($config);
    }

}
