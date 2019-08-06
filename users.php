<?php 
if(!isset($_COOKIE['usID']))
{
	$usID = rand(100,999).".".time();
	setcookie("usID",$usID,time()+31536000,"/");
}
$mysql=mysqli_connect("127.0.0.1","root","test");
mysqli_query($mysql,"REPLACE INTO 'user' VALUE('".$_COOKIE['usID']."','".time()."','".$_SERVER['REQUEST_URI']."')");
$res=mysqli_num_rows($res);
$count=mysqli_num_rows($res);
echo "Онлайн: ".$count."<br>";
while($row=$res->fetch_array(MYSQLI_ASSOC))
echo $row['usID']."time:*.date("H:i:s d.m.Y", $row['time'])
."url:<a href=\"".$row['url']."\\\\\">".$row['url']."</a><br>";
 ?>