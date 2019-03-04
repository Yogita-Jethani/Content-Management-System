<?php
include_once("classes/Database.class.php");
include_once("classes/Posts.class.php");

$db = new Database();
$conn = $db->getConnection();
$post = new Posts($conn);


$array = array("post_category_id"=>90, "post_title"=>"Some New Post Title","post_body"=>"<b>My Contents!!!!!</b><b>Added new Line!</b>");
//$post->createPost($array);
//$post->updatePost($array,"post_id=3");



echo $_SERVER['SERVER_ADDR'];// server address of the web site
echo $_SERVER['HTTP_USER_AGENT'];// whole information like os 
echo $_SERVER['REMOTE_ADDR']; //who is operating write now tht pc ip address

//post_per_page = 5;
//start 

?>
