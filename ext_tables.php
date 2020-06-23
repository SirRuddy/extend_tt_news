<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_extendttnews_adress' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:extend_tt_news/locallang_db.xml:tt_news.tx_extendttnews_adress',		
		'config' => array(
			'type' => 'group',	
			'internal_type' => 'db',	
			'allowed' => 'tt_address',	
			'size' => 1,	
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
	'tx_extendttnews_video' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:extend_tt_news/locallang_db.xml:tt_news.tx_extendttnews_video',		
		'config' => array(
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_extendttnews_video_discription' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:extend_tt_news/locallang_db.xml:tt_news.tx_extendttnews_video_discription',		
		'config' => array(
			'type' => 'text',
			'cols' => '30',	
			'rows' => '5',
		)
	),
);


t3lib_div::loadTCA('tt_news');
t3lib_extMgm::addTCAcolumns('tt_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_news','tx_extendttnews_adress;;;;1-1-1, tx_extendttnews_video, tx_extendttnews_video_discription');
?>