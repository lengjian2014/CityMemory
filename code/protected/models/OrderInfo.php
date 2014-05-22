<?php

/**
 * This is the model class for table "order_info".
 *
 * The followings are the available columns in table 'order_info':
 * @property string $order_id
 * @property integer $uid
 * @property integer $product_id
 * @property integer $order_status
 * @property integer $shipping_status
 * @property integer $pay_status
 * @property integer $address_id
 * @property string $postscript
 * @property integer $shipping_id
 * @property integer $pay_id
 * @property string $how_surplus
 * @property string $pack_name
 * @property string $goods_amount
 * @property string $shipping_fee
 * @property string $insure_fee
 * @property string $pay_fee
 * @property string $pack_fee
 * @property string $money_paid
 * @property string $surplus
 * @property string $integral
 * @property string $integral_money
 * @property string $order_amount
 * @property string $referer
 * @property string $add_time
 * @property string $confirm_time
 * @property string $pay_time
 * @property string $shipping_time
 * @property integer $pack_id
 * @property string $invoice_no
 * @property integer $extension_id
 * @property string $to_buyer
 * @property string $pay_note
 * @property integer $is_separate
 */
class OrderInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, address_id, postscript, how_surplus, pack_name, referer, invoice_no, to_buyer, pay_note', 'required'),
			array('uid, product_id, order_status, shipping_status, pay_status, address_id, shipping_id, pay_id, pack_id, extension_id, is_separate', 'numerical', 'integerOnly'=>true),
			array('postscript, referer, to_buyer, pay_note', 'length', 'max'=>255),
			array('how_surplus, pack_name', 'length', 'max'=>120),
			array('goods_amount, shipping_fee, insure_fee, pay_fee, pack_fee, money_paid, surplus, integral, integral_money, order_amount, add_time, confirm_time, pay_time, shipping_time', 'length', 'max'=>10),
			array('invoice_no', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('order_id, uid, product_id, order_status, shipping_status, pay_status, address_id, postscript, shipping_id, pay_id, how_surplus, pack_name, goods_amount, shipping_fee, insure_fee, pay_fee, pack_fee, money_paid, surplus, integral, integral_money, order_amount, referer, add_time, confirm_time, pay_time, shipping_time, pack_id, invoice_no, extension_id, to_buyer, pay_note, is_separate', 'safe', 'on'=>'search'),
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
			'order_id' => '订单详细信息自增id',
			'uid' => '用户id，同users的uid',
			'product_id' => '商品ID',
			'order_status' => '订单状态。0，未确认；1，已确认；2，已取消；3，无效；4，退货；',
			'shipping_status' => '商品配送情况，0，未发货；1，已发货；2，已收货；3，备货中',
			'pay_status' => '支付状态；0，未付款；1，付款中；2，已付款',
			'address_id' => 'Address',
			'postscript' => '订单附言，由用户提交订单前填写',
			'shipping_id' => '用户选择的配送方式id，取值表ecs_shipping',
			'pay_id' => '用户选择的支付方式的id，取值表ecs_payment',
			'how_surplus' => '根据字段猜测应该是余额处理方式，程序未作这部分实现',
			'pack_name' => '包装名称，取值表ecs_pack',
			'goods_amount' => '商品总金额',
			'shipping_fee' => '配送费用',
			'insure_fee' => '保价费用',
			'pay_fee' => '支付费用,跟支付方式的配置相关，取值表ecs_payment',
			'pack_fee' => '包装费用，取值表取值表ecs_pack',
			'money_paid' => '已付款金额',
			'surplus' => '该订单使用余额的数量，取用户设定余额，用户可用余额，订单金额中最小者',
			'integral' => '使用的积分的数量，取用户使用积分，商品可用积分，用户拥有积分中最小者',
			'integral_money' => '使用积分金额',
			'order_amount' => '应付款金额',
			'referer' => '订单的来源页面',
			'add_time' => '订单生成时间',
			'confirm_time' => '订单确认时间',
			'pay_time' => '订单支付时间',
			'shipping_time' => '订单配送时间',
			'pack_id' => '包装id，取值取值表ecs_pack',
			'invoice_no' => '发货单号，发货时填写，可在订单查询查看',
			'extension_id' => '通过活动购买的物品的id，取值ecs_goods_activity；如果是正常普通商品，该处为0',
			'to_buyer' => '商家给客户的留言,当该字段有值时可以在订单查询看到',
			'pay_note' => '付款备注，在订单管理里编辑修改',
			'is_separate' => '0，未分成或等待分成；1，已分成；2，取消分成；',
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

		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('order_status',$this->order_status);
		$criteria->compare('shipping_status',$this->shipping_status);
		$criteria->compare('pay_status',$this->pay_status);
		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('postscript',$this->postscript,true);
		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('pay_id',$this->pay_id);
		$criteria->compare('how_surplus',$this->how_surplus,true);
		$criteria->compare('pack_name',$this->pack_name,true);
		$criteria->compare('goods_amount',$this->goods_amount,true);
		$criteria->compare('shipping_fee',$this->shipping_fee,true);
		$criteria->compare('insure_fee',$this->insure_fee,true);
		$criteria->compare('pay_fee',$this->pay_fee,true);
		$criteria->compare('pack_fee',$this->pack_fee,true);
		$criteria->compare('money_paid',$this->money_paid,true);
		$criteria->compare('surplus',$this->surplus,true);
		$criteria->compare('integral',$this->integral,true);
		$criteria->compare('integral_money',$this->integral_money,true);
		$criteria->compare('order_amount',$this->order_amount,true);
		$criteria->compare('referer',$this->referer,true);
		$criteria->compare('add_time',$this->add_time,true);
		$criteria->compare('confirm_time',$this->confirm_time,true);
		$criteria->compare('pay_time',$this->pay_time,true);
		$criteria->compare('shipping_time',$this->shipping_time,true);
		$criteria->compare('pack_id',$this->pack_id);
		$criteria->compare('invoice_no',$this->invoice_no,true);
		$criteria->compare('extension_id',$this->extension_id);
		$criteria->compare('to_buyer',$this->to_buyer,true);
		$criteria->compare('pay_note',$this->pay_note,true);
		$criteria->compare('is_separate',$this->is_separate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
