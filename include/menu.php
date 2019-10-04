<?php

if (strpos($_SERVER['PHP_SELF'], 'index.php')){
	echo"<div class='menu' align='center'>HOME<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='index.php'\">HOME</div>";
}
echo"<div class='menu_space'></div>";



if (strpos($_SERVER['PHP_SELF'], 'about_us.php')){
	echo"<div class='menu' align='center'>ABOUT US<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='about_us.php'\">ABOUT US</div>";
}
echo"<div class='menu_space'></div>";



if (strpos($_SERVER['PHP_SELF'], 'services.php')){
	echo"<div class='menu' align='center'>SERVICES<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='services.php'\">SERVICES</div>";
}
echo"<div class='menu_space'></div>";



if (strpos($_SERVER['PHP_SELF'], 'people.php')){
	echo"<div class='menu' align='center'>PEOPLE<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='people.php'\">PEOPLE</div>";
}
echo"<div class='menu_space'></div>";


if (strpos($_SERVER['PHP_SELF'], 'sectors_home.php') or strpos($_SERVER['PHP_SELF'], 'sectors_home.php')){
	echo"<div class='menu' align='center'>SECTORS<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='sectors_home.php'\">SECTORS</div>";
}
echo"<div class='menu_space'></div>";

//if (strpos($_SERVER['PHP_SELF'], 'credentials.php') or strpos($_SERVER['PHP_SELF'], 'credentials_login.php')){
//	echo"<div class='menu' align='center'>SECTORS<div class='menu_hl'></div></div>";
//} else {
//	echo"<div class='menu' align='center' onclick=\"window.location='credentials.php'\">SECTORS</div>";
//}
//echo"<div class='menu_space'></div>";

if (strpos($_SERVER['PHP_SELF'], 'clients.php') or strpos($_SERVER['PHP_SELF'], 'clients_login.php')){
	echo"<div class='menu' align='center'>CLIENTS<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='clients.php'\">CLIENTS</div>";
}
echo"<div class='menu_space'></div>";
 

if (strpos($_SERVER['PHP_SELF'], 'geography.php') or strpos($_SERVER['PHP_SELF'], 'geography.php')){
	echo"<div class='menu' align='center'>GEOGRAPHY<div class='menu_hl'></div></div>";
} else {
	echo"<div class='menu' align='center' onclick=\"window.location='geography.php'\">GEOGRAPHY</div>";
}
echo"<div class='menu_space'></div>";
 
?> 