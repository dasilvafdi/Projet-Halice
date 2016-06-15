<?php
// Author : dasilvafdi
// Date : 11.05.2016 
// Summary : Logout the user

// Call sestion
session_start();

// Erase the session tab
session_unset();

// Destroy section to logout
session_destroy();

// Redirect index.php
echo '<meta http-equiv="Refresh" content="0;URL=index.php">';