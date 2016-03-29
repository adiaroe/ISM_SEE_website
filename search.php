<?php
require_once ("sessions.php");
include ("user_fb_login.php");
?>
<html>
<head>
<?php include ("includes/essential.php");?>
</head>
<body>
<div id="menu">
  <nav class="top-bar content_wrapper" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name text-left">
        <a href="index.php" style="background-image:url('media/images/ism_logo.png');"></a>
      </li>
      <li id="menu_college_name"><a href="index.php">Indian School of Mines</a></li>
      <li class="toggle-topbar menu-icon">
        <a href="index.php"><span></span></a>
      </li>
    </ul>
    <section id="menu_main" class="top-bar-section">
      <ul class="right">
      
        <li class="menu_item">
          <a href="index.html#" >Find Alumni<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >By Location</a>
            
            <a href="#" >By Batch</a>
            
            <a href="#" >By Education Profile</a>

            <a href="#" >By Employment</a>
            
          </div>
          
        </li>
        
        <li class="menu_item secondary">
          <a href="SEE/index.html" >SEE</a>
          
        </li>
        
        <!--<li class="menu_item">
          <a href="index.html#" >Careers<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Jobs</a>
            
            <a href="#" >Internships</a>
            
          
            
          </div>
          
        </li>-->
        
        <li class="menu_item secondary">
          <a href="#" >Events</a>
          
        </li>
        
        <li class="menu_item">
          <a href="index.html#" >More<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Chapters</a>
            
            
            
            
            
            <a href="#" >Photo Gallery</a>
            
            
          
            <a href="#" >Campus Stories</a>
            
            <a href="#" >News Letter</a>
            
            <a href="#" >Help</a>
            
          </div>
          
        </li>
        
        <!--<li class="menu_item secondary" id="menu_login">-->
        <?php if(!$fbuser && !logged_in()): ?>
        <li class="menu_item">
          <a href="#" >Login<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            <?php $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                  $output = '<a href="'.$loginUrl.'">Login Via Facebook</a>';
            echo $output;
            ?>
            
            <a href="login.php" >Login/Signup</a>
                         
          </div>
          
        </li>
        <?php endif; ?> 
        <?php if($fbuser || logged_in() ) :?>
          <li class="menu_item">
          <a href="#" ><?php echo $fname." ".$lname; ?><i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="my_acc.php" >My Account</a>
            <a href="logout.php?logout" >Logout</a>
                         
          </div>
          
        </li> 
        <?php endif; ?>
        
      </ul>
    </section>
  </nav>
</div>
<?php 
if($_GET['sub_filter']){
if($_GET['batch']!='select'){
$batch = $_GET['batch'];
//echo $batch.'<br>';
}
if($_GET['branch']!='select'){
$branch = $_GET['branch'];
//echo $branch.'<br>';
}
if (isset($branch) || isset($batch)){
$query = "SELECT fname, lname, gender, batch, branch, unique_id, image FROM users_final where branch = 'EI' and batch = '2017' union SELECT fname, lname, gender, batch, branch, unique_id,image FROM login_data where branch = 'EI' and batch = '2017' order by fname";
if($res = mysqli_query($conn,$query)){
		while($row = mysqli_fetch_assoc($res)){
			$fname = $row['fname'];
			$lname = $row['lname'];
			$gender = $row['gender'];
			$batch = $row['batch'];
			$branch = $row['branch'];
			$id = $row['unique_id'];
			$image = $row['image'];
			$ctr++;
?>
<ul class="list-group1" id="contact-list">
                    <li class="list-group1-item">
                        <div class="col-xs-12 col-sm-3">
                            <img alt="User Pic" <?php if(isset($image))?> src="<?php echo $image; ?>" class="img-circle img-responsive" <?php if(!isset($image)):?> src ="https://cdn3.iconfinder.com/data/icons/users/100/user_male_1-512.png" class="img-circle img-responsive"><br><b>EDIT</b><?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name1"><?php echo $fname." ".$lname;?></span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info1" data-toggle="tooltip" title1="5842 Hillcrest Rd"></span>
                            <span class="visible-xs1"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>
                            <span class="glyphicon glyphicon-earphone text-muted c-info1" data-toggle="tooltip" title1="(870) 288-4149"></span>
                            <span class="visible-xs1"> <span class="text-muted">(870) 288-4149</span><br/></span>
                            <span class="fa fa-comments text-muted c-info1" data-toggle="tooltip" title1="scott.stevens@example.com"></span>
                            <span class="visible-xs1"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    </ul>

<?php
		}
	}



$query = "SELECT fname, lname, gender, batch, branch, unique_id FROM users_final where (branch = '$branch' or batch = '$batch') and not (branch = '$branch' and batch = '$batch') union SELECT fname, lname, gender, batch, branch, unique_id FROM login_data where (branch = '$branch' or batch = '$batch') and not (branch = '$branch' and batch = '$batch') order by fname";
if($res = mysqli_query($conn,$query)){
		while($row = mysqli_fetch_assoc($res)){
			$fname = $row['fname'];
			$lname = $row['lname'];
			$gender = $row['gender'];
			$batch = $row['batch'];
			$id = $row['unique_id'];
			$str =  $fname.'<br>'.$lname.'<br>'.$gender.'<br>'.$batch.'<br>';
			echo $str;
			$ctr++;
			?>
		    <a href="acc.php?id=<?php echo $id;?>"><?php echo $fname.'<br>'?></a>
<?php
		}
	}
}
}
if($_GET['sub_search']){
	$search = strtolower($_GET['search']);
  $query = "SELECT fname,lname,unique_id FROM users_final union SELECT fname,lname,unique_id FROM login_data";
  if($res = mysqli_query($conn,$query)){
    while($row = mysqli_fetch_assoc($res)){
      $fname = strtolower($row['fname']);
      $lname = strtolower($row['lname']);
      $id = $row['unique_id'];
      $db_str = " ".$fname.$lname;
      if(strpos($db_str, $search)!=''){
        $query_p = "SELECT fname,lname,image,gender FROM users_final WHERE unique_id='$id' union SELECT fname,lname,image,gender FROM login_data WHERE unique_id='$id' order by fname";
        if ($res_p = mysqli_query($conn,$query_p)) {
          while ($row_p = mysqli_fetch_assoc($res_p)) {
            $fname = $row_p['fname'];
            $lname = $row_p['lname'];
            $image = $row_p['image'];
            $gender = $row_p['gender'];
            $str = $fname.'<br>'.$lname.'<br>'.$gender.'<br>'.$image.'<br>';
            echo $str;
            $ctr++;
            ?>
            <a href="acc.php?id=<?php echo $id;?>"><?php echo $fname.'<br>'?></a>
            <?php
          }
        }
      }
    }
  }
}
if ($ctr != 0) {
	echo "<br><br> No. of Results = ".$ctr;
}else{echo "No Results Found!!!!";}
?>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
</body>
</html>