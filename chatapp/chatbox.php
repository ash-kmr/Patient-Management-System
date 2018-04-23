<?
include("config.php");
if(isset($_SESSION['user'])){
?>
<br><br><br><br>
 <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Log Out</a>
 <div class='msgs'>
  <?include("msgs.php");?>
 </div>
 <form id="msg_form">
  <input class="form-control" name="msg" size="30" type="text"/>
  <button class = "btn btn-info">Send</button>
 </form>
<?
}
?>