<?php
// Author : dasilvafdi
// Date : 16.03.2016 
// Summary : Section table

// Includes header and menu
include_once ("header.php");
include_once ("menu.php");

// Include Database
include_once ("DBAccess.php");

?>

<html>
    <body>
        <section>
            <table style="width:100%">
                <tr>
                    <th>Section</th>
                </tr>
                <!-- Display the db liste-->
                <?php

                // Call class
                $db = new DBAccess();

                // Research all section value
                $allTeachers = $db->getAllSection();

                // Display section value
                foreach ($allTeachers as $section)
                {
                    echo "<tr>
                            <td>$section[secName]</td>
                        </tr>";
                }
                ?>
            </table>
        </section>
    </body>
</html>

<?php

// Includes header and menu
include_once ("footer.php");