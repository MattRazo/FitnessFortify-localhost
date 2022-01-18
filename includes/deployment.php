<?php

/**
 * Contains deployment constants for the GuitarShop application.
 * 
 * @author MR
 * @version 180428
 */

// Access files base directory
define ('ACCESS_BASE_DIR', APP_NON_WEB_BASE_DIR . 'access/');

// Database access credentials location
define ('DB_ACCESS_CREDENTIALS_FILE', ACCESS_BASE_DIR . 'dbAccess.csv');

// Page to display when session is invalid
define ('INVALID_SESSION_PAGE', 'views/loginFailed.php');

//Browser tab text for invalid session page
define ('INVALID_SESSION_PAGE_TITLE', 'Fitness Fortify - Login');

//Uploaded images location
define ('UPLOADED_IMAGES', APP_NON_WEB_BASE_DIR . 'images/');



