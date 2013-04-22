<?php

/**
 * This is the model class for table "facture".
 *
 * The followings are the available columns in table 'facture':
 * @property integer $id
 * @property string $facture_num
 * @property integer $accounts_id
 * @property integer $estate
 * @property double $total
 * @property double $tax
 * @property string $t_pay_date
 * @property double $consumo
 * @property string $tipo_medida
 * @property double $discount
 * @property string $datecreate
 * @property string $datemodify
 * @property integer $users_id
 * @property integer $entity_id
 *
 * The followings are the available model relations:
 * @property Accounts $accounts
 * @property Entity $entity
 * @property Users $users
 * @property FactureDet[] $factureDets
 */
class Facture extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facture the static model class
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
		return 'facture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facture_num, consumo,accounts_id, discount, datecreate, users_id, entity_id', 'required'),
			array('accounts_id, estate, users_id, entity_id', 'numerical', 'integerOnly'=>true),
			array('total, tax, consumo, discount', 'numerical'),
			array('facture_num, tipo_medida', 'length', 'max'=>45),
			array('datemodify', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, facture_num, accounts_id, estate, total, tax, t_pay_date, consumo, tipo_medida, discount, datecreate, datemodify, users_id, entity_id', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::BELONGS_TO, 'Accounts', 'accounts_id'),
			'entity' => array(self::BELONGS_TO, 'Entity', 'entity_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'factureDets' => array(self::HAS_MANY, 'FactureDet', 'facture_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'facture_num' => Yii::t("lang_es","facture num"),
			'accounts_id' => Yii::t("lang_es","Accounts"),
			'estate' => Yii::t("lang_es","Status"),
			'total' => Yii::t("lang_es","Total Paid"),
			'tax' => 'Tax',
			't_pay_date' => Yii::t("lang_es","Time Pay Date"),
			'consumo' => 'Consumo',
			'tipo_medida' => 'Tipo Medida',
			'discount' => 'Discount',
			'datecreate' => 'Datecreate',
			'datemodify' => 'Datemodify',
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
		$criteria->compare('facture_num',$this->facture_num,true);
		$criteria->compare('accounts_id',$this->accounts_id);
		$criteria->compare('estate',$this->estate);
		$criteria->compare('total',$this->total);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('t_pay_date',$this->t_pay_date,true);
		$criteria->compare('consumo',$this->consumo);
		$criteria->compare('tipo_medida',$this->tipo_medida,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('datemodify',$this->datemodify,true);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('entity_id',$this->entity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}