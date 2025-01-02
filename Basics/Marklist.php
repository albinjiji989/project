
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form name="form1" method="post" action="">
  <table width="309" height="266" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname"></td>
    </tr>
    <tr>
      <td>Class</td>
      <td><label for="txtclass"></label>
      <input type="text" name="txtclass" id="txtclass"></td>
    </tr>
    <tr>
      <td>Mark1</td>
      <td><label for="txtmark1"></label>
      <input type="text" name="txtmark1" id="txtmark1"></td>
    </tr>
    <tr>
      <td>Mark2</td>
      <td><label for="txtmark2"></label>
      <input type="text" name="txtmark2" id="txtmark2"></td>
    </tr>
    <tr>
      <td>Mark3</td>
      <td><label for="txtmark3"></label>
      <input type="text" name="txtmark3" id="txtmark3"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Save">
      <input type="reset" name="btncancel" id="btncancel" value="Cancel"></td>
    </tr>
  </table>
  
</form>
</body>
</html>

<?php
$name='';
$class='';
$mark1='';
$mark2='';
$mark3='';
$total='';
$average='';

	if(isset($_POST['btnsubmit']))
	 {
		$name=$_POST['txtname'];
		$class=$_POST['txtclass'];
		$mark1=$_POST['txtmark1'];
		$mark2=$_POST['txtmark2'];
		$mark3=$_POST['txtmark3'];
		$total=$mark1+$mark2+$mark3;
		$average=($mark1+$mark2+$mark3)/3;
		?>
        
        <table width="289" height="270" border="1">
    <tr>
      <td>Name</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>Class</td>
      <td><?php echo $class; ?></td>
    </tr>
    <tr>
      <td>Mark1</td>
      <td><?php echo $mark1; ?></td>
    </tr>
    <tr>
      <td>Mark2</td>
      <td><?php echo $mark2; ?></td>
    </tr>
    <tr>
      <td>Mark3</td>
      <td><?php echo $mark3; ?></td>
    </tr>
    <tr>
      <td>Total Mark</td>
      <td><?php echo $total ?></td>
    </tr>
    <tr>
      <td>Average</td>
      <td><?php echo $average ?></td>
    </tr>
  </table>
        
        <?php
		
	 }
			
		
 
?>