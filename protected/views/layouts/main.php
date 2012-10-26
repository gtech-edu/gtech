<html lang="pt-BR">
<head>

<meta charset="UTF-8">		
<meta name="language" content="pt-BR" />

	<!--[if  IE 9]>

 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

  <![endif]-->
  
    <!--[if (IE 7)|(IE 8)]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>
   (function() {
      var link = document.createElement("link");
      link.rel = "stylesheet";
      link.href = "css/style_ie.css";
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
		<link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.less" rel="stylesheet/less">
  		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/elements.less" rel="stylesheet/less">


		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<!-- The 1140px Grid - http://cssgrid.net/ -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/1140.css" type="text/css" media="screen" />
	
	<!-- Scripts -->
	
		
	
	<title><?php echo CHtml::encode("GTech"); ?></title>
<?php 
		if(isset($_GET["id"]))
			$id_pagina = $_GET["id"];
		 else{
		 	$id_pagina = 0;
		 }
?>	
	
	<script type="text/javascript">
			$(function(){
			
				$('.aba-href').hover(
					function() { $(this).addClass('current'); }, 
					function() {
						 id = <?php echo $id_pagina;?>;
						 $(this).removeClass('current');
						 $("#" + id).addClass('current');

					 }
				);
				
			});
		</script>
		
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
		
<?php 
			Yii::app()->clientScript->registerScript('abas', "	
		
			$(document).ready(
			function(){
			
				
				id = \"{$id_pagina}\"
				$('.aba-href').removeClass('current');
				$('#' + id).addClass('current');
					
			return false;
					
		});");
?>
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
   		<li><?php echo CHtml::link(CHtml::encode("Home"), array("/home/index"), array("class"=>"aba-href", "id"=>'home'));?></li>
   <?php foreach($paginas as $p):?>
     	<li><?php echo CHtml::link(CHtml::encode($p->titulo), array("pagina/view", 'id'=>$p->cod_pagina), array("class"=>"aba-href", "id"=>$p->cod_pagina));?></li>
    <?php endforeach;?>
    
    <!-- Link para a página em outra língua -->
     <?php if(Yii::app()->language == 'pt'):  //Link e bandeira para a página em inglês ?>
	 	<li style="float: right"><?php echo CHtml::link($enFlag,"#", array("submit"=>array('/home/index'), 'params'=>array('_lang'=>'en'))); ?></li>
	<?php elseif (Yii::app()->language == 'en') :  //Link e bandeira para a página em português ?>				
		<li style="float: right"><?php echo CHtml::link($ptFlag,"#", array("submit"=>array('/home/index'), 'params'=>array('_lang'=>'pt'))); ?></li>
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
          <div id="FooterTwo">
          <?php if(Yii::app()->user->isGuest):?>
				<?php echo CHtml::link("Login", array("site/login"));?>
			<?php else:?>
				<?php echo CHtml::link("Gerenciar Site", array("pagina/admin"));?> <b>::</b>
				<?php echo CHtml::link("Logout (" .Yii::app()->user->name .")", array("site/logout"));?>
			<?php endif;?>
		</div> 
		  
     <div id="FooterTree">
	UFRGS - Universidade Federal do Rio Grande do Sul		 
     </div>
	</div>
   </footer>
   <!--end footer-->
</div><!-- end bg -->

<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-mediaqueries.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js"></script>		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
</body>
</html>
