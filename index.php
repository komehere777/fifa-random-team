<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>FIFA 19 random team</title>
    
</head>
<body>
<main role="main" class="container">

<div class="template">
  
<?php
    $file = file_get_contents("fifa.json");
    $teams = json_decode($file, true);
    // echo '<pre>';
    // var_dump($teams);
    // echo '</pre>';
    // print_r($teams[1]->rating);

    function Rating75($array) {
        // returns if the input integer is even 
        if($array['rating'] >= 75) 
        return TRUE; 
        else 
        return FALSE;  
    }
    function Rating60($array) {
        // returns if the input integer is even
        if($array['rating'] >= 60 && $array['rating'] < 75)
        //if($array['rating'] >= 60 )
        return TRUE;
        else
        return FALSE;
    }

    $teams = array_filter($teams, 'Rating75');
    shuffle($teams);

    $randomteam = $teams[1];
        // print_r($randomteam);
        echo '<h3>Upper75</h3><br>';
        echo '<strong>' . $randomteam['teamname'] . '</strong><br>';
        echo $randomteam['league'] . '<br>';
        echo 'ATT: ' . $randomteam['att'] ;
        echo '  MID: ' . $randomteam['mid'] ;
        echo '  DEF: ' . $randomteam['def'] . '<br>';
        echo 'Rating: ' . $randomteam['rating'] . '<br>';
        $randomteam = $teams[2];
        // print_r($randomteam);
        echo '<strong>' . $randomteam['teamname'] . '</strong><br>';
        echo $randomteam['league'] . '<br>';
        echo 'ATT: ' . $randomteam['att'] ;
        echo '  MID: ' . $randomteam['mid'] ;
        echo '  DEF: ' . $randomteam['def'] . '<br>';
        echo 'Rating: ' . $randomteam['rating'] . '<br>';


    $file = file_get_contents("fifa.json");
    $teams = json_decode($file, true);

    $teams = array_filter($teams, 'Rating60');
    shuffle($teams);

    $randomteam = $teams[1];
    // print_r($randomteam);
    echo '<p>';
    echo '<h3>Rating 60~75</h3><br>';
    echo '<strong>' . $randomteam['teamname'] . '</strong><br>';
    echo $randomteam['league'] . '<br>';
    echo 'ATT: ' . $randomteam['att'] ;
    echo '  MID: ' . $randomteam['mid'] ;
    echo '  DEF: ' . $randomteam['def'] . '<br>';
    echo 'Rating: ' . $randomteam['rating'] . '<br>';
    echo '</p>';
    $randomteam = $teams[2];
    // print_r($randomteam);
    echo '<p>';
    echo '<strong>' . $randomteam['teamname'] . '</strong><br>';
    echo $randomteam['league'] . '<br>';
    echo 'ATT: ' . $randomteam['att'] ;
    echo '  MID: ' . $randomteam['mid'] ;
    echo '  DEF: ' . $randomteam['def'] . '<br>';
    echo 'Rating: ' . $randomteam['rating'] . '<br>';
    echo '</p>';
?>
<FORM>
<INPUT TYPE="button" class="btn btn-lg btn-primary" onClick="history.go(0)" VALUE="Random team">
</FORM>

</div>

</main><!-- /.container -->
</body>
</html>