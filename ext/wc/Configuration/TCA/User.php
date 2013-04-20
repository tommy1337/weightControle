<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_wc_domain_model_user'] = array(
	'ctrl' => $TCA['tx_wc_domain_model_user']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, firstname, lastname, date_of_birth, gender, orig_photo, start_weight, desired_weight, weight_step, meal, training_day',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, firstname, lastname, date_of_birth, gender, orig_photo, start_weight, desired_weight, weight_step, meal, training_day,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
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
				'foreign_table' => 'tx_wc_domain_model_user',
				'foreign_table_where' => 'AND tx_wc_domain_model_user.pid=###CURRENT_PID### AND tx_wc_domain_model_user.sys_language_uid IN (-1,0)',
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
		'firstname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.firstname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lastname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.lastname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date_of_birth' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.date_of_birth',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'gender' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.gender',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('Männlich', 0),
					array('Weiblich', 1),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'orig_photo' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.orig_photo',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_wc',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'start_weight' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.start_weight',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'desired_weight' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.desired_weight',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'weight_step' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.weight_step',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_wc_domain_model_weightstep',
				'foreign_field' => 'user',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'meal' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.meal',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_wc_domain_model_meal',
				'foreign_field' => 'user',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'training_day' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wc/Resources/Private/Language/locallang_db.xlf:tx_wc_domain_model_user.training_day',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_wc_domain_model_trainingday',
				'foreign_field' => 'user',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);

?>