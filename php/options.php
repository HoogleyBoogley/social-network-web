<?php
#######################################################################
#							IMPORTANT MESSAGE	  					  #
#######################################################################
#																	  #
#	The use of 'options.php' error settings had been decrypted,		  #
#	errors will now be displayed directly on the page instead of	  #
#	by being redirected to the 'options.php'.						  #
#																	  #
#######################################################################


#######################################################################
#						PURPOSE OF OPTIONS.PHP						  #
#######################################################################
#
#	'options.php' is a file that controls the site options
#
#




#####################
# BASIC INFORMATION #
#####################
// Site Title
$option_siteTitle = "HoogleyBoogley Network";
if (empty($option_siteTitle)) {
	echo "Please provide a site title! HoogleyBoogley has been automatically selected!";
	$option_siteTitle = "HoogleyBoogley";
};

// Site Charset
$option_siteCharset = "utf-8";
if (empty($option_siteCharset)) {
	echo "Please provide a site charset! utf-8 has been automatically selected!";
	$option_siteCharset = "utf-8";
};

// Logo
$option_siteLogo = "img/logo.png";
if (empty($option_siteLogo)) {
	echo "Please provide a logo! Standard has been automatically selected!";
	$option_siteLogo = "img/logo.png";
};


####################
# NAVIGATION LINKS #
####################
// First Link
$option_navLink1 = "#";
$option_navAlias1 = "Home";
if (empty($option_navLink1)) {
	echo "A link is required for navLink1, # is automatically selected!";
	$option_navLink1 = "#";
} else {
	if (empty($option_navLink1)) {
		echo "Please provide an alias for navAlias1.";
	};
};


// Second Link
$option_navLink2 = "#";
$option_navAlias2 = "Explore";
if (empty($option_navLink2)) {
	echo "A link is required for navLink2, # is automatically selected!";
	$option_navLink2 = "#";
} else {
	if (empty($option_navLink2)) {
		echo "Please provide an alias for navAlias2";
	};
};

// Third Link
$option_navLink3 = "#";
$option_navAlias3 = "Notifications";
if (empty($option_navLink3)) {
	echo "A link is required for navLink3, # is automatically selected!";
	$option_navLink3 = "#";
} else {
	if (empty($option_navLink3)) {
		echo "Please provide an alias for navAlias3";
	};
};

// Forth Link
$option_navLink4 = "#";
$option_navAlias4 = "Profile";
if (empty($option_navLink4)) {
	echo "A link is required for navLink4, # is automatically selected!";
	$option_navLink4 = "#";
} else {
	if (empty($option_navLink4)) {
		echo "Please provide an alias for navAlias4";
	};
};

// Fith Link
$option_navLink5 = "#";
$option_navAlias5 = "Post";
if (empty($option_navLink5)) {
	echo "A link is required for navLink5, # is automatically selected!";
	$option_navLink5 = "#";
} else {
	if (empty($option_navLink5)) {
		echo "Please provide an alias for navAlias5";
	};
};


######################
# CLIENT SIDE ERRORS #
######################

// Error 400
$option_error400 = "Error 400!";
if (empty($option_error400)) {
	$option_error400 = "Error 400!";
};

// Error 401
$option_error401 = "Error 401!";
if (empty($option_error401)) {
	$option_error401 = "Error 401!";
};

// Error 402
$option_error402 = "Error 402!";
if (empty($option_error402)) {
	$option_error402 = "Error 402!";
};

// Error 403
$option_error403 = "Error 403!";
if (empty($option_error403)) {
	$option_error403 = "Error 403!";
};

// Error 404
$option_error404 = "Error 404!";
if (empty($option_error404)) {
	$option_error404 = "Error 404!";
};

// Error 405
$option_error405 = "Error 405!";
if (empty($option_error405)) {
	$option_error405 = "Error 405!";
};

// Error 406
$option_error406 = "Error 406!";
if (empty($option_error406)) {
	$option_error406 = "Error 406!";
};

// Error 407
$option_error407 = "Error 407!";
if (empty($option_error407)) {
	$option_error407 = "Error 407!";
};

// Error 408
$option_error408 = "Error 408!";
if (empty($option_error408)) {
	$option_error408 = "Error 408!";
};

// Error 409
$option_error409 = "Error 409!";
if (empty($option_error409)) {
	$option_error409 = "Error 409!";
};

// Error 410
$option_error410 = "Error 410!";
if (empty($option_error410)) {
	$option_error410 = "Error 410!";
};

// Error 411
$option_error411 = "Error 411!";
if (empty($option_error411)) {
	$option_error411 = "Error 411!";
};

// Error 412
$option_error412 = "Error 412!";
if (empty($option_error412)) {
	$option_error412 = "Error 412!";
};

// Error 413
$option_error413 = "Error 413!";
if (empty($option_error413)) {
	$option_error413 = "Error 413!";
};

// Error 414
$option_error414 = "Error 414!";
if (empty($option_error414)) {
	$option_error414 = "Error 414!";
};

// Error 415
$option_error415 = "Error 415!";
if (empty($option_error415)) {
	$option_error415 = "Error 415!";
};

// Error 416
$option_error416 = "Error 416!";
if (empty($option_error416)) {
	$option_error416 = "Error 416!";
};

// Error 417
$option_error417 = "Error 417!";
if (empty($option_error417)) {
	$option_error417 = "Error 417!";
};

?>
