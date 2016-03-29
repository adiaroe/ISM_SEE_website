<?php
require_once("sessions.php");
require_once("config.php");
require_once("config_db.php");
require_once("includes/functions.php");
error_reporting(E_ALL & ~E_NOTICE);
if(!$fbuser){
  $fbuser = null;
  $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
  
}else{
  $user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
  $user = new Users();
  $user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$user_profile['email'],$user_profile['gender'],$user_profile['locale'],$user_profile['picture']['data']['url']);
  if(!empty($user_data)){
    
        $fb_image = $user_data['picture'];
        $fb_id = $user_data['oauth_uid'];
        $fb_fname =  $user_data['fname'];
        $fb_lname =  $user_data['lname'];
        $fb_email = $user_data['email'];
        $fb_gender = $user_data['gender'];
        $fb_locale = $user_data['locale'];
     
        
  }else{
    $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
  }
}
if(isset($fb_id)){
if($res = mysqli_query($conn,"SELECT unique_id FROM users_final")){
  while($row = mysqli_fetch_assoc($res)){
      $id = $row['unique_id'];
      if($id == $fb_id){
        $found = 1;
      }else{
        $found = 0;
      }
      $flag = $flag + $found;
    }
    
    if ($flag == 0){
      mysqli_query($conn,"INSERT INTO users_final (unique_id, fname, lname, email, gender, image) values ('$fb_id', '$fb_fname', '$fb_lname', '$fb_email', '$fb_gender', '$fb_image');");
    }
  }
  

$res1 = mysqli_query($conn,"SELECT * FROM users_final where unique_id = $fb_id");
  $row = mysqli_fetch_assoc($res1);
  $unique_id = $row['unique_id'];
  $fname = $row['fname'];
  $lname = $row['lname'];
  $fullname = $row['fname']." ".$row['lname'];
  $email = $row['email'];
  $gender = $row['gender'];
  $image = $row['image'];
  $phn = $row['phn'];
  $skype = $row['skype'];
  $branch = $row['branch'];
  $batch = $row['batch']; 
  
}
if (logged_in()) {
  $email = $_SESSION['user_email'];
  $res = mysqli_query($conn,"SELECT * FROM login_data where email = '$email'");
  if($res){
    $row = mysqli_fetch_assoc($res);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $fullname = $row['fname']." ".$row['lname'];
    $gender = $row['gender'];
    $image = $row['image'];
    $phn = $row['phn'];
    $skype = $row['skype'];
    $unique_id = $row['unique_id'];
    $branch = $row['branch'];
    $batch = $row['batch']; 
  }

}
?>