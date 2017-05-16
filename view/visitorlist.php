<table style="clear:both;">
	<caption><h3>Visitors In Building<h3></caption>
	<thead>
		<tr>
			<th>Visitor Name</th>
			<th>Host Name</th>
			<th>Sign In Time</th>
			<th>Sign Out Time</th>
      <th>Sign Out</th>

		</tr>
	</thead>
<?php 
  //create sign out link
  $signOutLink ='<a href="index.php?';
  //create table
  $table = '<tbody>';
  ////Take the two dimensional array,
//[[0] =>[[visitorName=>Raymond],[hostName=>Henry],[signInTime=>now()],[signOutTime]=>later()]]
//Pull each pastVisitor [0],[1],[2]... as visitor and put into row
    foreach ($currentVisitors as $visitor) {
      $table .= '<tr>';
      //Pull from each visitor [0],[1],[2]... their respective fields
      //[visitorName=>Raymond],[hostName=>Henry],[signInTime=>now()],[signOutTime]=>later()] and put into column

      foreach ($visitor as $field => $data) {
        $table .= '<td>' . $data . '</td>';
        $signOutLink .= $field . '=' . $field . '->' .$data . '&';
      
    }
    //removing unnecessary information 
    $signOutLink = substr_replace($signOutLink, "", -30);
    //append signout link to table
    $table .= '<td>' . $signOutLink . '">Sign Out</a></td>';
    $table .= '</tr>';
  }
  echo $table;
	
?>
</tbody>
</table>
