<?php 
if($_POST['submit'])
	{
		$a = (int)$_POST['first'];
		$b = (int)$_POST['second'];
		$p = $_POST['Operation'];
		$c;
		if($p=='+')
			$c = $a + $b;
		else if ($p=='-')
			$c = $a - $b;
		else if ($p=='*')
			$c = $a * $b;
		else if ($p=='/')	
		{
			if ($b==0)
				echo "Нельзя делить на ноль";
			else $c = $a / $b;
		}
		else $c = pow($a, $b);
	}

 ?>
<form action="" method="post">
<input type="textbox" name="first" required>

<select name="action" required>
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
	<option value="^">^</option>
</select>

<input type="textbox" name="second" required>

<input type="submit" name="submit">
</form>
<?php 
		echo $c;
 ?>