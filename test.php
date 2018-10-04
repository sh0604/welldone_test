<?php
include_once(dirname(__FILE__)."/FX/FX.php");
include_once(dirname(__FILE__).'/FX/lib/FX_Fuzzy_Debugger.php');

//FX_Fuzzy_Debbugerを利用するように定義
// define('DEBUG_FUZZY', true);
// 基本情報
// define('SERVER','27.134.255.111');
define('SERVER','27.134.252.48');
define('PORT', 80);
define('DBTYPE','FMPro16');
define('SCHEME','http');
define('SM_ID','smzadmin');
define('SM_PASS','zae2ucs');

// 初期設定
$fx=new FX( SERVER, PORT, DBTYPE, SCHEME );
$fx->SetDBData('H-z_XM_DB', 'web_Xm_data_main');
$fx->SetDBUserPass('smzadmin','zae2ucs');
$fx->SetCharacterEncoding('UTF-8');
$fx->SetDataParamsEncoding('UTF-8');
$fx->AddDBParam("year", "==2017");
// $fx->AddDBParam('z_make_date', '=2017/01/06 10:25:44');
$result=$fx->FMFind();

print_r($result);
// FX_Fuzzy_Debbugerからデバッグメッセージを取得。
// $debugMessage = $fx->fxError;
// $debugMessage = $fx->lastDebugMessage;
//デバッグメッセージの出力。
// echo $debugMessage;



?>
