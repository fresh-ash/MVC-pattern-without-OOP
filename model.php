<?php

function getContent(){
	$menu = getTopMenuItems();
	$content = [ $menu[0] => getHome(), $menu[1] => getBlog(), $menu[2] => getAbout()];
	
	if ($_GET['lnk']){
		return $content[$_GET['lnk']];
	}
	else {
		return $content["home"];
	}
}

function getBlog(){
	return "First publication!";
}

function getHome(){
	return "Wellcome!";
}	


function getAbout(){
	return "Tsapko S. S.";
}

function getTopMenuItems(){
	$menuItems = ['home','blog', 'about'];
	return $menuItems;
}
?>
