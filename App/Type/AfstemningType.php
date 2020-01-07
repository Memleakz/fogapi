<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class AfstemningType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'AfstemningType',
            'description' => '',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'nummer' => Types::string(),
                    'konklusion' => Types::string(),
                    'vedtaget' => Types::boolean(),
                    'kommentar' => Types::string(),
                    'mødeid' => Types::int(),
                    'typeid' => Types::int(),
                    'sagstrinid' => Types::int(),
                    'opdateringsdato' => Types::string(),
                ];
            },
            'resolveField' => function($Aktør, $args, $context, ResolveInfo $info) {
                $method = 'resolve' . ucfirst($info->fieldName);
                if (method_exists($this, $method)) {
                    return $this->{$method}($Aktør, $args, $context, $info);
                } else {
                    return $Aktør->{$info->fieldName};
                }
            }
        ];
        parent::__construct($config);
    }
    public function GetQueryFields()
    {
        $fields = [
            'Afstemning' => [
                    'type' => Types::Afstemning(),
                    'description' => 'Returns user by id (in range of 1-5)',
                    'args' => [
                        'id' => Types::nonNull(Types::id()),
                        'filter' => Types::string(),
                    ]
                ],  
                'Afstemninger' => [
                    'type' => Types::listOf(Types::Afstemning()),
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
