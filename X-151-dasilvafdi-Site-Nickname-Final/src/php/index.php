<?php
// Author : dasilvafdi
// Date : 16.03.2016 
// Summary : Index

// Includes header and menu
include_once ("header.php");
include_once ("menu.php");
include_once ("DBAccess.php");

?>

<html>
    <body>
        <section>
            <?php
            // If session value is empty or not and define index message
            if( !isset($_SESSION['name']))
            {
                echo "Bienvenue à vous";
            }
            else
            {
                print "Bienvenue : $_SESSION[name]";
            }
            ?>
        </section>
    </body>
</html>

<?php
include_once ("footer.php");