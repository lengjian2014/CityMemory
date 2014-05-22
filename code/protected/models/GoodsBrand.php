<?php

/**
 * This is the model class for table "goods_brand".
 *
 * The followings are the available columns in table 'goods_brand':
 * @property integer $brand_id
 * @property integer $uid
 * @property string $brand_name
 * @property string $brand_logo
 * @property string $brand_desc
 * @property string $site_url
 * @property integer $sort_order
 * @property integer $is_show
 */
class GoodsBrand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'goods_brand';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, brand_name, brand_logo, brand_desc, site_url', 'required'),
			array('uid, sort_order, is_show', 'numerical', 'integerOnly'=>true),
			array('brand_name', 'length', 'max'=>60),
			array('brand_logo', 'length', 'max'=>80),
			array('site_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('brand_id, uid, brand_name, brand_logo, brand_desc, site_url, sort_order, is_show', 'safe', 'on'=>'search'),
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
			'brand_id' => '自增ID号',
			'uid' => 'Uid',
			'brand_name' => '品牌名称',
			'brand_logo' => '上传的该品牌公司logo图片',
			'brand_desc' => '品牌描述',
			'site_url' => '品牌的网址',
			'sort_order' => '品牌在前台页面的显示顺序，数字越大越靠后',
			'is_show' => '该品牌是否显示，0，否；1，显示',
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

		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('brand_name',$this->brand_name,true);
		$criteria->compare('brand_logo',$this->brand_logo,true);
		$criteria->compare('brand_desc',$this->brand_desc,true);
		$criteria->compare('site_url',$this->site_url,true);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('is_show',$this->is_show);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsBrand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
