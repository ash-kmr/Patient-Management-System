<?
include("config.php");
$sql=$dbh->prepare("SELECT * FROM messages");
$sql->execute();
while($r=$sql->fetch()){
 echo "<div class='msg' style = 'background-color : white; margin-left:2%; margin-right:2%; margin-top:1%' title='{$r['posted']}'><span class='name'><b style = 'color:darkblue; font-size:1.2em; padding-left:2%'>{$r['name']}</b><br></span><span class='msgc' style = 'padding-left:2%'>{$r['msg']}</span></div>";
}
if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 echo "<script>window.location.reload()</script>";
}
?>