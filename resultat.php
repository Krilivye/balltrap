<?php
    $includePath = ini_get("include_path");

    $includePath .= PATH_SEPARATOR.dirname(__FILE__)."/classes/";

    ini_set("include_path",$includePath);

    function __autoload($class){
        require_once ( $class.".class.php" );
    }
    require_once ("ParcoursTireur.class.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Ball-Trap
                </h3>
                <a data-role="button" data-rel="back" data-transition="fade" href="#page1" data-icon="home" data-iconpos="left">
                    Accueil
                </a>
            </div>
            <div data-role="content" style="padding: 15px">
                <h2>
                    Résultat
                </h2>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        
                        <a href="resultatTireur.php" data-transition="slide">
                            MATRION Sébastien
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="resultatTireur.php" data-transition="slide">
                            MATRION Michel
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="resultatTireur.php" data-transition="slide">
                            MATRION Gérard
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>