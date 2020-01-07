<?php

namespace App\Data;

use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

use Documents\Aktør;
use Documents\Aktørtype;
use Documents\Møde;
use Documents\Dokument;
use Documents\Emneord;
use Documents\Forslag;
use Documents\Sag;
use Documents\Stemme;
use Documents\Afstemning;
use Documents\Periode;

class DataSource {

    private $config;
    private $dm;

    public function __construct() {
        $this->config = new Configuration();
        $this->config->setProxyDir('Proxies');
        $this->config->setProxyNamespace('Proxies');
        $this->config->setHydratorDir('Hydrators');
        $this->config->setHydratorNamespace('Hydrators');
        $this->config->setDefaultDB('folketing');
        //$config->setDocumentNamespaces('Documents');
        $this->config->setMetadataDriverImpl(AnnotationDriver::create('Documents'));

        $this->dm = DocumentManager::create(null, $this->config);
    }

    public function GetAktør($args) {
       
        $user = $this->dm->getRepository(Aktør::class)->findOneBy(array('id' => $args['id']));
        //echo var_dump($user);
        return $user;
    }
    public function GetAktørType($args) {
        $user = $this->dm->getRepository(Aktørtype::class)->findOneBy(array('id' => $args['id']));
        //echo var_dump($user);
        return $user;
    }

    public function GetAktørs($args) { 
        $test = $this->ApplyFilters(Aktør::class, $args);
        if(isset($args['limit']))
        {
            $test->limit($args['limit']);
        }
        $query = $test->getQuery();
        $users = $query->execute();
        
        //$users = $this->dm->getRepository('Aktør')->findAll();  
        return $users;
    }

    public function GetMeeting($args) {
        //$testUser = new User();
        //echo var_dump($args);
        $id = $args['id'];
        $user = $this->dm->getRepository(Møde::class)->findOneBy(array('id' => $id));
        //echo var_dump($user);
        return $user;
    }

    public function GetMeetings($args) {
        //$test = $this->ApplyFilters(Møde::class, $args['filter']);
        //$query = $test->getQuery();
        //$users = $query->execute();
        //echo var_dump($users);
        $users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetDocuments($args) {
        $test = $this->ApplyFilters(Dokument::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetKeywords($args) {
        $test = $this->ApplyFilters(Emneord::class, $args);
        
        $query = $test->getQuery();
        
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetProposals($args) {
        $test = $this->ApplyFilters(Forslag::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetCases($args) {
        $test = $this->ApplyFilters(Sag::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetVotes($args) {
        $test = $this->ApplyFilters(Stemme::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    public function GetAfstemnings($args) {
        $test = $this->ApplyFilters(Afstemning::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }
    public function GetPeriod($args) {
        //$testUser = new User();
        //echo var_dump($args);
        $id = $args['id'];
        $user = $this->dm->getRepository(Periode::class)->findOneBy(array('id' => $id));
        //echo var_dump($user);
        return $user;
    }
    public function GetPeriodes($args) {
        $test = $this->ApplyFilters(Periode::class, $args);
        $query = $test->getQuery();
        $users = $query->execute();
        //echo var_dump($users);
        //$users = $this->dm->getRepository(Møde::class)->findAll();   
        return $users;
    }

    private function ApplyFilters($type, $args) {
        
        $qb = $this->dm->createQueryBuilder($type);
        if(isset( $args['filter']))
        {
            $json = str_replace('\"', '"', $args['filter']);
            $filters = json_decode($json);

            $operator_map = [
                ['op' => 'eq', 'func' => 'equals', 'argcount' => 1],
                ['op' => 'gt', 'func' => 'gt', 'argcount' => 1],
                ['op' => 'gte', 'func' => 'gte', 'argcount' => 1],
                ['op' => 'in', 'func' => 'in', 'argcount' => 1],
                ['op' => 'lt', 'func' => 'lt', 'argcount' => 1],
                ['op' => 'lte', 'func' => 'lte', 'argcount' => 1],
                ['op' => 'ne', 'func' => 'notEqual', 'argcount' => 1],
                ['op' => 'nin', 'func' => 'notIn', 'argcount' => 1],
            ];
            if (isset($filters) && is_object($filters)) {

                foreach ($filters->data as $index => $objs) {
                    foreach ($objs as $key => $filterValue) {

                        $operator = $key;
                        //echo var_dump($key);
                        //exit(1);
                        $field = $filterValue[0];
                        $value = $filterValue[1];
                        foreach ($operator_map as $map) {
                            if ($map["op"] == $operator) {
                                //echo "adding field: ". $field . " Value:" . $value;
                                $qb->field($field);
                                call_user_func_array(array($qb, $map['func']), array($value));
                            }
                        }
                    }
                }
            }
        }
        if(isset($args['limit']))
        {
            $qb->limit($args['limit']);
        }
        if(isset($args['sort']))
        {
            foreach($args['sort'] as $key => $value)
            {
                //build sort arguments.
            }
            //sort!
        }
        return $qb;
    }

}
