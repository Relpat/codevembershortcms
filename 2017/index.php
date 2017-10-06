<?php
require_once('../Utility/Codevember.php');

use \CODEVEMBER\Utility\Codevember as Codevember;

/**
 * Created by PhpStorm.
 * User: phippler
 * Date: 05.10.2017
 * Time: 16:02
 */

// utility
$utility = new Codevember;
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codevember2017, Listing</title>
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5 mb-5">Codevember 2017</h1>
        </div>
        <div class="col-12 text-center">
            <ul class="list-group">
                <?php

                $folders = $utility->createDirObjectArray(getcwd());
                echo $utility->createListelementsFromArray($folders,"btn btn-outline-primary col-4 mb-4 mr-2");
                ?>
            </ul>
        </div>
    </div>
</div>

</body>


<?php
/*
 * Functions
 */