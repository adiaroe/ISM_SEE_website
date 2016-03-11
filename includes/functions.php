<?php
ob_start();
class Users {
	public $table_name = 'users';
	
	function __construct(){
		//database configuration
		$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'root'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'anything'; //Define database name
		
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$email,$gender,$locale,$picture){
		
		$prev_query = mysqli_query($this->connect,"SELECT * FROM ".$this->table_name." WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'") or die(mysql_error($this->connect));
		if(mysqli_num_rows($prev_query)>0){
			$update = mysqli_query($this->connect,"UPDATE $this->table_name SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'");
		}else{
			$insert = mysqli_query($this->connect,"INSERT INTO $this->table_name SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', created = '".date("Y-m-d H:i:s")."', modified = '".date("Y-m-d H:i:s")."'");
		}
		
		$query = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'");
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
function yearDropdown($startYear, $endYear, $id="year"){ 
    //start the select tag 
    echo "<select id=".$id." name=".$id.">n"; 
          
        //echo each year as an option     
        for ($i=$startYear;$i<=$endYear;$i++){ 
        echo "<option value=".$i.">".$i."</option>n";     
        } 
      
    //close the select tag 
    echo "</select>"; 
}
function redirect_to($location = NULL)
		{
			if($location!=NULL)
			{
				header("Location: {$location}");
				echo "You are being redirected to $location. If not use this link <a href='$location'>$location</a>";
				exit;
			}
		}
		function test_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;

	}

	function check_password($login_pwd, $dbpwd){
		if($login_pwd == $dbpwd)
			return true;
		else
			return false;
	}


?>