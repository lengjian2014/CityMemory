<?php

/**
 * This is the model class for table "user_authenticate".
 *
 * The followings are the available columns in table 'user_authenticate':
 * @property integer $uid
 * @property integer $is_email
 * @property integer $is_phone
 * @property integer $is_truename
 * @property integer $is_designers
 * @property integer $is_supplier
 * @property integer $is_tailor
 */
class UserAuthenticate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_authenticate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid', 'required'),
			array('uid, is_email, is_phone, is_truename, is_designers, is_supplier, is_tailor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, is_email, is_phone, is_truename, is_designers, is_supplier, is_tailor', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'is_email' => '0为未验证，1为已验证',
			'is_phone' => '0为未验证，1为已验证',
			'is_truename' => '0为未验证，1为已验证',
			'is_designers' => '设计师 0未审核,1审核中,2通过,3未通过',
			'is_supplier' => '供应商 0未审核,1审核中,2通过,3未通过',
			'is_tailor' => '裁缝 0未审核,1审核中,2通过,3未通过',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('is_email',$this->is_email);
		$criteria->compare('is_phone',$this->is_phone);
		$criteria->compare('is_truename',$this->is_truename);
		$criteria->compare('is_designers',$this->is_designers);
		$criteria->compare('is_supplier',$this->is_supplier);
		$criteria->compare('is_tailor',$this->is_tailor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserAuthenticate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
