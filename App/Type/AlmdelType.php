<?php

Namespace App\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use App\Types;

class AlmdelType extends ObjectType {

    public function __construct() {
        $config = [
            'name' => 'AlmdelType',
            'description' => 'AlmdelType',
            'fields' => function() {
                return [
                    'id' => Types::id(),
                    'typeid' => Types::int(),
                    'kategoriid' => Types::int(),
                    'statusid' => Types::int(),
                    'titel' => Types::string(),
                    'titelkort' => Types::string(),
                    'offentlighedskode' => Types::string(),
                    'nummer' => Types::string(),
                    'nummerprefix' => Types::string(),
                    'nummernumerisk' => Types::string(),
                    'nummerpostfix' => Types::string(),
                    'resume' => Types::string(),
                    'periodeid' => Types::int(),
                    'afgørelsesresultatkode' => Types::string(),
                    'baggrundsmateriale' => Types::string(),
                    'opdateringsdato' => Types::string(),
                    'statsbudgetsag' => Types::boolean(),
                    'begrundelse' => Types::string(),
                    'paragrafnummer' => Types::string(),
                    'paragraf' => Types::string(),
                    'afgørelsesdato' => Types::string(),
                    'afgørelse' => Types::string(),
                    'rådsmødedato' => Types::string(),
                    'lovnummer' => Types::string(),
                    'lovnummerdato' => Types::string(),
                    'retsinformationsurl' => Types::string(),
                    'fremsatundersagid' => Types::int(),
                    'deltundersagid' => Types::int(),
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
