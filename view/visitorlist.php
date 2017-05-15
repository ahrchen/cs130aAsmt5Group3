<table style="clear:both;">
	<caption><h3>Visitors In Building<h3></caption>
	<thead>
		<tr>
			<th>Visitor Name</th>
			<th>Host Name</th>
			<th>Sign In Time</th>
			<th>Sign Out Time</th>
		</tr>
	</thead>
	<tbody>
<?php 

		foreach ($visitors as $visitorName => $visitor)
		{
echo <<<END
<tr>
	<td><a href="index.php?visitor=$visitor->visitorName">$visitor->visitorName</a></td>
	<td>$visitor->hostName</td>
	<td>$visitor->signInTime</td>
	<td>$visitor->signOutTime</td>
</tr>		
END;
}
?>
</tbody>
</table>
