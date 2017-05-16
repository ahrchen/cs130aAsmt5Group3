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
<?php 
//for each visitor in my array I will create a row, 
  $table = '<tbody>';
    foreach ($pastVisitors as $visitor) {
      $table .= '<tr>';
	//I will pull data from each field and put it into each table column
      foreach ($visitor as $field => $data) {
        $table .= '<td>' . $data . '</td>';
      }
      $table .= '</tr>';
    }

	echo $table;
?>
</tbody>
</table>
