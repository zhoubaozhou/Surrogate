<?php

/**
 * BaseVirtualServiceListner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $virtual_service_id
 * @property bigint $listner_id
 * 
 * @method bigint                getVirtualServiceId()   Returns the current record's "virtual_service_id" value
 * @method bigint                getListnerId()          Returns the current record's "listner_id" value
 * @method VirtualServiceListner setVirtualServiceId()   Sets the current record's "virtual_service_id" value
 * @method VirtualServiceListner setListnerId()          Sets the current record's "listner_id" value
 * 
 * @package    webadmin
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVirtualServiceListner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('virtual_service_listner');
        $this->hasColumn('virtual_service_id', 'bigint', null, array(
             'type' => 'bigint',
             'primary' => true,
             ));
        $this->hasColumn('listner_id', 'bigint', null, array(
             'type' => 'bigint',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}