<?php

/**
 * This is the model class for table "user_address".
 *
 * The followings are the available columns in table 'user_address':
 * @property string $address_id
 * @property string $address_name
 * @property string $uid
 * @property string $consignee
 * @property string $email
 * @property integer $country
 * @property integer $province
 * @property integer $city
 * @property integer $district
 * @property string $address
 * @property string $zipcode
 * @property string $tel
 * @property string $mobile
 * @property string $sign_building
 * @property string $best_time
 */
class UserAddress extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address_name, consignee, email, address, zipcode, tel, mobile, sign_building, best_time', 'required'),
			array('country, province, city, district', 'numerical', 'integerOnly'=>true),
			array('address_name', 'length', 'max'=>50),
			array('uid', 'length', 'max'=>11),
			array('consignee, email, zipcode, tel, mobile', 'length', 'max'=>60),
			array('address, sign_building, best_time', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('address_id, address_name, uid, consignee, email, country, province, city, district, address, zipcode, tel, mobile, sign_building, best_time', 'safe', 'on'=>'search'),
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
			'address_id' => 'Address',
			'address_name' => 'Address Name',
			'uid' => '用户表中的流水号',
			'consignee' => '收货人的名字',
			'email' => '收货人的email',
			'country' => '收货人的国家',
			'province' => '收货人的省份',
			'city' => '收货人的城市',
			'district' => '收货人的地区',
			'address' => '收货人的详细地址',
			'zipcode' => '收货人的邮编',
			'tel' => '收货人的电话',
			'mobile' => '收货人的手机',
			'sign_building' => '收货地址的标志性建筑名',
			'best_time' => '收货人的最佳收货时间',
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

		$criteria->compare('address_id',$this->address_id,true);
		$criteria->compare('address_name',$this->address_name,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('consignee',$this->consignee,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('district',$this->district);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('sign_building',$this->sign_building,true);
		$criteria->compare('best_time',$this->best_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserAddress the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
