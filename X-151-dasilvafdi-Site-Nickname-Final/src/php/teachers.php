<?php
// Author : dasilvafdi
// Date : 16.03.2016 
// Summary : Teachers table

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
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Surnom</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                    <!-- Display the db list-->
                    <?php

                    // Call class
                    $db = new DBAccess();

                    // Research all teacher value
                    $allTeachers = $db->getAllTeacher();

                    // Display  teachers values
                    foreach ($allTeachers as $teacher)
                    {
                        if( isset($_SESSION['name']))
                        {
                            echo "
                        <tr>
                            <td>$teacher[teaLastName]</td>
                            <td>$teacher[teaFirstName]</td>
                            <td>$teacher[teaNickname]</td>
                            <td>$teacher[secName]</td>
                            <th>
                                <a href=\"detail.php?id=$teacher[idTeacher]\">D</a>
                                <a href=\"editTeacher.php?id=$teacher[idTeacher]\">A</a>
                                <a href=\"deleteTeacher.php?id=$teacher[idTeacher]\">E</a>
                            </th>
                        </tr>";
                        }
                        else
                        {
                            echo "
                        <tr>
                            <td>$teacher[teaLastName]</td>
                            <td>$teacher[teaFirstName]</td>
                            <td>$teacher[teaNickname]</td>
                            <td>$teacher[secName]</td>
                            <th>
                                <a href=\"detail.php?id=$teacher[idTeacher]\">D</a>
                            </th>
                        </tr>";
                        }
                    }
                    ?>
                </tr>
            </table>
        </section>
    </body>
</html>

<?php

// Includes header and menu
include_once ("footer.php");