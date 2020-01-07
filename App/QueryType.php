<?php
namespace App;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;

use App\Types;
use App\Data\DataSource;

class QueryType extends ObjectType
{ 
    public function __construct()
    {
        /*
         * Define the grandschema here..
         */
        $config = [
            'name' => 'Query',
            'fields' => [
            ],
            'resolveField' => function($rootValue, $args, $context, ResolveInfo $info) {
                return $this->{$info->fieldName}($rootValue, $args, $context, $info);
            }
        ];
        $config['fields'] = array_merge($config['fields'],Types::Aktør()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Afstemning()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Dokument()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Emneord()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Forslag()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Møde()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Sag()->GetQueryFields());
        $config['fields'] = array_merge($config['fields'],Types::Stemme()->GetQueryFields());
        parent::__construct($config);
    }
    public function Aktor($rootValue, $args)
    {
       
        $db = new DataSource(); 
        return $db->GetAktør($args);
    }
    public function Aktoers($rootValue, $args)
    {
        
        $db = new DataSource(); 
        return $db->GetAktørs($args);
    }
    public function Meeting($rootValue, $args)
    {
        $db = new DataSource(); 
        return $db->GetMeeting($args);
    }
    public function Meetings($rootValue, $args)
    {
        $db = new DataSource; 
        return $db->GetMeetings($args);
    }
    public function Documents($rootValue, $args)
    {
        $db = new DataSource; 
        return $db->GetDocuments($args);
    }
    public function Keywords($rootValue, $args)
    {
        
        $db = new DataSource; 
        return $db->GetKeywords($args);
    }
    public function Proposals($rootValue, $args)
    {
        
        $db = new DataSource; 
        return $db->GetProposals($args);
    }
     public function Cases($rootValue, $args)
    {
        
        $db = new DataSource; 
        return $db->GetCases($args);
    }
    public function Afstemnings($rootValue, $args)
    {
        
        $db = new DataSource; 
        return $db->GetAfstemningss($args);
    }
    
}