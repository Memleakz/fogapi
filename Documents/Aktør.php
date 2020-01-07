<?php

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Aktør {
    
    /** @ODM\Id */
    public $_id;
    
    /** @ODM\Field(type="int") */
    public $id;

    /** @ODM\Field(type="int") */
    public $typeid;

    /** @ODM\Field(type="string") */
    public $gruppenavnkort;

    /** @ODM\Field(type="string") */
    public $navn;

    /** @ODM\Field(type="string") */
    public $fornavn;

    /** @ODM\Field(type="string") */
    public $efternavn;

    /** @ODM\Field(type="string") */
    public $biografi;

    /** @ODM\Field(type="string") */
    public $periodeid;

    /** @ODM\Field(type="date") */
    public $opdateringsdato;

    /** @ODM\Field(type="date") */
    public $startdato;

    /** @ODM\Field(type="date") */
    public $slutdato;

}
