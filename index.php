<!DOCTYPE html>
<html>
<head>
    <title>Gamify.WS User Data Reader</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="span3">
            <h4>Gamify.WS User Data Reader</h4>
            <img src="http://gamify.ws/img/logo.png" />
        </div>
        <div class="span3">
            <h6>What's This?</h6>
            <p>
                This little app interacts with the Gamify.WS gamification API and gives you some current user data from your scheme.
            </p>
        </div>
        <div class="span3">
            <h6>Getting Started</h6>
            <p>
                <a href="http://gamify.ws/#scheme_register" target="_blank">Register a scheme</a> using the Gamify.ws API, and once you have your API key and secret, plug them into the classes/gamify.class.php file, request a salt below, then get started. Probably a good idea to grab the <a href="https://github.com/w001y/gamifyws_app_schemebuilder" title="Gamify.ws Schemebuilder Web App" target ="_blank">Scheme Builder</a> and <a href="https://github.com/w001y/gamifyws_app_datareader" title="Gamify.ws Data Reader Web App" target ="_blank">Data Reader</a> too, to build and test your scheme.
            </p>
        </div>
    </div>

    <div class="row">


        <div class="span4">
            <h5>User Methods</h5>

            <div><small>Select A User:</small></div>
            <select id="user_selection" class="user_list_select">
            </select>

            <br />
            <a href="#" class="call btn btn-small" data-method="user_awards" data-type="points">Points Awarded (List)</a>
            <a href="#" class="call btn btn-small" data-method="user_points_sum">Points Awarded (Sum)</a>
            <a href="#" class="call btn btn-small" data-method="user_awards" data-type="actions">Actions Awarded</a>
            <a href="#" class="call btn btn-small" data-method="user_awards" data-type="action_groups">Action Groups Awarded</a>
            <a href="#" class="call btn btn-small" data-method="user_awards" data-type="badges">Badges Awarded</a>
            <a href="#" class="call btn btn-small" data-method="user_awards" data-type="levels">Levels Awarded</a>


            <br />
            <br />
            <h5>Aggregate Methods</h5>

            <h6>Leaderboard / Leagues:</h6>
            <a href="#" class="call btn btn-small" data-method="get_league" data-type="points">Points</a>






        </div>


        <div class="span8">
            Reply
            <div><pre  id="ajax_reply"></pre></div>
        </div>

    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>