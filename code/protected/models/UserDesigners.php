<?php

/**
 * This is the model class for table "user_designers".
 *
 * The followings are the available columns in table 'user_designers':
 * @property integer $uid
 * @property integer $joinobject
 * @property string $shopname
 * @property string $logo
 * @property string $shopclass
 * @property string $sale_category
 * @property string $description
 * @property string $truename
 * @property string $phone
 * @property string $tel
 * @property string $address
 * @property string $design_brand
 * @property string $studio
 * @property string $certificate
 * @property string $certificate_img
 * @property string $masterpiece
 * @property string $master_img
 * @property string $master_about
 * @property string $audit
 * @property string $reason
 * @property integer $addtime
 * @property integer $audittime
 * @property integer $audituid
 * @property integer $updatetime
 */
class UserDesigners extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_designers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, joinobject, shopname, logo, shopclass, sale_category, description, truename, address, certificate, certificate_img, masterpiece, master_img, master_about, addtime, updatetime', 'required'),
			array('uid, joinobject, addtime, audittime, audituid, updatetime', 'numerical', 'integerOnly'=>true),
			array('shopname, shopclass, design_brand, studio', 'length', 'max'=>150),
			array('logo, truename, certificate, certificate_img, masterpiece, master_img, reason', 'length', 'max'=>100),
			array('sale_category', 'length', 'max'=>50),
			array('description, master_about', 'length', 'max'=>250),
			array('phone', 'length', 'max'=>15),
			array('tel', 'length', 'max'=>25),
			array('address', 'length', 'max'=>200),
			array('audit', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, joinobject, shopname, logo, shopclass, sale_category, description, truename, phone, tel, address, design_brand, studio, certificate, certificate_img, masterpiece, master_img, master_about, audit, reason, addtime, audittime, audituid, updatetime', 'safe', 'on'=>'search'),
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
			'joinobject' => '是什么设计师,专业,学生,业余',
			'shopname' => 'Shopname',
			'logo' => 'Logo',
			'shopclass' => '服装定位',
			'sale_category' => '出售类目',
			'description' => 'Description',
			'truename' => 'Truename',
			'phone' => 'Phone',
			'tel' => 'Tel',
			'address' => 'Address',
			'design_brand' => '设计品牌',
			'studio' => '工作室介绍',
			'certificate' => '证书名',
			'certificate_img' => 'Certificate Img',
			'masterpiece' => '代表作名',
			'master_img' => 'Master Img',
			'master_about' => '对代表作的介绍',
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
		$criteria->compare('sale_category',$this->sale_category,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('truename',$this->truename,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('design_brand',$this->design_brand,true);
		$criteria->compare('studio',$this->studio,true);
		$criteria->compare('certificate',$this->certificate,true);
		$criteria->compare('certificate_img',$this->certificate_img,true);
		$criteria->compare('masterpiece',$this->masterpiece,true);
		$criteria->compare('master_img',$this->master_img,true);
		$criteria->compare('master_about',$this->master_about,true);
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
	 * @return UserDesigners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
