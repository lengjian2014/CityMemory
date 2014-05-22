<?php

/**
 * This is the model class for table "user_body".
 *
 * The followings are the available columns in table 'user_body':
 * @property integer $body_id
 * @property integer $uid
 * @property integer $create_uid
 * @property integer $height
 * @property integer $weight
 * @property string $unit
 * @property integer $body_shoulder
 * @property integer $clothes_shoulder
 * @property integer $body_bust
 * @property integer $clothes_bust
 * @property integer $body_waistline
 * @property integer $clothes_waistline
 * @property integer $body_hips
 * @property integer $clothes_hips
 * @property integer $body_length
 * @property integer $clothes_length
 * @property integer $body_sleeve
 * @property integer $clothes_sleeve
 * @property integer $body_pantslong
 * @property integer $clothes_pantslong
 * @property integer $addtime
 * @property integer $updatetime
 */
class UserBody extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_body';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_uid, height, weight, unit, body_shoulder, clothes_shoulder, body_bust, clothes_bust, body_waistline, clothes_waistline, body_hips, clothes_hips, body_length, clothes_length, body_sleeve, clothes_sleeve, body_pantslong, clothes_pantslong, addtime, updatetime', 'required'),
			array('uid, create_uid, height, weight, body_shoulder, clothes_shoulder, body_bust, clothes_bust, body_waistline, clothes_waistline, body_hips, clothes_hips, body_length, clothes_length, body_sleeve, clothes_sleeve, body_pantslong, clothes_pantslong, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('unit', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('body_id, uid, create_uid, height, weight, unit, body_shoulder, clothes_shoulder, body_bust, clothes_bust, body_waistline, clothes_waistline, body_hips, clothes_hips, body_length, clothes_length, body_sleeve, clothes_sleeve, body_pantslong, clothes_pantslong, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'body_id' => 'Body',
			'uid' => '使用者UID',
			'create_uid' => '创建者UID',
			'height' => '身高CM',
			'weight' => '体重，KG',
			'unit' => '0厘米,1尺寸',
			'body_shoulder' => '身体肩宽',
			'clothes_shoulder' => '衣服肩宽',
			'body_bust' => '胸围',
			'clothes_bust' => 'Clothes Bust',
			'body_waistline' => '腰围',
			'clothes_waistline' => 'Clothes Waistline',
			'body_hips' => '臀围',
			'clothes_hips' => 'Clothes Hips',
			'body_length' => '衣长',
			'clothes_length' => 'Clothes Length',
			'body_sleeve' => '袖长',
			'clothes_sleeve' => 'Clothes Sleeve',
			'body_pantslong' => '裤长',
			'clothes_pantslong' => 'Clothes Pantslong',
			'addtime' => 'Addtime',
			'updatetime' => 'Updatetime',
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

		$criteria->compare('body_id',$this->body_id);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('body_shoulder',$this->body_shoulder);
		$criteria->compare('clothes_shoulder',$this->clothes_shoulder);
		$criteria->compare('body_bust',$this->body_bust);
		$criteria->compare('clothes_bust',$this->clothes_bust);
		$criteria->compare('body_waistline',$this->body_waistline);
		$criteria->compare('clothes_waistline',$this->clothes_waistline);
		$criteria->compare('body_hips',$this->body_hips);
		$criteria->compare('clothes_hips',$this->clothes_hips);
		$criteria->compare('body_length',$this->body_length);
		$criteria->compare('clothes_length',$this->clothes_length);
		$criteria->compare('body_sleeve',$this->body_sleeve);
		$criteria->compare('clothes_sleeve',$this->clothes_sleeve);
		$criteria->compare('body_pantslong',$this->body_pantslong);
		$criteria->compare('clothes_pantslong',$this->clothes_pantslong);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserBody the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
