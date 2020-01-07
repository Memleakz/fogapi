<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class SagDokument
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $sagid; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="string") */
    public $bilagsnummer; //String
    /** @ODM\Field(type="date") */
    public $frigivelsesdato; //Date
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
    /** @ODM\Field(type="int") */
    public $rolleid; //int

}



