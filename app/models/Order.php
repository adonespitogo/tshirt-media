<?php

class Order extends BaseModel {

	protected $table = 'orders';

	public static $relationsData = array(
		'items' => array(self::HAS_MANY, 'OrderItem')
		);

}