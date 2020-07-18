<?php
session_start();
if(isset($_SESSION['usrid']))
{
	$uname=$_SESSION['usrid'];
	//include('menubar.php');
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Menu</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="chrometheme/chromestyle3.css" />

<script type="text/javascript" src="chromejs/chrome.js"></script>
</head>

<body>
<font color="#FFFFFF">
<center>
<span  font-size:3px; text-align:center";> <font size ="+3"><b>ARIHANT HOSPITAL,</b></font><span/><br />
<span  font-size:20px; text-align:center; padding:0 0 100px 0;"><font size ="+1"><b> Savta- Nagar,Shevgaon Road,Pathardi,Dist. Ahmednagar Phone.02428-221041 </b> <font></span><br /><br />
</center>
<?php include ('menubar.php') ;?>

<span id="logout">Welcome! &nbsp;<?php echo $uname; ?><a href="logout.php"> &nbsp;Logout</a></span>	




<?php
}
?>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>

</body>
</html>
