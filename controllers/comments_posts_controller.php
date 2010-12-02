<?php

class CommentsPostsController extends CommentsAppController {
	
	
	function add() {
		
		if (!empty($this->data)) {
						
			$this->data['CommentsPost']['user_id'] = $this->Auth->user('id');
			
			$this->CommentsPost->create($this->data);
			if ($this->CommentsPost->save($this->data)) {
				
				$this->Session->setFlash(__('Comment saved', true));
				$this->redirect($this->referer());
				return true;
				
			}
			
		}
		
		$this->Session->setFlash(__('Unable to save your comment', true));
		$this->redirect($this->referer());
		return false;
		
	}
	
	/**
	 * 
	 * Delete a comment by setting the deleted field to 1
	 * @param int $id
	 */
	function delete($id) {
		
		if ($this->CommentsPost->deletePost($id, $this->Auth->user('id'))) {
			
			$this->Session->setFlash(__('Comment deleted', true));
			$this->redirect($this->referer());
			
		} else {
			
			$this->Session->setFlash(__('You cannot delete that comment', true));
			$this->redirect($this->referer());
			
		}
		
	}	
	
	#TODO admin_delete
	#TODO admin_index	
	
}

?>