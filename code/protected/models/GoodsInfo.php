<?php

/**
 * This is the model class for table "goods_info".
 *
 * The followings are the available columns in table 'goods_info':
 * @property integer $goods_id
 * @property string $goods_name_style
 * @property integer $goods_number
 * @property string $goods_weight
 * @property string $shop_price
 * @property string $promote_price
 * @property string $promote_start_date
 * @property string $promote_end_date
 * @property integer $warn_number
 * @property string $keywords
 * @property string $goods_brief
 * @property string $goods_desc
 * @property string $goods_img
 * @property string $original_img
 * @property integer $is_on_sale
 * @property integer $is_alone_sale
 * @property string $integral
 * @property string $add_time
 * @property integer $sort_order
 * @property integer $is_delete
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_promote
 * @property string $last_update
 * @property integer $goods_type
 * @property string $seller_note
 */
class GoodsInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'goods_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, keywords, goods_brief, goods_desc, goods_img, original_img, seller_note', 'required'),
			array('goods_id, goods_number, warn_number, is_on_sale, is_alone_sale, sort_order, is_delete, is_best, is_new, is_hot, is_promote, goods_type', 'numerical', 'integerOnly'=>true),
			array('goods_name_style', 'length', 'max'=>60),
			array('goods_weight, shop_price, promote_price, integral, add_time, last_update', 'length', 'max'=>10),
			array('promote_start_date, promote_end_date', 'length', 'max'=>11),
			array('keywords, goods_brief, goods_img, original_img, seller_note', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('goods_id, goods_name_style, goods_number, goods_weight, shop_price, promote_price, promote_start_date, promote_end_date, warn_number, keywords, goods_brief, goods_desc, goods_img, original_img, is_on_sale, is_alone_sale, integral, add_time, sort_order, is_delete, is_best, is_new, is_hot, is_promote, last_update, goods_type, seller_note', 'safe', 'on'=>'search'),
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
			'goods_id' => 'Goods',
			'goods_name_style' => '商品名称显示的样式；包括颜色和字体样式；格式如#ff00ff+strong',
			'goods_number' => '商品库存数量',
			'goods_weight' => '商品的重量，以千克为单位',
			'shop_price' => '本店售价',
			'promote_price' => '促销价格',
			'promote_start_date' => '促销价格开始日期',
			'promote_end_date' => '促销价结束日期',
			'warn_number' => '商品报警数量',
			'keywords' => '商品关键字，放在商品页的关键字中，为搜索引擎收录用',
			'goods_brief' => '商品的简短描述',
			'goods_desc' => '商品的详细描述',
			'goods_img' => '商品的实际大小图片，如进入该商品页时介绍商品属性所显示的大图片',
			'original_img' => '商品的原始图片',
			'is_on_sale' => '该商品是否开放销售，1，是；0，否',
			'is_alone_sale' => '是否能单独销售，1，是；0，否；如果不能单独销售，则只能作为某商品的配件或者赠品销售',
			'integral' => '购买该商品可以使用的积分数量，估计应该是用积分代替金额消费；但程序好像还没有实现该功能',
			'add_time' => '商品的添加时间',
			'sort_order' => '应该是商品的显示顺序，不过该版程序中没实现该功能',
			'is_delete' => '商品是否已经删除，0，否；1，已删除',
			'is_best' => '是否是精品；0，否；1，是',
			'is_new' => '是否是新品；0，否；1，是',
			'is_hot' => '是否热销，0，否；1，是',
			'is_promote' => '是否特价促销；0，否；1，是',
			'last_update' => '最近一次更新商品配置的时间',
			'goods_type' => '商品所属类型id，取值表goods_type的cat_id',
			'seller_note' => '商品的商家备注，仅商家可见',
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

		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_name_style',$this->goods_name_style,true);
		$criteria->compare('goods_number',$this->goods_number);
		$criteria->compare('goods_weight',$this->goods_weight,true);
		$criteria->compare('shop_price',$this->shop_price,true);
		$criteria->compare('promote_price',$this->promote_price,true);
		$criteria->compare('promote_start_date',$this->promote_start_date,true);
		$criteria->compare('promote_end_date',$this->promote_end_date,true);
		$criteria->compare('warn_number',$this->warn_number);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('goods_brief',$this->goods_brief,true);
		$criteria->compare('goods_desc',$this->goods_desc,true);
		$criteria->compare('goods_img',$this->goods_img,true);
		$criteria->compare('original_img',$this->original_img,true);
		$criteria->compare('is_on_sale',$this->is_on_sale);
		$criteria->compare('is_alone_sale',$this->is_alone_sale);
		$criteria->compare('integral',$this->integral,true);
		$criteria->compare('add_time',$this->add_time,true);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('is_best',$this->is_best);
		$criteria->compare('is_new',$this->is_new);
		$criteria->compare('is_hot',$this->is_hot);
		$criteria->compare('is_promote',$this->is_promote);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('goods_type',$this->goods_type);
		$criteria->compare('seller_note',$this->seller_note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
