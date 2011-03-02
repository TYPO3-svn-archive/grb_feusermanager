<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_grbfeusermanager_domain_model_frontenduser'] = array(
	'ctrl' => $TCA['tx_grbfeusermanager_domain_model_frontenduser']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'username,password,usergroup,name,first_name,middle_name,last_name,address,telephone,fax,email,title,zip,city,country,www,company,image,lastlogin,is_online,language,birthday,nickname,professional,company_street,company_zip,company_city,would_newsletter,agrees_agb',
	),
	'types' => array(
		'1' => array('showitem'	=> 'username,password,usergroup,name,first_name,middle_name,last_name,address,telephone,fax,email,title,zip,city,country,www,company,image,lastlogin,is_online,language,birthday,nickname,professional,company_street,company_zip,company_city,would_newsletter,agrees_agb'),
	),
	'palettes' => array(
		'1' => array('showitem'	=> ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude'			=> 1,
			'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config'			=> array(
				'type'					=> 'select',
				'foreign_table'			=> 'sys_language',
				'foreign_table_where'	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			)
		),
		'l18n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_grbfeusermanager_domain_model_frontenduser',
				'foreign_table_where' => 'AND tx_grbfeusermanager_domain_model_frontenduser.uid=###REC_FIELD_l18n_parent### AND tx_grbfeusermanager_domain_model_frontenduser.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'		=>array(
				'type'		=>'passthrough',
			)
		),
		't3ver_label' => array(
			'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config'		=> array(
				'type'		=>'none',
				'cols'		=> 27,
			)
		),
		'hidden' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
			)
		),
		'username' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.username',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'password' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.password',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'usergroup' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.usergroup',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'name' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.name',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'first_name' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.first_name',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'middle_name' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.middle_name',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'last_name' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.last_name',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'address' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.address',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'telephone' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.telephone',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.fax',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.email',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'title' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.title',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.zip',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.city',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'country' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.country',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'www' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.www',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.company',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.image',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lastlogin' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.lastlogin',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'is_online' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.is_online',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'language' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.language',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'birthday' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.birthday',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'nickname' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.nickname',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'professional' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.professional',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company_street' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.company_street',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company_zip' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.company_zip',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company_city' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.company_city',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'would_newsletter' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.would_newsletter',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
		'agrees_agb' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:grb_feusermanager/Resources/Private/Language/locallang_db.xml:tx_grbfeusermanager_domain_model_frontenduser.agrees_agb',
			'config'	=> array(
				'type' => 'check',
				'default' => 0
			),
		),
	),
);
?>