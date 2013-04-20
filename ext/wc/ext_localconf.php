<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'tg.' . $_EXTKEY,
	'Pi1',
	array(
		'User' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'User' => '',
		
	)
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'tg.' . $_EXTKEY,
	'Pi2',
	array(
		'User' => 'show, list',
		
	),
	// non-cacheable actions
	array(
		'User' => '',
		
	)
);

?>