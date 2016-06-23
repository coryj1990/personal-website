<? php
function pinkthebkgrd($doesitneedback){ 
	 switch($doesitneedback) {
	 	case index:
	 		$needbackindex = "style="background-color:brown;"
	 		break ;
	 	case reflec:
	 		$needbackref = "style="background-color:pink;";
	 		break ;
	 	case goals:
	 		$needbackgoals = "style="background-color:pink;";
	 		break ;
	 	case extras:
	 		$needbackextra = "style="background-color:pink;";
	 		break ;
	 	case link:
	 		$needbacklink = "style="background-color:pink;";
	 		break ;
	 	case github:
	 		$needbackgithub = "style="background-color:pink;";
	 		break ;
	 	default:
	 		echo "It didn't work"					

	 }
	}

function navigate() { 
	echo ?>
<talbe>
	<tbody>
	<tr>
		<td><a href="index.html"; <?php $needbackindex ?>> Home </a></td>
		<td><a href="Reflections.html"; <?php $needbackref ?>> Microsoft's energy consumption approach </a></td>
		<td><a href="Goals.html"; <?php $needbackgoals ?>> Goals </a></td>
		<td><a href="Extras.html"; <?php $needbackextra ?>> Extras </a></td>
		<td><a href="https://www.linkedin.com/in/cory-johnson-2a53504a
"; <?php $needbacklink ?>> LinkedIn </a></td>
		<td><a href="https://github.com/coryj1990"; <?php $needbackgithub ?>> GitHub </a></td>
	</tr>
</tbody>

<?php } ?>


