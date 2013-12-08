<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Applications', 'doctrine');

/**
 * BaseApplications
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_person
 * @property integer $id_jobs
 * @property Person $Person
 * @property Jobs $Jobs
 * 
 * @method integer      getIdPerson()  Returns the current record's "id_person" value
 * @method integer      getIdJobs()    Returns the current record's "id_jobs" value
 * @method Person       getPerson()    Returns the current record's "Person" value
 * @method Jobs         getJobs()      Returns the current record's "Jobs" value
 * @method Applications setIdPerson()  Sets the current record's "id_person" value
 * @method Applications setIdJobs()    Sets the current record's "id_jobs" value
 * @method Applications setPerson()    Sets the current record's "Person" value
 * @method Applications setJobs()      Sets the current record's "Jobs" value
 * 
 * @package    newproject
 * @subpackage model
 * @author     Alina Parascan
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseApplications extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('applications');
        $this->hasColumn('id_person', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id_jobs', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Person', array(
             'local' => 'id_person',
             'foreign' => 'id_person'));

        $this->hasOne('Jobs', array(
             'local' => 'id_jobs',
             'foreign' => 'id_jobs'));
    }
}