<?php

function navigate($thegoods) {
	
?>

<tbody>
	<tr>
		<td><a href="index.php"; <?php if($thegoods == "index") { echo 'style="background-color:pink";';} ?>> Home</a></td>

		<td><a href="Reflections.php"; <?php if($thegoods == "reflec") { echo 'style="background-color:pink";';}  ?>> Microsoft's energy consumption approach</a></td>

		<td><a href="Goals.php"; <?php if($thegoods == "goals") { echo 'style="background-color:pink";';} ?>>Goals</a></td>

		<td><a href="Extras.php"; <?php if($thegoods == "extras") { echo 'style="background-color:pink";';} ?>> Extras</a></td>

		<td><a href="https://www.linkedin.com/in/cory-johnson-2a53504a
";> LinkedIn</a></td>

		<td><a href="https://github.com/coryj1990";> GitHub</a></td>
	</tr>
</tbody>

<?php } 
?>


