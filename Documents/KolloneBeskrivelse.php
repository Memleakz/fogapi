<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class KolloneBeskrivelse
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $entitetnavn; //String
    /** @ODM\Field(type="string") */
    public $kollonenavn; //String
    /** @ODM\Field(type="string") */
    public $beskrivelse; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



