<?php
// This file is generated. Do not modify it manually.
return array(
	'outermost-mega-menu' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'outermost/mega-menu',
		'version' => '0.1.0',
		'title' => 'Mega Menu',
		'category' => 'design',
		'description' => 'Add a mega menu to your navigation.',
		'parent' => array(
			'core/navigation'
		),
		'example' => array(
			
		),
		'attributes' => array(
			'label' => array(
				'type' => 'string'
			),
			'description' => array(
				'type' => 'string'
			),
			'title' => array(
				'type' => 'string'
			),
			'menuSlug' => array(
				'type' => 'string'
			),
			'disableWhenCollapsed' => array(
				'type' => 'boolean'
			),
			'collapsedUrl' => array(
				'type' => 'string'
			),
			'justifyMenu' => array(
				'type' => 'string'
			),
			'width' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false,
			'interactivity' => true,
			'renaming' => false,
			'reusable' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'__experimentalSlashInserter' => true
		),
		'textdomain' => 'mega-menu-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js',
		'viewStyle' => 'file:./index.css'
	)
);
