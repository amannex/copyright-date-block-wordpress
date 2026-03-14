<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'copyright-date/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'icon' => 'calendar',
		'description' => 'This block is used to add the copyright date to the footer.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true
		),
		'attributes' => array(
			'startingYear' => array(
				'type' => 'string',
				'default' => '2000'
			),
			'companyName' => array(
				'type' => 'string',
				'default' => 'XYZ Company'
			)
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
