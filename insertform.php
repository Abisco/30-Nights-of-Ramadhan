<?php
include("config30nights.php");

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['piece']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
  echo "No arguments Provided!";
  return false;
   }

$author = $_POST['name'];
$author = mysql_real_escape_string($author);

$email = $_POST['email'];
$email = mysql_real_escape_string($email);

$type = $_POST['type'];
$type = mysql_real_escape_string($type);

$title = $_POST['title'];
$title = mysql_real_escape_string($title);

$piece = $_POST['piece'];
$piece = mysql_real_escape_string($piece);

$image = $_POST['image'];
$image = mysql_real_escape_string($image);

$tags =  $_POST['tags'];
$tagArray = array();

$sql = "INSERT INTO `poems` ( `author` , `email` , `type` , `title` , `piece` ) VALUES ('$author', '$email', '$type', '$title', '$piece')";
mysql_query($sql, $dbhandle);
$pieceID = mysql_insert_id();
//We need to grab the tags of the post in an array, put in a forloop
//Get the ID of the tag, get the ID of the piece we inserted to, and insert this into the taggedItems post
foreach ($tags as $key) {
  $key = strtolower($key);
  $sql = "INSERT into `tags` (`tag`) VALUES ('$key')";
  mysql_query($sql, $dbhandle);

  $sql = "SELECT * FROM `tags` WHERE `tag`='$key'";
  $selected = mysql_query($sql);
  $row = mysql_fetch_assoc($selected);
  $tagID = $row['tagsID'];

  $sql = "INSERT into `taggedItems` (`pieceID`, `tagID`) VALUES ('$pieceID', '$tagID')";
  mysql_query($sql, $dbhandle);
}

//close the connection
mysql_close($dbhandle);

return true;
?>