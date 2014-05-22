<?php

/**
 * This is the model class for table "goods".
 *
 * The followings are the available columns in table 'goods':
 * @property string $goods_id
 * @property integer $uid
 * @property integer $cat_id
 * @property string $goods_name
 * @property string $goods_thumb
 * @property integer $brand_id
 * @property string $click_count
 * @property string $buy_count
 * @property string $promote_price
 */
class Goods extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, goods_name, goods_thumb', 'required'),
			array('uid, cat_id, brand_id', 'numerical', 'integerOnly'=>true),
			array('goods_name', 'length', 'max'=>120),
			array('goods_thumb', 'length', 'max'=>255),
			array('click_count, buy_count, promote_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('goods_id, uid, cat_id, goods_name, goods_thumb, brand_id, click_count, buy_count, promote_price', 'safe', 'on'=>'search'),
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
			'goods_id' => '商品的自增id',
			'uid' => '所属用户',
			'cat_id' => '商品所属商品分类id，取值ecs_category的cat_id',
			'goods_name' => '商品的名称',
			'goods_thumb' => '商品在前台显示的微缩图片，如在分类筛选时显示的小图片',
			'brand_id' => '品牌id，取值于ecs_brand 的brand_id',
			'click_count' => '商品点击数',
			'buy_count' => '商品已卖数',
			'promote_price' => '当前价格',
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

		$criteria->compare('goods_id',$this->goods_id,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('goods_thumb',$this->goods_thumb,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('click_count',$this->click_count,true);
		$criteria->compare('buy_count',$this->buy_count,true);
		$criteria->compare('promote_price',$this->promote_price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Goods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
