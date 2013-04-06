<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $last_name
 * @property string $account
 * @property integer $age
 * @property string $birthday
 * @property string $datecreate
 * @property string $datemodify
 * @property string $note
 * @property integer $entity_id
 * @property text $session
 *
 * The followings are the available model relations:
 * @property Accounts[] $accounts
 * @property Facture[] $factures
 * @property Entity $entity
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, datecreate, datemodify, entity_id', 'required'),
			array('age, entity_id', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>50),
			array('email', 'length', 'max'=>245),
			array('name, last_name, account', 'length', 'max'=>45),
			array('birthday, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('session,id, username, password, email, name, last_name, account, age, birthday, datecreate, datemodify, note, entity_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'accounts' => array(self::HAS_MANY, 'Accounts', 'users_id'),
			'factures' => array(self::HAS_MANY, 'Facture', 'users_id'),
			'entity' => array(self::BELONGS_TO, 'Entity', 'entity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'name' => 'Name',
			'last_name' => 'Last Name',
			'account' => 'Account',
			'age' => 'Age',
			'birthday' => 'Birthday',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
			'note' => 'Note',
			'entity_id' => 'Entity',
			'session' => 'session',

		);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	public function generateSalt()
	{
		return uniqid('',true);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('entity_id',$this->entity_id);
		$criteria->compare('session',$this->session);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}