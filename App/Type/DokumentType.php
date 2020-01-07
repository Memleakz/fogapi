<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class DokumentType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'DokumentType',
            'description' => 'DokumentType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'typeid' => Types::int(),
                    'kategoriid' => Types::int(),
                    'statusid' => Types::int(),
                    'offentlighedskode' => Types::string(),
                    'titel' => Types::string(),
                    'dato' => Types::string(),
                    'modtagelsesdato' => Types::string(),
                    'frigivelsesdato' => Types::string(),
                    'paragraf' => Types::string(),
                    'paragrafnummer' => Types::string(),
                    'spørgsmålsordlyd' => Types::string(),
                    'spørgsmålstitel' => Types::string(),
                    'spørgsmålsid' => Types::int(),
                    'procedurenummer' => Types::string(),
                    'grundnotatstatus' => Types::string(),
                    'dagsordenudgavenummer' => Types::string(),
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
            'Document' => [
                    'type' => Types::Dokument(),
                    'description' => 'Returns user by id (in range of 1-5)',
                    'args' => [
                        'id' => Types::nonNull(Types::id()),
                        'filter' => Types::string(),
                    ]
                ],  
                'Documents' => [
                    'type' => Types::listOf(Types::Dokument()),
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
