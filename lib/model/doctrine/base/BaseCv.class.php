<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cv', 'doctrine');

/**
 * BaseCv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_cv
 * @property integer $id_person
 * @property string $name
 * @property string $surname
 * @property string $city
 * @property string $email
 * @property integer $phone
 * @property string $title
 * @property string $years_experience
 * @property string $description_experience
 * @property string $education
 * @property Person $Person
 * 
 * @method integer getIdCv()                   Returns the current record's "id_cv" value
 * @method integer getIdPerson()               Returns the current record's "id_person" value
 * @method string  getName()                   Returns the current record's "name" value
 * @method string  getSurname()                Returns the current record's "surname" value
 * @method string  getCity()                   Returns the current record's "city" value
 * @method string  getEmail()                  Returns the current record's "email" value
 * @method integer getPhone()                  Returns the current record's "phone" value
 * @method string  getTitle()                  Returns the current record's "title" value
 * @method string  getYearsExperience()        Returns the current record's "years_experience" value
 * @method string  getDescriptionExperience()  Returns the current record's "description_experience" value
 * @method string  getEducation()              Returns the current record's "education" value
 * @method Person  getPerson()                 Returns the current record's "Person" value
 * @method Cv      setIdCv()                   Sets the current record's "id_cv" value
 * @method Cv      setIdPerson()               Sets the current record's "id_person" value
 * @method Cv      setName()                   Sets the current record's "name" value
 * @method Cv      setSurname()                Sets the current record's "surname" value
 * @method Cv      setCity()                   Sets the current record's "city" value
 * @method Cv      setEmail()                  Sets the current record's "email" value
 * @method Cv      setPhone()                  Sets the current record's "phone" value
 * @method Cv      setTitle()                  Sets the current record's "title" value
 * @method Cv      setYearsExperience()        Sets the current record's "years_experience" value
 * @method Cv      setDescriptionExperience()  Sets the current record's "description_experience" value
 * @method Cv      setEducation()              Sets the current record's "education" value
 * @method Cv      setPerson()                 Sets the current record's "Person" value
 * 
 * @package    newproject
 * @subpackage model
 * @author     Alina Parascan
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cv');
        $this->hasColumn('id_cv', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('id_person', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('surname', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('city', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('email', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('phone', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('title', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('years_experience', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('description_experience', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '500',
             ));
        $this->hasColumn('education', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '200',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Person', array(
             'local' => 'id_person',
             'foreign' => 'id_person'));
    }
}