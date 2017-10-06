<?php
require_once('../Utility/Codevember.php');

use \CODEVEMBER\Utility\Codevember as Codevember;

/**
 * Created by PhpStorm.
 * User: Patrick Hippler
 * Date: 05.10.2017
 * Time: 16:02
 */

// utility
$utility = new Codevember;
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Codevember2017 - Patrick Hippler</title>
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container-fluid section--brand-primary bg-inverse">
    <div class="container">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-inverse p-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#impressum" role="tab">Messages</a>
                        </li>
                    </ul>

                </div>
            </div>
            <nav class="navbar navbar-inverse bg-inverse">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5 mb-5">Codevember 2017</h1>
        </div>

        <!-- Tab panes -->
        <div class="tab-content col-12">
            <div class="tab-pane fade show active" id="home" role="tabpanel">
                <div class="col-12 text-center">
                    <div class="list-group">
                        <?php

                        $folders = $utility->createDirObjectArray(getcwd());
                        echo $utility->createListelementsFromArray($folders,"btn btn-outline-primary col-4 mb-4 mr-2");
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-center" id="profile" role="tabpanel">
                <h2>Profile</h2>
                <hr>
                <p>Patrick Hippler</p>
            </div>
            <div class="tab-pane fade text-center" id="impressum" role="tabpanel">
                <h2>Impressum</h2>
                <hr>
                <p>Lorem Ipsum</p>
            </div>

        </div>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>


<?php
/*
 * Functions
 */