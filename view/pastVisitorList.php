<table>
	<caption><h3>Past Visitors<h3></caption>
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

		foreach ($pastVisitors as $visitorName => $pastVisitor)
		{
echo <<<END
<tr>
	<td><a href="index.php?visitor=$pastVisitor->visitorName">$pastVisitor->visitorName</a></td>
	<td>$pastVisitor->hostName</td>
	<td>$pastVisitor->signInTime</td>
	<td>$pastVisitor->signOutTime</td>
</tr>		
END;
}
?>
</tbody>
</table>
