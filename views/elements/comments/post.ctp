<?php 

	$classes = array('comments-post');
	
	if (strtotime($uac->get('UacUser.last_login')) <= strtotime($post['CommentsPost']['created'])) {
		$classes[] = 'updated';
	}
	
	if ($post['CommentsPost']['sticky'] == 1) {
		$classes[] = 'sticky';
	}
	
?>
<?php if ($post['CommentsPost']['deleted'] == 0): ?>

	<div class="<?php echo implode(' ', $classes) ?>">

		<span class="timestamp"><?php echo $time->niceShort($post['CommentsPost']['created']) ?></span>
		
		<?php if ($uac->get('UacProfile.id') == $post['CommentsPost']['user_id']): ?>
			<div class="actions">
				<ul>
					<li><?php echo $this->Html->image('delete.png', array('url' => array('plugin' => 'comments', 'controller' => 'comments_posts', 'action' => 'delete', $post['CommentsPost']['id']), 'title' => __('Delete comment', true))) ?></li>
				</ul>
			</div>
		<?php endif; ?>
	
	
		<?php echo $this->element('user_avatar', array('profile' => $post['UacProfile'], 'avatar_size' => 'tiny')) ?> 
		
		<span class="body"><?php echo $post['CommentsPost']['body'] ?></span>
		
	</div>

<?php else: ?>

	<div class="comments-post deleted">
	
		<span class="timestamp"><?php echo $time->niceShort($post['CommentsPost']['created']) ?></span>
	
		<?php echo $this->element('user_avatar', array('profile' => $post['UacProfile'], 'avatar_size' => 'tiny')) ?> 
	
		<span class="body"><?php __('comment deleted by the author') ?></span>
	
	</div>

<?php endif; ?>