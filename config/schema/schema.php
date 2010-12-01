<?php 
/* SVN FILE: $Id$ */
/* Planamatch schema generated on: 2010-06-13 21:06:03 : 1276459803*/
class PlanamatchSchema extends CakeSchema {
	var $name = 'Planamatch';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $comments_posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'rel_model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'rel_foreign_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'body' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	var $comments_topics = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'rel_model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'rel_foreign_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'sticky' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'closed' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
}
?>