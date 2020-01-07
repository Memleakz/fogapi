<?php

Namespace App;

use GraphQL\Type\Definition\ListOfType;
use GraphQL\Type\Definition\NonNull;
use GraphQL\Type\Definition\Type;

use App\Type\AktørType;
use App\Type\AktørTypeType;
use App\Type\MødeType;
use App\Type\DokumentType;
use App\Type\EmneordType;
use App\Type\ForslagType;
use App\Type\SagType;
use App\Type\StemmeType;
use App\Type\AfstemningType;
use App\Type\PeriodeType;
use App\QueryType;


class Types
{
    private static $Aktør;
    private static $AktørType;
    private static $Møde;
    private static $Dokument;
    private static $Emneord;
    private static $Forslag;
    private static $Sag;
    private static $Stemme;
    private static $Afstemning;
    private static $Periode;
    private static $query;
    
    /**
     * @return Aktør
     */
    public static function Aktør()
    {
        return self::$Aktør ?: (self::$Aktør = new AktørType());
    }
    
    public static function AktørType()
    {
        return self::$AktørType ?: (self::$AktørType = new AktørTypeType());
    }
    /**
     * @return AktørType
     */
    public static function Møde()
    {
        return self::$Møde ?: (self::$Møde = new MødeType());
    }
    /**
     * @return AktørType
     */
    public static function Dokument()
    {
        return self::$Dokument ?: (self::$Dokument = new DokumentType());
    }
    /**
     * @return AktørType
     */
    public static function Emneord()
    {
        return self::$Emneord ?: (self::$Emneord = new EmneordType());
    }
    /**
     * @return AktørType
     */
    public static function Forslag()
    {
        return self::$Forslag ?: (self::$Forslag = new ForslagType());
    }
     /**
     * @return AktørType
     */
    public static function Sag()
    {
        return self::$Sag ?: (self::$Sag = new SagType());
    }
     /**
     * @return AktørType
     */
    public static function Stemme()
    {
        return self::$Stemme ?: (self::$Stemme = new StemmeType());
    }
     /**
     * @return AktørType
     */
    public static function Afstemning()
    {
        return self::$Afstemning ?: (self::$Afstemning = new AfstemningType());
    }
    /**
     * @return AktørType
     */
    public static function Periode()
    {
        
        return self::$Periode ?: (self::$Periode = new PeriodeType());
    }
    /**
     * @return QueryType
     */
    public static function query()
    {
        return self::$query ?: (self::$query = new QueryType());
    }
       // Let's add internal types as well for consistent experience
    public static function boolean()
    {
        return Type::boolean();
    }
    /**
     * @return \GraphQL\Type\Definition\FloatType
     */
    public static function float()
    {
        return Type::float();
    }
    /**
     * @return \GraphQL\Type\Definition\IDType
     */
    public static function id()
    {
        return Type::id();
    }
    /**
     * @return \GraphQL\Type\Definition\IntType
     */
    public static function int()
    {
        return Type::int();
    }
    /**
     * @return \GraphQL\Type\Definition\StringType
     */
    public static function string()
    {
        return Type::string();
    }
    /**
     * @param Type $type
     * @return ListOfType
     */
    public static function listOf($type)
    {
        return new ListOfType($type);
    }
    /**
     * @param Type $type
     * @return NonNull
     */
    public static function nonNull($type)
    {
        return new NonNull($type);
    }
    
}

