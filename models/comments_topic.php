<?php

class CommentsTopic extends CommentsAppModel {
	
	var $hasMany = array('CommentsPost' => array(
		'className' => 'Comments.CommentsPost',
		'conditions' => array('CommentsPost.rel_model' => 'CommentsTopic'),
		'foreignKey' => 'rel_foreign_key',
		'order' => 'CommentsPost.created DESC'
	));
	
	var $belongsTo = array('UaUser' => array('className' => 'Ua.UaUser', 'foreignKey' => 'user_id'));
	
	var $order = array(
		'CommentsTopic.sticky DESC',
		'CommentsTopic.modified DESC'
	);
	
}

?>