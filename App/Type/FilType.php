<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class FilType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'FilType',
            'description' => 'FilType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'dokumentid' => Types::int(),
                    'titel' => Types::string(),
                    'versionsdato' => Types::string(),
                    'filurl' => Types::string(),
                    'opdateringsdato' => Types::string(),
                    'variantkode' => Types::string(),
                    'format' => Types::string(),
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
