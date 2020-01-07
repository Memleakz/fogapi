<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class MødeType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'MødeType',
            'description' => 'MødeType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'titel' => Types::string(),
                    'lokale' => Types::string(),
                    'nummer' => Types::string(),
                    'dagsordenurl' => Types::string(),
                    'starttidsbemærkning' => Types::string(),
                    'offentlighedskode' => Types::string(),
                    'dato' => Types::string(),
                    'statusid' => Types::int(),
                    'typeid' => Types::int(),
                    'periodeid' => Types::int(),
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

    public function GetQueryFields() {
        $fields = [
            'Meeting' => [
                'type' => Types::Møde(),
                'description' => 'Returns user by id (in range of 1-5)',
                'args' => [
                    'id' => Types::nonNull(Types::id()),
                    'filter' => Types::string(),
                ]
            ],
            'Meetings' => [
                'type' => Types::listOf(Types::Møde()),
                'description' => 'Returns all by filter',
                'args' => [
                    'sort' => Types::string(),
                    'filter' => Types::string(),
                    'limit' => Types::int(),
                    'skip' => Types::int(),
                ]
            ]
        ];
        return $fields;
    }

}
