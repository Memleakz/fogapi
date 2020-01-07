<?php 
Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;
class OmtrykType extends ObjectType
{
    public function __construct() {
        $config = [
            'name' => 'OmtrykType',
            'description' => 'OmtrykType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'dokumentid' => Types::int(),
                    'dato' => Types::string(),
                    'begrundelse' => Types::string(),
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