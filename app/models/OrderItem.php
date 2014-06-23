<?php

class OrderItem extends BaseModel {

	protected $table = 'order_items';

	public static $relationsData = array(
		'order' => array(self::BELONGS_TO, 'Order')
		);

}