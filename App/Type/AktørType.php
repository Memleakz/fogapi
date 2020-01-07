<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;

use Data\DataSource;
use App\Types;

class AktørType extends ObjectType
{
    public function __construct() {
        $config = [
            'name' => 'Aktor',
            'description' => 'Folketingets Aktører',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'type' =>  Types::string(),
                    'typeid' =>  Types::string(),
                    'gruppenavnkort' => Types::string(),
                    'navn' => Types::string(),
                    'fornavn' => Types::string(),
                    'efternavn' => Types::string(),
                    'biografi' => Types::string(),
                    'periode' => Types::Periode(),
                    'opdateringsdato' => Types::string(),
                    'startdato' => Types::string(),
                    'slutdato' => Types::string(),
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
    function resolveType($object, $args, $context, $info)
    {     
        $data['id'] = $object->typeid;
        $db = new \App\Data\DataSource(); 
        $type = $db->GetAktørType($data);
        return $type->type;
    }
    function resolvePeriode($object, $args, $context, $info)
    {
        $data['id'] = $object->typeid;
        $db = new \App\Data\DataSource(); 
        $type = $db->GetPeriod($data);
        return $type;
    }
    public function GetQueryFields()
    {
        $fields = [
            'Aktoer' => [
                    'type' => Types::Aktør(),
                    'description' => 'Returns user by id (in range of 1-5)',
                    'args' => [
                        'id' => Types::nonNull(Types::id()),
                        'filter' => Types::string(),
                    ]
                ],  
                'Aktoers' => [
                    'type' => Types::listOf(Types::Aktør()),
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


