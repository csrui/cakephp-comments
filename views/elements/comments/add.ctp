<?php

	echo $this->element('user_avatar', array('profile' => $uac->get('UacProfile')));

	echo $this->Form->create('CommentsPost', array('url' => array('plugin' => 'comments', 'controller' => 'comments_posts', 'action' => 'add')));
	echo $this->Form->input('CommentsPost.body', array('label' => 'Comment', 'type' => 'textarea', 'rows' => 2));
	echo $this->Form->hidden('CommentsPost.rel_model', array('value' => (empty($rel_model)) ? $this->params['models'][0] : $rel_model));
	echo $this->Form->hidden('CommentsPost.rel_foreign_key', array('value' => $rel_foreign_key));
	
	if (isset($can_announce) && ($can_announce == true)) {
		echo $this->Form->input('CommentsPost.sticky');
	}
	
	echo $this->Form->end('Post');

?>