<html>
<head></head>

<body>

<table>
	<tr><td>Visitor Name</td><td>Host Name</td><td>Sign In Time</td></tr>
<?php 

		foreach ($visitors as $visitorName => $visitor)
		{
			echo '<tr><td><a href="index.php?visitor='.$visitor->visitorName.'">'.$visitor->visitorName.'</a></td><td>'.$visitor->hostName.'</td><td>'.$visitor->signInTime.'</td></tr>';
		}

?>
</table>

</body>
</html>
