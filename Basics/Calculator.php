<?php
	$result='';
	if(isset($_POST['btnadd']))
	{
		$num1=$_POST['txtnum1'];
		$num2=$_POST['txtnum2'];
		$result=$num1+$num2;
		echo $result;
	}

	if(isset($_POST['btnsub']))
	{
		$num1=$_POST['txtnum1'];
		$num2=$_POST['txtnum2'];
		$result=$num1-$num2;
		echo $result;
	}

	if(isset($_POST['btnmul']))
	{
		$num1=$_POST['txtnum1'];
		$num2=$_POST['txtnum2'];
		$result=$num1*$num2;
		echo $result;
	}
	
	if(isset($_POST['btndiv']))
	{
		$num1=$_POST['txtnum1'];
		$num2=$_POST['txtnum2'];
		$result=$num1/$num2;
		echo $result;
	}

?>

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="301" height="252" border="1">
    <tr>
      <td width="92">Number1</td>
      <td width="152"><label for="txtnum7"></label>
      <input type="text" name="txtnum1" id="txtnum7"></td>
    </tr>
    <tr>
      <td>Number2</td>
      <td><label for="txtnum8"></label>
      <input type="text" name="txtnum2" id="txtnum8"></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php echo $result; ?></td>
    </tr>
    <tr>
      <td colspan="2" align=""><input type="submit" name="btnadd" id="btnadd" value="ADD">
      <input type="submit" name="btnsub" id="btnsub" value="SUBB" />
      <input type="submit" name="btnmul" id="btnmul" value="MUL" />
      <input type="submit" name="btndiv" id="btndiv" value="DIV" /></td>
    </tr>
  </table>
</form>
</body>
</html>