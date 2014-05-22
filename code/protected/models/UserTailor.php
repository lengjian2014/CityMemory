<?php

/**
 * This is the model class for table "user_tailor".
 *
 * The followings are the available columns in table 'user_tailor':
 * @property integer $uid
 * @property integer $joinobject
 * @property string $shopname
 * @property string $logo
 * @property string $shopclass
 * @property string $services
 * @property string $process
 * @property string $description
 * @property string $truename
 * @property string $phone
 * @property string $tel
 * @property string $address
 * @property string $college
 * @property string $awards
 * @property string $experience
 * @property string $audit
 * @property string $reason
 * @property integer $addtime
 * @property integer $audittime
 * @property integer $audituid
 * @property integer $updatetime
 */
class UserTailor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_tailor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, joinobject, shopname, logo, shopclass, services, process, description, truename, address, addtime, updatetime', 'required'),
			array('uid, joinobject, addtime, audittime, audituid, updatetime', 'numerical', 'integerOnly'=>true),
			array('shopname, shopclass, college, awards', 'length', 'max'=>150),
			array('logo, truename, reason', 'length', 'max'=>100),
			array('services, process', 'length', 'max'=>50),
			array('description, experience', 'length', 'max'=>250),
			array('phone', 'length', 'max'=>15),
			array('tel', 'length', 'max'=>25),
			array('address', 'length', 'max'=>200),
			array('audit', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, joinobject, shopname, logo, shopclass, services, process, description, truename, phone, tel, address, college, awards, experience, audit, reason, addtime, audittime, audituid, updatetime', 'safe', 'on'=>'search'),
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
			'joinobject' => '是什么裁缝师,专业,学生,业余',
			'shopname' => 'Shopname',
			'logo' => 'Logo',
			'shopclass' => '制作方向,男士休闲西装,女士风衣',
			'services' => '制作服务项,裁缝',
			'process' => '制作工艺,轻材质面料,重材质面料',
			'description' => '制作室介绍',
			'truename' => 'Truename',
			'phone' => 'Phone',
			'tel' => 'Tel',
			'address' => 'Address',
			'college' => '毕业的院校',
			'awards' => '获得奖项',
			'experience' => '从业经验',
			'audit' => '0未审核,1审核中,2通过,3未通过',
			'reason' => '审核原因',
			'addtime' => 'Addtime',
			'audittime' => '审核时间',
			'audituid' => '审核人',
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
		$criteria->compare('joinobject',$this->joinobject);
		$criteria->compare('shopname',$this->shopname,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('shopclass',$this->shopclass,true);
		$criteria->compare('services',$this->services,true);
		$criteria->compare('process',$this->process,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('truename',$this->truename,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('college',$this->college,true);
		$criteria->compare('awards',$this->awards,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('audit',$this->audit,true);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('audittime',$this->audittime);
		$criteria->compare('audituid',$this->audituid);
		$criteria->compare('updatetime',$this->updatetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserTailor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
