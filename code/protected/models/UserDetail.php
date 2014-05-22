<?php

/**
 * This is the model class for table "user_detail".
 *
 * The followings are the available columns in table 'user_detail':
 * @property integer $uid
 * @property string $truename
 * @property integer $sex
 * @property string $picture
 * @property string $carid
 * @property string $carimg
 * @property string $carimg1
 * @property string $carimg2
 * @property string $birth
 * @property integer $location
 * @property integer $hometown
 * @property integer $addtime
 * @property integer $updatetime
 */
class UserDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, truename, picture, carid, birth, location, addtime, updatetime', 'required'),
			array('uid, sex, location, hometown, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('truename', 'length', 'max'=>100),
			array('picture, carimg, carimg1, carimg2', 'length', 'max'=>150),
			array('carid', 'length', 'max'=>25),
			array('birth', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, truename, sex, picture, carid, carimg, carimg1, carimg2, birth, location, hometown, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'truename' => '真实姓名',
			'sex' => '0女,1男',
			'picture' => '头像',
			'carid' => '身份证',
			'carimg' => '省份证正面照片',
			'carimg1' => '省份证背面',
			'carimg2' => '手持省份证',
			'birth' => '2013-10-10',
			'location' => '居住地',
			'hometown' => '家乡',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('truename',$this->truename,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('carid',$this->carid,true);
		$criteria->compare('carimg',$this->carimg,true);
		$criteria->compare('carimg1',$this->carimg1,true);
		$criteria->compare('carimg2',$this->carimg2,true);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('location',$this->location);
		$criteria->compare('hometown',$this->hometown);
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
	 * @return UserDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
