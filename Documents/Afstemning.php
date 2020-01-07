
<?php
namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Afstemning
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $nummer; //int   
    /** @ODM\Field(type="string") */
    public $konklusion; //String
    /** @ODM\Field(type="boolean") */
    public $vedtaget; //boolean
    /** @ODM\Field(type="string") */
    public $kommentar; //String
    /** @ODM\Field(type="int") */
    public $mødeid; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="int") */
    public $sagstrinid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



