<?php
require_once "facebook.php";
 
$app_id = "597766673589432";
$app_secret = "504da90df3de81b67e8ae61aabab8b2a";
$config['appbaseurl'] = "http://lebappsonline.com/dev01/bbac/mobile/";

// Init facebook api.
$facebook = new Facebook(array(
        'appId' => $app_id,
        'secret' => $app_secret,
        'cookie' => true
));

$user = $facebook->getUser();

$uid = $user;

 
// Get the url to redirect for login to facebook
// and request permission to write on the user's wall.
$login_url = $facebook->getLoginUrl(
    array('scope' => 'email,user_birthday,publish_stream,status_update,user_work_history,publish_actions, publish_stream, offline_access,user_likes
	')
);
 
// If not authenticated, redirect to the facebook login dialog.
// The $login_url will take care of redirecting back to us
// after successful login.
if (! $facebook->getUser()) {
    echo <<< EOT
	
<script type="text/javascript">
top.location.href = "$login_url";
</script>;

EOT;
 
    exit;
}
 
 $count = 0;	
	
	
	
	if(!$user)
		{
			try
			{
				$userInfo = $facebook->api('/me');
		
				if(isset($userInfo['id']))
					$user = $userInfo['id'];
			}
				catch (FacebookApiException $e) 
				{       
					$user = null;
				}
		}
		
    if ($user) 
	{
      try 
	  {
	  
      	$params['access_token']=$facebook->getAccessToken();
		
				if(!$userInfo)
					$userInfo = $facebook->api('/'.$user);        
		
      } 
	  catch (FacebookApiException $e) 
	  {  
			$user = null;
      }
    }

    if (!$user) {
        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        exit;
    }
   
    $userInfo = $facebook->api("/".$user);
    
    $userLikes = $facebook->api("/".$user."/likes");

    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }

	//$_SESSION['uid'] = $user;
    
    $like_size = sizeof ($userLikes['data']);
    $_SESSION['found'] = 0;
    for ($i = 0; $i <= $like_size; $i++)
    {
    	if($userLikes['data'][$i]['id'] == '326773987368125')
        {
        	$_SESSION['found'] = 1;
        }
    }
    
    if($_SESSION['found'] == 0)
    {
    	echo "<script>window.location = 'like.php'; </script>";
        exit;
    }
    

$_SESSION['uid'] = $userInfo['id'];
$uname = $userInfo['name'];
$ufirst = $userInfo['first_name'];
$ulast = $userInfo['last_name'];
$uemail = $userInfo['email'];
$_SESSION['dob'] = $dob = $userInfo['birthday'];
$_SESSION['gender'] = $userInfo['gender'];
?>