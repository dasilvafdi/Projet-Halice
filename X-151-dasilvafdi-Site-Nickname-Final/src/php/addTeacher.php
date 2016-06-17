<?php
// Author : dasilvafdi
// Date : 20.04.2016 
// Summary : Add teacher by a form

// Includes header and menu
include_once ("header.php");
include_once ("menu.php");

// Include Database
include_once ("DBAccess.php");

// If session value is empty or not and define menu link
if( !isset($_SESSION['name']))
{
    echo "Resource non accessible";
}
else
{
    ?>

        <html>
            <body>
                <!-- Title -->
                <h2>
                    Ajouter un enseignant
                </h2>
                <!-- section initialise -->
                <section>
                    <!-- Form and validation form initialise -->
                    <form name="formAddTeacher.php" action="formAddTeacher.php" method="post">
                        <table style="...">

                            <!-- Photo entry -->
                            <tr>
                                <td>
                                    Photo
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="photo" type="text" name="photo" size="1">
                                </td>
                            </tr>

                            <!-- Name entry -->
                            <tr>
                                <td>
                                    Nom
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="name" type="text" name="lastName">
                                </td>
                            </tr>

                            <!-- First name entry -->
                            <tr>
                                <td>
                                    Prénom
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="firstName" type="text" name="firstName">
                                </td>
                            </tr>

                            <!-- Nickname entry -->
                            <tr>
                                <td>
                                    Surnom
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="nickname" type="text" name="nickname">
                                </td>
                            </tr>

                            <!-- Origin entry -->
                            <tr>
                                <td>
                                    Origine
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="origin" type="text" name="origin">
                                </td>
                            </tr>

                            <!-- Gender selector -->
                            <tr>
                                <td>
                                    Genre
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="gender" size="1">
                                        <option>M</option>
                                        <option>W</option>
                                        <option>A</option>
                                    </select>
                                </td>
                            </tr>

                            <!-- Section selector -->
                            <tr>
                                <td>
                                    Section
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="section" size="1">

                                        <!-- Display the db list-->
                                        <?php

                                        // Research all teacher value
                                        $db = new DBAccess();
                                        $allTeachers = $db->getAllSection();

                                        // Display  teachers values
                                        foreach ($allTeachers as $teacher) {
                                            echo "<option>$teacher[secName]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                            <!-- Creator login entry -->
                            <tr>
                                <td>
                                    <select name="login" size="1" hidden="true">

                                        <!-- Creator reception-->
                                        <?php

                                        // Print value
                                        print "<option>$_SESSION[name]</option>";
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Form sender -->
                                    <input class="button" id="input" type="submit">
                                </td>
                            </tr>
                        </table>
                        <!-- // End table -->
                    </form>
                    <!-- // End forme -->
                </section>
                <!-- // End section -->
            </body>
        </html>
    <?php
}
// Includes header and menu
include_once ("footer.php");