<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Recipe Overview'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Recipe');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_racletterecipe_domain_model_categorypreparation', 'EXT:raclette_recipe/Resources/Private/Language/locallang_csh_tx_racletterecipe_domain_model_categorypreparation.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_racletterecipe_domain_model_categorypreparation');
$GLOBALS['TCA']['tx_racletterecipe_domain_model_categorypreparation'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:raclette_recipe/Resources/Private/Language/locallang_db.xlf:tx_racletterecipe_domain_model_categorypreparation',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/CategoryPreparation.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_racletterecipe_domain_model_categorypreparation.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_racletterecipe_domain_model_categoryingredients', 'EXT:raclette_recipe/Resources/Private/Language/locallang_csh_tx_racletterecipe_domain_model_categoryingredients.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_racletterecipe_domain_model_categoryingredients');
$GLOBALS['TCA']['tx_racletterecipe_domain_model_categoryingredients'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:raclette_recipe/Resources/Private/Language/locallang_db.xlf:tx_racletterecipe_domain_model_categoryingredients',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/CategoryIngredients.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_racletterecipe_domain_model_categoryingredients.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_racletterecipe_domain_model_recipe', 'EXT:raclette_recipe/Resources/Private/Language/locallang_csh_tx_racletterecipe_domain_model_recipe.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_racletterecipe_domain_model_recipe');
$GLOBALS['TCA']['tx_racletterecipe_domain_model_recipe'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:raclette_recipe/Resources/Private/Language/locallang_db.xlf:tx_racletterecipe_domain_model_recipe',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,portions,ingredients,preparation,nutrition,image_big,image_thumb,recipe_score,rate_hit,date,show_on_start_page,author,category_preparation,category_ingredients,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Recipe.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_racletterecipe_domain_model_recipe.gif'
	),
);