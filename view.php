<?php 

require("controller.php");

getInstructorsNames();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Instructor Names</h1>

		<h3>List</h3>
			<ol>
				<?php 
					foreach (getInstructorsNames() as $name) {
						echo "<li>" . $name . "</li>";
					}
				 ?>
			</ol>

	<h3>Table</h3>
		<table border=1>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAMEs</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php 
						foreach (getInstructorsNames() as $key => $name) {
							echo "<tr>
									<td>" . ($key + 1) . "</td>
									<td>" . $name . "</td>
								  </tr>";

						}
					 ?>
				</tr>
			</tbody>
		</table>
		

</body>
</html>