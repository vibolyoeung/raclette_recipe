<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Reclette.' . $_EXTKEY,
	'Pi1',
	array(
		'Recipe' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Recipe' => '',
		
	)
);
