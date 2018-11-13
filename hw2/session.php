<?php
session_start();
if(!isset($_SESSION['is_login'])){
	header('Location: ./login.php');
}
?>
<html>
<body>
<?php echo $_SESSION['nickname'];?>님 환영합니다
<br>
</body>
</html>

