<?php

/**
 * This is the model class for table "accounts".
 *
 * The followings are the available columns in table 'accounts':
 * @property integer $id
 * @property string $account_num
 * @property string $label
 * @property string $estrato
 * @property integer $utilities_id
 * @property integer $public_id
 * @property string $datecreate
 * @property string $datemodify
 * @property string $medidor_num
 * @property integer $users_id
 * @property integer $entity_id
 *
 * The followings are the available model relations:
 * @property Utilities $utilities
 * @property Public $public
 * @property Users $users
 * @property Entity $entity
 * @property Facture[] $factures
 */
class Accounts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Accounts the static model class
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
		return 'accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_num, label, utilities_id, public_id, datecreate, datemodify, users_id, entity_id', 'required'),
			array('utilities_id, public_id, users_id, entity_id', 'numerical', 'integerOnly'=>true),
			array('account_num, label, estrato, medidor_num', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, account_num, label, estrato, utilities_id, public_id, datecreate, datemodify, medidor_num, users_id, entity_id', 'safe', 'on'=>'search'),
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
			'utilities' => array(self::BELONGS_TO, 'Utilities', 'utilities_id'),
			'public' => array(self::BELONGS_TO, 'Public', 'public_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'entity' => array(self::BELONGS_TO, 'Entity', 'entity_id'),
			'factures' => array(self::HAS_MANY, 'Facture', 'accounts_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_num' => 'Account Num',
			'label' => 'Label',
			'estrato' => 'Estrato',
			'utilities_id' => 'Utilities',
			'public_id' => 'Public',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
			'medidor_num' => 'Medidor Num',
			'users_id' => 'Users',
			'entity_id' => 'Entity',
		);
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
		$criteria->compare('account_num',$this->account_num,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('estrato',$this->estrato,true);
		$criteria->compare('utilities_id',$this->utilities_id);
		$criteria->compare('public_id',$this->public_id);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('medidor_num',$this->medidor_num,true);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('entity_id',$this->entity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}