<?php

/**
 * This is the model class for table "order_pack".
 *
 * The followings are the available columns in table 'order_pack':
 * @property integer $pack_id
 * @property string $pack_name
 * @property string $pack_img
 * @property integer $pack_fee
 * @property integer $free_money
 * @property string $pack_desc
 */
class OrderPack extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_pack';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pack_name, pack_img, pack_desc', 'required'),
			array('pack_fee, free_money', 'numerical', 'integerOnly'=>true),
			array('pack_name', 'length', 'max'=>120),
			array('pack_img, pack_desc', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pack_id, pack_name, pack_img, pack_fee, free_money, pack_desc', 'safe', 'on'=>'search'),
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
			'pack_id' => '包装配置的自增id',
			'pack_name' => '包装的名称',
			'pack_img' => '包装图纸',
			'pack_fee' => '包装的费用',
			'free_money' => '订单达到此金额可以免除该包装费用',
			'pack_desc' => '包装描述',
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

		$criteria->compare('pack_id',$this->pack_id);
		$criteria->compare('pack_name',$this->pack_name,true);
		$criteria->compare('pack_img',$this->pack_img,true);
		$criteria->compare('pack_fee',$this->pack_fee);
		$criteria->compare('free_money',$this->free_money);
		$criteria->compare('pack_desc',$this->pack_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderPack the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
