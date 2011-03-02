<?php

########################################################################
# Extension Manager/Repository config file for ext "grb_feusermanager".
#
# Auto generated 12-02-2011 21:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FE-User Manager',
	'description' => '',
	'category' => 'module',
	'author' => 'Juerg Langhard',
	'author_email' => 'langhard@greenbanana.ch',
	'author_company' => 'GreenBanana GmbH - www.greenbanana.ch',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:29:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"a0fd";s:14:"ext_tables.php";s:4:"d9e5";s:14:"ext_tables.sql";s:4:"1bef";s:16:"kickstarter.json";s:4:"2a41";s:16:"locallang_db.xml";s:4:"1d79";s:45:"Classes/Controller/FrontendUserController.php";s:4:"58a8";s:37:"Classes/Domain/Model/FrontendUser.php";s:4:"bc5d";s:52:"Classes/Domain/Repository/FrontendUserRepository.php";s:4:"0825";s:39:"Configuration/Kickstarter/settings.yaml";s:4:"a2db";s:34:"Configuration/TCA/FrontendUser.php";s:4:"a6cb";s:38:"Configuration/TypoScript/constants.txt";s:4:"666f";s:34:"Configuration/TypoScript/setup.txt";s:4:"c5b6";s:40:"Resources/Private/Language/locallang.xml";s:4:"76a0";s:90:"Resources/Private/Language/locallang_csh_tx_grbfeusermanager_domain_model_frontenduser.xml";s:4:"7655";s:58:"Resources/Private/Language/locallang_grb_feusermanager.xml";s:4:"a833";s:38:"Resources/Private/Layouts/default.html";s:4:"f931";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:47:"Resources/Private/Partials/Navigation/main.html";s:4:"02c7";s:55:"Resources/Private/Templates/FrontendUser/CsvExport.html";s:4:"758e";s:58:"Resources/Private/Templates/FrontendUser/ListAccepted.html";s:4:"327b";s:56:"Resources/Private/Templates/FrontendUser/ListActive.html";s:4:"5326";s:53:"Resources/Private/Templates/FrontendUser/ListNew.html";s:4:"b968";s:58:"Resources/Private/Templates/FrontendUser/ListRejected.html";s:4:"b83e";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:72:"Resources/Public/Icons/tx_grbfeusermanager_domain_model_frontenduser.gif";s:4:"905a";s:35:"Resources/Public/Scripts/backend.js";s:4:"ad47";s:35:"Resources/Public/Styles/backend.css";s:4:"eb28";s:39:"Tests/Domain/Model/FrontendUserTest.php";s:4:"55a1";}',
);

?>