<?php 
try{	$db = new PDO("mysql:host=localhost;dbname=forumlogin;","root","");
			//echo "Succesfuly";
}catch(PDOExpection $e){
			//echo "Fail: " . $e;
}