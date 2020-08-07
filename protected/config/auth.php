<?php
return array(
	'guest' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Guest',
		'bizRule' => null,
		'data' => null
	),
	'1' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'User',
		'children' => array(
			'guest', // унаследуемся от гостя - продавец
		),
		'bizRule' => 'return Yii::app()->user->id!=$params["id"]->id;',
		'data' => null
	),
	'2' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Moderator',
		'children' => array(
			'user',          // позволим модератору всё, что позволено пользователю  - директор магазина
		),
		'bizRule' => null,
		'data' => null
	),
	'3' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Admin',
		'children' => array(
			'moderator',         // позволим админу всё, что позволено модератору - агент
		),
		'bizRule' => null,
		'data' => null
	),
	'4' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Topadmin',
		'children' => array(
			'Admin',         // позволим админу всё, что позволено модератору - низший админ
		),
		'bizRule' => null,
		'data' => null
	),
	'5' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Gadmin',
		'children' => array(
			'Topadmin',         // позволим админу всё, что позволено модератору - высший админ
		),
		'bizRule' => null,
		'data' => null
	),
);