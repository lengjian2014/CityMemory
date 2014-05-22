<?php

/**
 * This is the model class for table "order_shipping".
 *
 * The followings are the available columns in table 'order_shipping':
 * @property integer $shipping_id
 * @property string $shipping_code
 * @property string $shipping_name
 * @property string $shipping_desc
 * @property string $insure
 * @property integer $support_cod
 * @property integer $enabled
 */
class OrderShipping extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_shipping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shipping_code, shipping_name, shipping_desc', 'required'),
			array('support_cod, enabled', 'numerical', 'integerOnly'=>true),
			array('shipping_code', 'length', 'max'=>20),
			array('shipping_name', 'length', 'max'=>120),
			array('shipping_desc', 'length', 'max'=>255),
			array('insure', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('shipping_id, shipping_code, shipping_name, shipping_desc, insure, support_cod, enabled', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'shipping_id' => '自增ID号',
			'shipping_code' => '配送方式的字符串代号',
			'shipping_name' => '配送方式的名称',
			'shipping_desc' => '配送方式的描述',
			'insure' => '保价费用，单位元，或者是百分数，该值直接输出为报价费用',
			'support_cod' => '是否支持货到付款，1，支持；0，不支持',
			'enabled' => '该配送方式是否被禁用，1，可用；0，禁用',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('shipping_code',$this->shipping_code,true);
		$criteria->compare('shipping_name',$this->shipping_name,true);
		$criteria->compare('shipping_desc',$this->shipping_desc,true);
		$criteria->compare('insure',$this->insure,true);
		$criteria->compare('support_cod',$this->support_cod);
		$criteria->compare('enabled',$this->enabled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderShipping the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
