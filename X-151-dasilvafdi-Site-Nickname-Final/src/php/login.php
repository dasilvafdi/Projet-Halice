<?php
// Author : dasilvafdi
// Date : 11.05.2016 
// Summary : Login users count

// Includes header and menu
include_once ("header.php");
include_once ("menu.php");

?>

    <html>
        <body>
            <!-- Title -->
            <h2>
                Identifiez-vous !
            </h2>
            <!-- section initialise -->
            <section>
                <!-- Form and validation form initialise -->
                <form name="formLogin.php" action="formLogin.php" method="post">
                    <table style="...">

                        <!-- Login name entry -->
                        <tr>
                            <td>
                                Pseudo
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="login" type="text" name="login">
                            </td>
                        </tr>

                        <!-- Password name entry -->
                        <tr>
                            <td>
                                Mot de passe
                        </tr>
                        <tr>
                            <td>
                                <input id="password" type="password" name="password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="button" id="input" type="submit" value="Connexion">
                            </td>
                        </tr>
                    </table><!-- // End table -->
                </form><!-- // End forme -->
            </section><!-- // End section -->
        </body>
    </html>

<?php

// Includes footer
include_once ("footer.php");