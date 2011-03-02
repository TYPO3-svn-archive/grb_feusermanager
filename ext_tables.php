<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');




	/**
	* Registers a Backend Module
	*/
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'user',
		'grb_feusermanager',	// Submodule key
		'',						// Position
		array(
			'FrontendUser' => 'listNew, listAccepted, listRejected, listActive, moveFrontendUserToPid, moveAllFrontendUserToPid, csvExport',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_grb_feusermanager.xml',
		)
	);


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FE-User Manager');


$tempColumns = array (
    'tx_grbfeusermanager_language' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_language',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_birthday' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_birthday',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_nickname' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_nickname',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_professional' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_professional',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_company_street' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_company_street',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_company_zip' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_company_zip',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_company_city' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_company_city',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_would_newsletter' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_would_newsletter',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
    'tx_grbfeusermanager_agrees_agb' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:grb_feusermanager/locallang_db.xml:fe_users.tx_grbfeusermanager_agrees_agb',        
        'config' => array (
            'type' => 'input',    
            'size' => '30',
        )
    ),
);


t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','tx_grbfeusermanager_language;;;;1-1-1, tx_grbfeusermanager_birthday, tx_grbfeusermanager_nickname, tx_grbfeusermanager_professional, tx_grbfeusermanager_company_street, tx_grbfeusermanager_company_zip, tx_grbfeusermanager_company_city, tx_grbfeusermanager_would_newsletter, tx_grbfeusermanager_agrees_agb');
?>