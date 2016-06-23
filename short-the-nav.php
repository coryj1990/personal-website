<?php
function pinkthebkgrd($doesitneedback){ 

	 switch($doesitneedback) {
	 	case index:
	 			$thegoods = 'style="background-color: pink;"';
	 			echo $thegoods;
	 		break;
	 	case reflec:
	 			echo "First time 2";
	 		break;
	 	case goals:
	 			echo "First time 3";
	 		 break;
	 	case extras:
	 			echo "First time 4";
	 		 break;
	 	case link:
	 			echo "First time 5";
	 		 break;
	 	case github:
	 			echo "First time 6";
	 		 break;
	 	default:
	 		echo "It didn't work"

	 		;}
	 	}



function navigate($yesitneedsit) {
?>

<tbody>
	<tr>
		<td><a href="index.php"; <?php pinkthebkgrd($yesitneedsit) ?>> Home</a></td>
		<td><a href="Reflections.php";> Microsoft's energy consumption approach</a></td>
		<td><a href="Goals.php";> Goals</a></td>
		<td><a href="Extras.php";> Extras</a></td>
		<td><a href="https://www.linkedin.com/in/cory-johnson-2a53504a
";> LinkedIn</a></td>
		<td><a href="https://github.com/coryj1990";> GitHub</a></td>
	</tr>
</tbody>

<?php } 
navigate(index);

?>


