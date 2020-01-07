<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class DagsordenspunktDokument
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="int") */
    public $dagsordenspunktid; //int
    /** @ODM\Field(type="string") */
    public $note; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

