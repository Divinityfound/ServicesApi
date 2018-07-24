<?php
    require_once(__DIR__ . '/../vendor/autoload.php');

    $args = [
    	'method' => 'random/guid',
    	'type'   => 'form_params',
    	'args'   => [
    		'key' => ''
    	]
    ];

    $api = new Divinityfound\ServicesApi\Service($args);

    echo "<pre>";
    print_r($api->call());
    echo "<pre>";
    exit;
?>