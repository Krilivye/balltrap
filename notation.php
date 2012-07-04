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
            </div>
            <div data-role="content" style="padding: 15px">
                <h2>
                    Tireur : nom
                </h2>
                <h2>
                    Score : 23
                </h2>
                <h2>
                    Reste :
                </h2>
                <a data-role="button" data-transition="fade" href="#page1">
                    1er coup
                </a>
                <a data-role="button" data-transition="fade" href="#page1">
                    2ème coup
                </a>
                <a data-role="button" data-transition="fade" href="#page1">
                    Zéro
                </a>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>