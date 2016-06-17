<?php
// Author : dasilvafdi
// Date : 13.04.2016 
// Summary : Display teacher details

// Includes header and menu
include_once ("header.php");
include_once ("menu.php");

// Include Database
include_once ("DBAccess.php");

?>

    <html>
    <head lang="en">
        <meta charset="utf-8">

        <!-- Title -->
        <title>Le nom de Nick</title>

        <!-- CSS -->
        <link href="../../resources/css/style.css" type="text/css" rel="stylesheet" media="all">

    </head>
    <body>
    <section>
        <table style="width:100%">
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Surnom</th>
                <th>Origine</th>
                <th>Gender</th>
                <th>Section</th>
                <th>Dernière modification</th>
            </tr>
            <!-- Display the db list-->
            <?php

            //Define variables from GET method
            $id = $_GET['id'];

            // Research Teacher values
            $db = new DBAccess();
            $teacher = $db->getTeacher($id);

            // Add a pics name
            $photoName = $teacher['teaImage'] . ".jpg";

            // Display values for each
            echo "<tr>
                    <td><img src=\"../../userContent/teacher/$photoName\" alt=\"Default pics\" height=\"50\" width=\"50\" /></td>
                    <td>$teacher[teaLastName]</td>
                    <td>$teacher[teaFirstName]</td>
                    <td>$teacher[teaNickname]</td>
                    <td>$teacher[teaOrigin]</td>
                    <td>$teacher[teaGender]</td>
                    <td>$teacher[secName]</td>
                    <td>$teacher[teaModified]</td>
                </tr>";
            ?>
            </tr>
        </table>
    </section>
    </body>
    </html>

<?php

// Includes footer
include_once ("footer.php");