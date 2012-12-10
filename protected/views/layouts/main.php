<html lang="pt-BR">
<head>

<meta charset="UTF-8">		
<meta name="language" content="pt-BR" />
  
<!--[if (IE 7)|(IE 8)]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if (IE 7)|(IE 8)| (IE 9)]>
	
	<script>
	   (function() {
	      var link = document.createElement("link");
	      link.rel = "stylesheet";
	      link.href = "<?php echo Yii::app()->request->baseUrl;?>/css/style_ie.css";
	      document.getElementsByTagName("head")[0].appendChild(link);
	   })();
	</script>
<![endif]-->

	 <!-- Fav Icons -->
  	<link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" /> 
  	<link rel="shortcut icon" type="image/x-icon"  href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" />

		<!--  CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/minimalism.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

		<!-- User Styles -->
		<?php /*
		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.less" rel="stylesheet/less">
  		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/elements.less" rel="stylesheet/less">
  		*/ ?>
  			<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.min.css" rel="stylesheet">


		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<!-- The 1140px Grid - http://cssgrid.net/ -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/1140.css" type="text/css" media="screen" />
	
	<!-- Scripts -->
	
		
	
	<title><?php echo CHtml::encode("GTech"); ?></title>
		
	<!-- Google Analytics -->
	<script type="text/javascript">		
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30933094-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script type="text/javascript">
	function filebrowser(field_name, url, type, win) {
		
		fileBrowserURL = "http://gtech.ufrgs.br/pdw/index.php?filter=" + type;
				
		tinyMCE.activeEditor.windowManager.open({
			title: "PDW File Browser",
			url: fileBrowserURL,
			width: 950,
			height: 650,
			inline: 0,
			maximizable: 1,
			close_previous: 0
		},{
			window : win,
			input : field_name
		});		
	}
	
	function saveConfirm(){
	//	confirm('Voce fez alteracoes');
	}
	</script>

</head>

<body>
<div class="bg">

<!--start header-->
<div id="container">
<div class="row">
				
<?php $paginas = Pagina::model()->findAll(array('order'=>'cod_pagina'));?>
<header>
		<!-- Start logo -->
		<a href="#" id="logo"> 
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gtech.png" alt="logo">
		</a><br>
		 <!-- end logo -->

<?php //Imagens das bandeiras
			 	$enFlag = CHtml::image(Yii::app()->request->baseUrl .'/images/british_flag.png', '', array('width'=>25, 'height'=>'25'));
			 	$ptFlag = CHtml::image(Yii::app()->request->baseUrl .'/images/brazil-flag.png', '', array('width'=>25, 'height'=>'25'));
 ?>	
<div class="sixcol">	
<nav>
   <ul> <!-- Menu -->
   		<?php if(Yii::app()->language == 'pt'):  //Link e bandeira para a página em inglês ?>
   			<li><?php echo CHtml::link(CHtml::encode("Início"), array("/inicio"), array("class"=>"aba-href", "id"=>'home'));?></li>
   		<?php elseif (Yii::app()->language == 'en') :  //Link e bandeira para a página em português ?>
   			<li><?php echo CHtml::link(CHtml::encode("Home"), array("/home"), array("class"=>"aba-href", "id"=>'home'));?></li>
   		<?php endif;?>	
   <?php foreach($paginas as $p):?>
     	<li><?php echo CHtml::link(CHtml::encode($p->titulo), array("page/view", 'id'=>$p->cod_pagina), array("class"=>"aba-href", "id"=>$p->cod_pagina));?></li>
    <?php endforeach;?>
    
    <!-- Link para a página em outra língua -->
     <?php if(Yii::app()->language == 'pt'):  //Link e bandeira para a página em inglês ?>
	 	<li><?php echo CHtml::link($enFlag, array("/en"));?></li>
	<?php elseif (Yii::app()->language == 'en') :  //Link e bandeira para a página em português ?>				
		<li><?php echo CHtml::link($ptFlag, array("/pt"));?></li>
	<?php endif; ?>	
</ul> 
</nav>
</div>
<!--  fim menu -->
</header>
</div>
</div>
<!--  Fim Header -->

	<?php echo $content; ?>
	
<!--start footer-->

   <footer>
      <div class="container custom-footer">
      	<div class="row">
        <div id="FooterTwo">
          <?php if(Yii::app()->user->isGuest):?>
				<?php echo CHtml::link("Login", array("site/login"));?>
			<?php else:?>
				<?php echo CHtml::link("Gerenciar Site", array("/admin"));?> <b>::</b>
				<?php echo CHtml::link("Logout (" .Yii::app()->user->name .")", array("site/logout"));?>
			<?php endif;?>
		</div> 
		  
     <div id="FooterTree">
		UFRGS - Universidade Federal do Rio Grande do Sul		 
     </div>
 		</div> <!-- /row -->
	</div> <!-- /container -->
   </footer>
   <!--end footer-->
</div><!-- end bg -->

<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaqueries.js"></script>
		<?php /* <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js"></script> */ ?>		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
</body>
</html>
