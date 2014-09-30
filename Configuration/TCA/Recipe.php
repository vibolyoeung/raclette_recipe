<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$ll = 'LLL:EXT:raclette_recipe/Resources/Private/Language/locallang_db.xlf:';

$GLOBALS['TCA']['tx_racletterecipe_domain_model_recipe'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_racletterecipe_domain_model_recipe']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, portions, ingredients, preparation, nutrition, image_big, image_thumb, recipe_score, rate_hit, date, show_on_start_page, author, category_preparation, category_ingredients',
	),
	'types' => array(
		'1' => array(
			'showitem' => 'l10n_parent, l10n_diffsource,
				title;;paletteCore,;;;;2-2-2,
			 	author,
			 	date,
			 	portions,
			 	ingredients;;;richtext:rte_transform[mode=ts_links],
			 	preparation;;;richtext:rte_transform[mode=ts_links],
			 	nutrition,
			 	recipe_score,
			 	rate_hit,
			 	--div--;' . $ll . 'tx_racletterecipe.tabs.category,category_preparation,category_ingredients,
			 	--div--;' . $ll . 'tx_racletterecipe.tabs.image,image_thumb,image_big,
			 	--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime,'
		),
	),
	'palettes' => array(
		'paletteCore' => array(
			'showitem' => 'show_on_start_page, sys_language_uid, hidden,',
			'canNotCollapse' => FALSE
		),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_racletterecipe_domain_model_recipe',
				'foreign_table_where' => 'AND tx_racletterecipe_domain_model_recipe.pid=###CURRENT_PID### AND tx_racletterecipe_domain_model_recipe.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'required,trim'
			),
		),
		'portions' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.portions',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			)
		),
		'ingredients' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.ingredients',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			)
		),
		'preparation' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.preparation',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'nutrition' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.nutrition',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 3,
				'eval' => 'trim'
			),
		),
		'image_big' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.image_big',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'imageBig',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'image_thumb' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.image_thumb',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'imageThumb',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'recipe_score' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.recipe_score',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'rate_hit' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.rate_hit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'date' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'show_on_start_page' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.show_on_start_page',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'author' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.author',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'category_preparation' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.category_preparation',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_racletterecipe_domain_model_categorypreparation',
				'MM' => 'tx_racletterecipe_recipe_categorypreparation_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_racletterecipe_domain_model_categorypreparation',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'category_ingredients' => array(
			'exclude' => 1,
			'label' => $ll . 'tx_racletterecipe_domain_model_recipe.category_ingredients',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_racletterecipe_domain_model_categoryingredients',
				'MM' => 'tx_racletterecipe_recipe_categoryingredients_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_racletterecipe_domain_model_categoryingredients',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		
	),
);