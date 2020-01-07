<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class AktørAktørType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'AktørAktør',
            'description' => '',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'fraaktørid' => Types::int(),
                    'tilaktørid' => Types::int(),
                    'startdato' => Types::string(),
                    'slutdato' => Types::string(),
                    'opdateringsdato' => Types::string(),
                    'rolleid' => Types::int(),
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

}
