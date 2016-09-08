

<?php

function navigate($thegoods) {

?>
<link type="text/css"; rel="stylesheet"; href="styletheindex.css"/>

<div id="namebox"> Cory Johnson </div>

<div id="joinplz">
<h3 id="navname"> Navigation </h3>
<table> 
<tbody id="navtab">
	<tr>
		<td><a href="index.php"; <?php if($thegoods == "index") { echo 'style="background-color:pink";';} ?>> Home </a></td>

		<td><a href="Reflections.php"; <?php if($thegoods == "reflec") { echo 'style="background-color:pink";';}  ?>> Essays </a></td>

		<td><a href="Goals.php"; <?php if($thegoods == "goals") { echo 'style="background-color:pink";';} ?>>Goals </a></td>

		<td><a href="Extras.php"; <?php if($thegoods == "extras") { echo 'style="background-color:pink";';} ?>> Extras </a></td>

		<td><a href="https://www.linkedin.com/in/cory-johnson-2a53504a";><img src="http://www.ucl.ac.uk/spp/images/social/linkedin.png" /></a></td>

		<td><a href="https://github.com/coryj1990";> <img src="https://github.com/favicon.ico" /></a></td>
	</tr>
</tbody>
</table>
</div>
<?php }
?>


