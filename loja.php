
<?php


if (isset($_POST['submit']) == TRUE) : 

	$username = trim(mysqli_real_escape_string(strip_tags(stripslashes($_POST['username']))));

	$_SESSION['username'] = $username;

	header("Lokacioni: ./");

	endif;

	if(isset($_GET['logout']) == TRUE) {
		session_destroy();
		header("Lokacioni ./");
	}

function shfaq_imazhet($imazhi = null){

	$imazhet = array(	
		"gur" => '<a href = "?imazhi=gur"><img src = "rock.jpg" width = "135" height = "135" alt = "Gur"></a>',
		"leter" => '<a href = "?imazhi=leter"><img src = "paper.jpg" width = "135" height = "135" alt = "Leter" ></a>',
		"gershere" => '<a href = "?imazhi=gershere"><img src = "scissors.jpg" width = "135" height = "135" alt = "Gershere"></a>'
	);

	if($imazhi == null) :
	foreach ($imazhet as $imazhi => $value):
		echo $value;
	endforeach;

	else : 

		echo str_replace("?imazhi = {$imazhi}", "#", $imazhet[$imazhi]);

	endif;
}

function loja(){

	if( isset($_GET['imazhi']) == TRUE) :

	//Imazhet valide
	$imazhet = array('gur', 'leter', 'gershere');

	//Imazhet e perdoruesit
	$user_imazhi = strtolower($_GET['imazhi']);

	//Imazhi i kompjuterit
	$comp_imazhi = $imazhet[rand(0,2)];

	//Nese imazhi i perdoruesit nuk eshte valid
	if(in_array($user_imazhi, $imazhet) == FALSE) :
		echo "Duhet te zgjedhni Gur | Leter | Gershere.";
		die;
	endif;

	//Gershere > Leter
	//Leter > Gur
	//Gur > Gershere

	if( $user_imazhi == 'gershere' && $comp_imazhi == 'leter' or 
		$user_imazhi == 'leter' && $comp_imazhi == 'gur' or
		$user_imazhi == 'gur' && $comp_imazhi == 'gershere' ):

			echo '<h2> Keni fituar! </h2>';
			$outcome = 'Yes!';

		endif;

	if( $comp_imazhi == 'gershere' && $user_imazhi == 'leter' or 
		$comp_imazhi == 'leter' && $user_imazhi == 'gur' or
		$comp_imazhi == 'gur' && $user_imazhi == 'gershere' ):

			echo '<h2> Keni humbur! </h2>';
			$outcome = 'No!';

		endif;

	if ( $user_imazhi == $comp_imazhi) :

			echo '<h2> Barazim! </h2>';
			$outcome = 'Baraz!';

	endif;

	//Imazhi i perdoruesit
	shfaq_imazhet($user_imazhi);

	//Imazhi i kompjuterit
	shfaq_imazhet($comp_imazhi);

	//Go back link
	echo '<div id="cc"><a href = "./"> Luaj perseri! </a></div>';

	else :
	shfaq_imazhet();

endif;

}

?>