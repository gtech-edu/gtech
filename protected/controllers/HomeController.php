<?php

class HomeController extends Controller
{
		/**
	 * @return array action filters
	 */
		public $layout='//layouts/column2';


	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view',),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','updateLeft', 'updateCenter' , 'updateRight', 'updateHeader'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	
	/**
	 * Renderiza a página principal
	 */
	public function actionIndex()
	{	
		
		//Caminho para arquivos das páginas estáticas
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language );

		
		//Carrega conteudo da coluna esquerda
		$colunm_left = file_get_contents($dir .DIRECTORY_SEPARATOR  ."_colunm-left.html");
		//Carrega conteudo da coluna central
		$colunm_center = file_get_contents($dir .DIRECTORY_SEPARATOR ."_colunm-center.html");
		//Carrega conteudo da coluna direita
		$colunm_right = file_get_contents($dir .DIRECTORY_SEPARATOR ."_colunm-right.html");
		//Carrega conteudo do header	
		$header = file_get_contents($dir .DIRECTORY_SEPARATOR ."_header.html");
		
		$this->render('index', array(
						  'header'=>$header,	
						  'colunm_left'=>$colunm_left,
						  'colunm_center'=>$colunm_center,
						  'colunm_right'=>$colunm_right));
		
	}
	
	/**
	 * 
	 * Edita a coluna da esquerda da página principal
	 */
	public function actionUpdateLeft()
	{
		//Pasta para arquivo
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);
		//local do arquivo
		$file = $dir .DIRECTORY_SEPARATOR ."_colunm-left.html";
		
		//Carrega conteudo do arquivo
		$colunm_left = file_get_contents($file);

		if(isset($_POST['Pagina']))
		{	
			//Pega conteudo do arquivo
			$colunm_left = $_POST['Pagina']['conteudo'];
			//Escreve conteudo no arquivo
			$result = file_put_contents($file, $colunm_left);
			if($result)
				$this->redirect(array('/home/index')); //Redireciona para pagina principal
			
		}
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);

		$this->render('_form',array(
			'conteudo'=>$colunm_left,
			'titulo'=>"Coluna Esquerda"
		));
	}
	
	/**
	 * 
	 * Edita a coluna da esquerda da página principal
	 */
	public function actionUpdateCenter()
	{
		//Pasta para arquivo
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);
		//local do arquivo
		$file = $dir .DIRECTORY_SEPARATOR ."_colunm-center.html";
		
		//Carrega conteudo do arquivo
		$colunm_center = file_get_contents($file);

		if(isset($_POST['Pagina']))
		{	
			//Pega conteudo do arquivo
			$colunm_center = $_POST['Pagina']['conteudo'];
			//Escreve conteudo no arquivo
			$result = file_put_contents($file, $colunm_center);
			if($result)
				$this->redirect(array('/home/index')); //Redireciona para pagina principal
			
		}
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);

		$this->render('_form',array(
			'conteudo'=>$colunm_center,
			'titulo'=>"Coluna Central"
		));
	}
	
	/**
	 * 
	 * Edita a coluna da esquerda da página principal
	 */
	public function actionUpdateRight()
	{
		//Pasta para arquivo
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);
		//local do arquivo
		$file = $dir .DIRECTORY_SEPARATOR ."_colunm-right.html";
		
		//Carrega conteudo do arquivo
		$colunm_right = file_get_contents($file);

		if(isset($_POST['Pagina']))
		{	
			//Pega conteudo do arquivo
			$colunm_right = $_POST['Pagina']['conteudo'];
			//Escreve conteudo no arquivo
			$result = file_put_contents($file, $colunm_right);
			if($result)
				$this->redirect(array('/home/index')); //Redireciona para pagina principal
			
		}
		$dir = Yii::getPathOfAlias('application.data.pages');

		$this->render('_form',array(
			'conteudo'=>$colunm_right,
			'titulo'=>"Coluna Direita"
		));
	}
	
/**
	 * 
	 * Edita a coluna da esquerda da página principal
	 */
	public function actionUpdateHeader()
	{
		//Pasta para arquivo
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);
		//local do arquivo
		$file = $dir .DIRECTORY_SEPARATOR ."_header.html";
		
		
		
		//Carrega conteudo do arquivo
		$header_text = file_get_contents($file);

		if(isset($_POST['Pagina']))
		{	
			//Pega conteudo do arquivo
			$header_text = $_POST['Pagina']['conteudo'];
			//$purifier = new CHtmlPurifier();
			//$header_text = $purifier->purify($header_text);
			//Escreve conteudo no arquivo
			$result = file_put_contents($file, $header_text);
			if($result)
				$this->redirect(array('/home/index')); //Redireciona para pagina principal
			
		}
		$dir = Yii::getPathOfAlias('application.data.pages.' .Yii::app()->language);

		$this->render('_form',array(
			'conteudo'=>$header_text,
			'titulo'=>"Texto do Cabeçalho"
		));
	}
	
}