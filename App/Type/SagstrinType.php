<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class SagstrinType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'SagstrinType',
            'description' => 'SagstrinType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'titel' => Types::string(),
                    'dato' => Types::string(),
                    'sagid' => Types::int(),
                    'typeid' => Types::int(),
                    'folketingstidendeurl' => Types::string(),
                    'folketingstidende' => Types::string(),
                    'folketingstidendesidenummer' => Types::string(),
                    'statusid' => Types::int(),
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
