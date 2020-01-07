<?php 
Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;
class SagstrinAktørRolleType extends ObjectType
{
    public function __construct() {
        $config = [
            'name' => 'SagstrinAktørRolleType',
            'description' => 'SagstrinAktørRolleType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'rolle' => Types::string(),
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