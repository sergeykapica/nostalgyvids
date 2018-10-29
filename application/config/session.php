<?php defined('SYSPATH') OR die('No direct script access.');

return array(
    'native' => array(
        'name' => 'nsession',
		'encrypted' => TRUE,
        'lifetime' => 0,
    ),
	
	'cookie' => array(
        'name' => 'ncookie',
        'encrypted' => TRUE,
        'lifetime' => 0,
    ),
);
