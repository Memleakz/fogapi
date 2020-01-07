<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class SagstrinDokument
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $sagstrinid; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}


