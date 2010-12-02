<?php

class CommentsPost extends CommentsAppModel {
		
	var $belongsTo = array(
		'UacProfile' => array('className' => 'Uac.UacProfile', 'foreignKey' => 'user_id')
	);
	
	var $order = array('CommentsPost.sticky DESC', 'CommentsPost.created DESC');
	
	var $validate = array(
		'body' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	
	/**
	 * 
	 * Check if post can be deleted
	 * @param int $post_id
	 * @param int $user_id
	 * @return bol
	 */
	function deletePost($post_id, $user_id) {
		
		$comment = $this->read(null, $post_id);
		
		if ($comment['CommentsPost']['user_id'] != $user_id) {
			
			return false;
			
		}
		
		$this->id = $comment['CommentsPost']['id'];
		return $this->saveField('deleted', 1);
		
	}
	
	function getRelatedTo($model, $rel_foreign_key, $options = null) {
		
		$cond = array(
			'CommentsPost.rel_foreign_key' => $rel_foreign_key,
			'CommentsPost.rel_model' => $model
		);
		
		$options['conditions'] = Set::merge($options['conditions'], $cond);
		
		return $this->find('all', $options);
		
	}
	
}

?>