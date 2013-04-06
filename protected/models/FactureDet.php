<?php

/**
 * This is the model class for table "facture_det".
 *
 * The followings are the available columns in table 'facture_det':
 * @property integer $id
 * @property integer $facture_id
 * @property string $label
 * @property double $total
 * @property double $tax
 * @property integer $consumo
 * @property string $medida
 * @property double $discount
 * @property integer $qty
 * @property string $date_venc
 * @property string $datecreate
 *
 * The followings are the available model relations:
 * @property Facture $facture
 */
class FactureDet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FactureDet the static model class
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
		return 'facture_det';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facture_id', 'required'),
			array('facture_id, consumo, qty', 'numerical', 'integerOnly'=>true),
			array('total, tax, discount', 'numerical'),
			array('label, medida', 'length', 'max'=>45),
			array('date_venc, datecreate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, facture_id, label, total, tax, consumo, medida, discount, qty, date_venc, datecreate', 'safe', 'on'=>'search'),
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
			'facture' => array(self::BELONGS_TO, 'Facture', 'facture_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'facture_id' => 'Facture',
			'label' => 'Label',
			'total' => 'Total',
			'tax' => 'Tax',
			'consumo' => 'Consumo',
			'medida' => 'Medida',
			'discount' => 'Discount',
			'qty' => 'Qty',
			'date_venc' => 'Date Venc',
			'datecreate' => 'Datecreate',
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
		$criteria->compare('facture_id',$this->facture_id);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('consumo',$this->consumo);
		$criteria->compare('medida',$this->medida,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('date_venc',$this->date_venc,true);
		$criteria->compare('datecreate',$this->datecreate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}