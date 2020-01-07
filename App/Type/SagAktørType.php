<?php 
Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;
class SagAktørType extends ObjectType
{
    public function __construct() {
        $config = [
            'name' => 'SagAktørType',
            'description' => 'SagAktørType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'aktørid' => Types::int(),
                    'sagid' => Types::int(),
                    'rolleid' => Types::int(),
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