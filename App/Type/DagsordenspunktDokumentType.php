<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class DagsordenspunktDokumentType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'DagsordenspunktDokumentType',
            'description' => 'DagsordenspunktDokumentType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'dokumentid' => Types::int(),
                    'dagsordenspunktid' => Types::int(),
                    'note' => Types::string(),
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
