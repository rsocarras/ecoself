<?php

/**
 * This is the model class for table "entity".
 *
 * The followings are the available columns in table 'entity':
 * @property integer $id
 * @property string $label
 * @property string $address
 * @property string $family
 * @property string $phone
 * @property integer $city_id
 * @property integer $city_region_id
 * @property integer $city_region_country_id
 *
 * The followings are the available model relations:
 * @property Accounts[] $accounts
 * @property City $city
 * @property Facture[] $factures
 * @property Users[] $users
 */
class Entity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entity the static model class
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
		return 'entity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_id, city_region_id, city_region_country_id', 'required'),
			array('city_id, city_region_id, city_region_country_id', 'numerical', 'integerOnly'=>true),
			array('label, address, family, phone', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, label, address, family, phone, city_id, city_region_id, city_region_country_id', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::HAS_MANY, 'Accounts', 'entity_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'factures' => array(self::HAS_MANY, 'Facture', 'entity_id'),
			'users' => array(self::HAS_MANY, 'Users', 'entity_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'label' => 'Label',
			'address' => 'Address',
			'family' => 'Family',
			'phone' => 'Phone',
			'city_id' => 'City',
			'city_region_id' => 'City Region',
			'city_region_country_id' => 'City Region Country',
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
		$criteria->compare('label',$this->label,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('family',$this->family,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('city_region_id',$this->city_region_id);
		$criteria->compare('city_region_country_id',$this->city_region_country_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}