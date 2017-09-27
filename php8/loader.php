<?php
$CONTENT = $_POST['Content'];

if($CONTENT == "YouTube"){
	echo $CONTENT.'.YT';
	
} else if($CONTENT == "FaceBook"){
	echo $CONTENT.'.FB';
	
} else if($CONTENT == "G-Plus"){
	echo $CONTENT.'.GP';

} else if($CONTENT == "Instagram"){
	echo $CONTENT.'.INST';

}else if($CONTENT == "mojchlopak"){
	require_once('strony/'.$CONTENT.'.php');
	
} else if($CONTENT == "kimjestem"){
	require_once('strony/'.$CONTENT.'.php');
	
} else if($CONTENT == "hobby"){
	require_once('strony/'.$CONTENT.'.php');

} else if($CONTENT == "osiagniecia"){
	require_once('strony/'.$CONTENT.'.php');

} else if($CONTENT == "menuglowne"){	
	require_once('content/'.$CONTENT.'.php');

} else if($CONTENT == "galeria"){	
	require_once('content/'.$CONTENT.'.php');

}	else if($CONTENT == "kontakt"){	
	require_once('content/'.$CONTENT.'.php');

}	else if($CONTENT == "rejestracja"){	
	require_once('content/'.$CONTENT.'.php');

}	
?>
