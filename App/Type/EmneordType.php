<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class EmneordType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'EmneordType',
            'description' => 'EmneordType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    "typeid" => Types::int(),
                    "emneord" => Types::string(),
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
       public function GetQueryFields()
    {
        $fields = [
            'Keyword' => [
                    'type' => Types::Emneord(),
                    'description' => 'Returns user by id (in range of 1-5)',
                    'args' => [
                        'id' => Types::nonNull(Types::id()),
                        'filter' => Types::string(),
                    ]
                ],  
                'Keywords' => [
                    'type' => Types::listOf(Types::Emneord()),
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
