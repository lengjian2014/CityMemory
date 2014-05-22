<?php

/**
 * This is the model class for table "user_style".
 *
 * The followings are the available columns in table 'user_style':
 * @property integer $sid
 * @property integer $uid
 * @property integer $style_id
 * @property integer $cat_id
 * @property string $title
 * @property string $fabric
 * @property string $pop_elements
 * @property string $color_id
 * @property string $texture
 * @property string $img
 * @property string $keywords
 * @property string $description
 * @property string $price
 * @property string $now_price
 * @property string $material_price
 * @property integer $is_delete
 * @property integer $is_promote
 * @property string $promote_start_date
 * @property string $promote_end_date
 * @property integer $production_time
 * @property string $seller_note
 * @property integer $is_buy
 * @property string $buy_price
 * @property integer $starttime
 * @property integer $endtime
 * @property integer $addtime
 * @property integer $updatetime
 */
class UserStyle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_style';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, style_id, cat_id, title, fabric, pop_elements, color_id, texture, img, keywords, description, price, now_price, material_price, seller_note, buy_price, addtime, updatetime', 'required'),
			array('uid, style_id, cat_id, is_delete, is_promote, production_time, is_buy, starttime, endtime, addtime, updatetime', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('fabric, pop_elements, img, keywords, material_price', 'length', 'max'=>250),
			array('color_id, texture', 'length', 'max'=>50),
			array('price, now_price', 'length', 'max'=>10),
			array('promote_start_date, promote_end_date', 'length', 'max'=>11),
			array('seller_note', 'length', 'max'=>255),
			array('buy_price', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sid, uid, style_id, cat_id, title, fabric, pop_elements, color_id, texture, img, keywords, description, price, now_price, material_price, is_delete, is_promote, promote_start_date, promote_end_date, production_time, seller_note, is_buy, buy_price, starttime, endtime, addtime, updatetime', 'safe', 'on'=>'search'),
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
			'sid' => 'Sid',
			'uid' => 'Uid',
			'style_id' => '款式ID',
			'cat_id' => '所属分类',
			'title' => '款式名称',
			'fabric' => '结构，通常指衣服的外形框架 json数据',
			'pop_elements' => '流行元素，通常指衣服的图案、颜色、搭配等等json数据',
			'color_id' => '颜色 101,111',
			'texture' => '质地，通常指所选用的面料类型;复选面料表 1011,11,12',
			'img' => 'Img',
			'keywords' => '关键字，分类，样式，颜色等元素构成',
			'description' => '描述',
			'price' => '原价格',
			'now_price' => '现价格',
			'material_price' => '原材料价格,json数据',
			'is_delete' => '商品是否已经删除，0，否；1，已删除',
			'is_promote' => '是否特价促销；0，否；1，是',
			'promote_start_date' => '促销价格开始日期',
			'promote_end_date' => '促销价结束日期',
			'production_time' => '制作需要时间',
			'seller_note' => '商品的商家备注，仅商家可见',
			'is_buy' => '0免费获取，1付费获取，2自己发布',
			'buy_price' => '付费金额',
			'starttime' => '使用权开始时间',
			'endtime' => '使用权结束时间',
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

		$criteria->compare('sid',$this->sid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('style_id',$this->style_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fabric',$this->fabric,true);
		$criteria->compare('pop_elements',$this->pop_elements,true);
		$criteria->compare('color_id',$this->color_id,true);
		$criteria->compare('texture',$this->texture,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('now_price',$this->now_price,true);
		$criteria->compare('material_price',$this->material_price,true);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('is_promote',$this->is_promote);
		$criteria->compare('promote_start_date',$this->promote_start_date,true);
		$criteria->compare('promote_end_date',$this->promote_end_date,true);
		$criteria->compare('production_time',$this->production_time);
		$criteria->compare('seller_note',$this->seller_note,true);
		$criteria->compare('is_buy',$this->is_buy);
		$criteria->compare('buy_price',$this->buy_price,true);
		$criteria->compare('starttime',$this->starttime);
		$criteria->compare('endtime',$this->endtime);
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
	 * @return UserStyle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
