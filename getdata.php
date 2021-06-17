<?php

$val = $_GET['selectvalue'];

$framework1 = array('Laravel','Symfony','CodeIgniter','CakePHP','Phalcon');
$framework2 = array('React','Vue','Angular','Ember','Backbone');
$framework3 = array('Django','CubicWeb','TurboGears','web2py','Pyramid');

switch($val){
    case 'PHP': foreach($framework1 as $framevalue){
        echo = "<option> $framevalue </option>"
    }
    break;

    case 'JAVASCRIPT': foreach($framework1 as $framevalue){
        echo = "<option> $framevalue </option>"
    }
    break;
    
    case 'PYTHON': foreach($framework1 as $framevalue){
        echo = "<option> $framevalue </option>"
    }
    break;

    default: echo "No data has been selected";
    break;
}

?>