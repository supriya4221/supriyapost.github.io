
session_start();

require_once('Facebook/autoload.php');

$fb = new Facebook\Facebook([
'app_id' => 'APP_ID',
'app_secret' => 'APP_SECRET',
'default_graph_version' => 'v2.9',
]);
