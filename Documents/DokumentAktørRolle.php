<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class DokumentAktørRolle
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $rolle; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



