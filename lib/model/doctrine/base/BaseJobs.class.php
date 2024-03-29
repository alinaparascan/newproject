<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Jobs', 'doctrine');

/**
 * BaseJobs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_jobs
 * @property string $job_title
 * @property date $posting_date
 * @property string $job_description
 * @property string $job_location
 * @property Doctrine_Collection $Applications
 * 
 * @method integer             getIdJobs()          Returns the current record's "id_jobs" value
 * @method string              getJobTitle()        Returns the current record's "job_title" value
 * @method date                getPostingDate()     Returns the current record's "posting_date" value
 * @method string              getJobDescription()  Returns the current record's "job_description" value
 * @method string              getJobLocation()     Returns the current record's "job_location" value
 * @method Doctrine_Collection getApplications()    Returns the current record's "Applications" collection
 * @method Jobs                setIdJobs()          Sets the current record's "id_jobs" value
 * @method Jobs                setJobTitle()        Sets the current record's "job_title" value
 * @method Jobs                setPostingDate()     Sets the current record's "posting_date" value
 * @method Jobs                setJobDescription()  Sets the current record's "job_description" value
 * @method Jobs                setJobLocation()     Sets the current record's "job_location" value
 * @method Jobs                setApplications()    Sets the current record's "Applications" collection
 * 
 * @package    newproject
 * @subpackage model
 * @author     Alina Parascan
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseJobs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobs');
        $this->hasColumn('id_jobs', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('job_title', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('posting_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('job_description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('job_location', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Applications', array(
             'local' => 'id_jobs',
             'foreign' => 'id_jobs'));
    }
}