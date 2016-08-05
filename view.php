<?php

function showPHPPage($content, $menu, $forms){
	
	getTopMenu($menu);
	
	
	echo '<hr>'.$content;
	
	}
function getTopMenu($menu){
	foreach ($menu as $key => $value){
	  $name = ucfirst($value);
		echo "<a href=\"controller.php?lnk=$value\">$name</a> ";
	}
}

?>
