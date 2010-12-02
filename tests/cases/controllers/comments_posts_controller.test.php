<?php
/* comments_posts Test cases generated on: 2010-12-01 17:12:51 : 1291225371*/
App::import('controller', 'Comments.CommentsPosts');

/*
class TestCommentsPostsController extends CommentsPosts {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}
*/

class CommentsPostsControllerTestCase extends CakeTestCase {

	function startTest() {
		echo '<h1>Starting Test Case</h1>';
		#$this->comments_posts =& new TestCommentsPostsController();
		#$this->comments_posts->constructClasses();
	}

	function endTest() {
		#unset($this->comments_posts);
		ClassRegistry::flush();
	}
	
	
	function testIndex() {
		$result = $this->testAction('/comments/comments_posts/add');
		debug($result);
	}
	
	function testIndexPostFixturized() {
		
		$data = array('CommentPost' => array(
			'user_id' => 1,
			'rel_model' => 'testCases',
			'rel_foreign_key' => 1, 
			'body' => 'this is a test message'
		));
		$result = $this->testAction('/comments/comments_posts/add',
			array('fixturize' => true, 'data' => $data, 'method' => 'post'));

		debug($result);
		
	}

}
?>