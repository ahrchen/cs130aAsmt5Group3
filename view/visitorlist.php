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
//for each current visitor I will create a row
    foreach ($currentVisitors as $visitor) {
      $table .= '<tr>';
	    //for each visitor field I will insert into column
      foreach ($visitor as $field => $data) {
        $table .= '<td>' . $data . '</td>';
      }
      $table .= '</tr>';
    }

	echo $table;
?>
</tbody>
</table>
