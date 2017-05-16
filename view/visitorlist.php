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
<?php 

  $table = '<tbody>';
  ////Take the two dimensional array,
//[[0] =>[[visitorName=>Raymond],[hostName=>Henry],[signInTime=>now()],[signOutTime]=>later()]]
//Pull each pastVisitor [0],[1],[2]... as visitor and put into row
    foreach ($currentVisitors as $visitor) {
      $table .= '<tr>';
      //Pull from eachvisitor [0],[1],[2]... their respective fields
      //[visitorName=>Raymond],[hostName=>Henry],[signInTime=>now()],[signOutTime]=>later()] and put into column
      foreach ($visitor as $field => $data) {
        $table .= '<td>' . $data . '</td>';
      }
      $table .= '</tr>';
    }

	echo $table;
?>
</tbody>
</table>
