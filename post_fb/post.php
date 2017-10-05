
include('init.php');

$arr = array('message' => 'Testing Post for our new tutorial. Graph API.');

$res = $fb->post('PAGE_ID/feed/', $arr,	'ACCESS_TOKEN');
