<?php
namespace frontend\controllers;

use frontend\components\Controller;

class ArticleController extends Controller{	
  
  public function actionTest()
  {
	$request = \Yii::$app->request;
    $id = $request->get('id');
    //print_r($id);
	vd("id",$id);
	
	//$data = \Yii::$app->testc->display_msg();
	$data = array('12344');
	vd('xyx', $data);
	
	
	//$token= \Yii::$app->request->getCsrfToken();
	//echo "<input type='hidden' name='name' value='".$token."'/>";
	
	//$request = \Yii::$app->request;
	$username = $request->post('username', 'abcdef');
	//vd($username);
    //var_dump($request->isGet);
	
	
	$userIP = \Yii::$app->request->userIP;  // userIP
	vd("IP", $userIP);
	
	$userHost = \Yii::$app->request->userHost; // userHost
	vd("HOST", $userHost);
	
	//$param = $request->bodyParams;
	//print_r($param);
	
	
	
	//echo 'id =>'.$id;	

  }
  
  
}

