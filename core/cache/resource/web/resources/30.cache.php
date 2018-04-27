<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 30,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Поиск',
    'longtitle' => 'Поиск по сайту',
    'description' => '',
    'alias' => 'poisk',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!SimpleSearch]]',
    'richtext' => 0,
    'template' => 5,
    'menuindex' => 11,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1524508794,
    'editedby' => 1,
    'editedon' => 1524508821,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1524508740,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'poisk.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
	<base href="[[!++site_url]]" />
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/site/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/site/css/tiny.css">
	<link href="assets/site/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href=\'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic\' rel=\'stylesheet\' type=\'text/css\'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/site/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/site/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/site/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/site/js/animate.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/site/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
</head>
<body>
<!-- PRELOADER -->
<img id="preloader" src="assets/site/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="/" ><img src="assets/site/images/logo.png" alt="Quo-Group"></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
					    [[!$simSearch]]
					    
						
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
					    <nav class="navmenu center">
					    <ul  class=""><li class="first scroll_btn1"><a href="/" >Главная</a></li><li  class="scroll_btn1 sub-menu"><a href="uslugi/" >Услуги</a><ul  class="laval-menu"><li  class="first scroll_btn2 sub-menu"><a href="uslugi/audit-i-analitiki/" >Аудит и аналитики</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/audit-i-analitiki/texnicheskij-audit.html" >Технический аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/marketingovyij-audit.html" >Маркетинговый аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/poiskovyij-seo-audit.html" >Поисковый  seo аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/yuzabiliti-audit.html" >Юзабилити  аудит</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/prodvizhenie-sajtov/" >Продвижение сайтов</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/seo-optimizacziya.html" >SEO оптимизация</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html" >Контекстная реклама</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/smm,-smo,-sem.html" >SMM, SMO, SEM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/e-mail-marketing.html" >e-mail маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/serm.html" >SERM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/partnerskij-marketing.html" >Партнерский маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekst-marketing.html" >Контекст маркетинг</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/razrabotka/" >Разработка</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/razrabotka/razrabotka-sajta.html" >Разработка сайта</a></li></ul></li><li class="scroll_btn2"><a href="uslugi/dizajn.html" >Дизайн</a></li><li class="scroll_btn2"><a href="uslugi/fotografiya.html" >Фотография</a></li></ul></li><li class="scroll_btn1"><a href="agentstvo.html" >Агентство</a></li><li class="scroll_btn1"><a href="kejsyi/" >Кейсы</a></li><li class="scroll_btn1"><a href="blog/" >Блог</a></li><li class="scroll_btn1"><a href="kontaktyi.html" >Контакты</a></li></ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header>
		<!-- //HEADER -->
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h1>Поиск по сайту</h1>
				<p></p>
			</div>
		</section><!-- //BREADCRUMBS -->
		<!-- content -->
		<!-- BLOG -->
		<!-- PORTFOLIO -->
		<section id="portfolio">
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
					[[!SimpleSearch]]
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //PORTFOLIO -->
		
	   [[$formFooter__]]
	</div>
	<!-- FOOTER -->
	<section id="contacts" style="min-height: 699px;">
</section>
<footer>
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="footer_quo">
			    <div class="logo_f"> <a href=""> <img src="assets/site/images/logo.png" alt=""></a> </div>
			    <div class="address_f">ул.Грибоедова д.57, г.Рязань, 390 000</div>
			    <div class="phone_f"><a href="tel:+7(4912)50-45-40">+7(4912)50-45-40</a></div>
			    <div class="email_f"><a href="mailto:info@quo-group.ru">info@quo-group.ru</a></div>
			    <div class="social_f"></div>
			    <div class="copyright">© 2018</div>
			</div>
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</footer>
	<!-- //FOOTER -->
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->
</div>

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$scripts]]' => '<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/site/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/site/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/site/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/site/js/animate.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/site/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>',
    '[[$head]]' => '<head>
	<base href="[[!++site_url]]" />
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/site/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/site/css/tiny.css">
	<link href="assets/site/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href=\'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic\' rel=\'stylesheet\' type=\'text/css\'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/site/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/site/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/site/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/site/js/animate.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/site/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
</head>',
    '[[pdoMenu?
&level=`3`
&parents=`0`
&firstClass=`first`
&lastClass=`0`
&parentClass=`sub-menu`
&innerClass =`laval-menu`
&levelClass=`scroll_btn`
&tplOuter=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>` 
&tplInner=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>`
&tplParentRow=`@INLINE <li [[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
]]' => '<ul  class=""><li class="first scroll_btn1"><a href="/" >Главная</a></li><li  class="scroll_btn1 sub-menu"><a href="uslugi/" >Услуги</a><ul  class="laval-menu"><li  class="first scroll_btn2 sub-menu"><a href="uslugi/audit-i-analitiki/" >Аудит и аналитики</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/audit-i-analitiki/texnicheskij-audit.html" >Технический аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/marketingovyij-audit.html" >Маркетинговый аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/poiskovyij-seo-audit.html" >Поисковый  seo аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/yuzabiliti-audit.html" >Юзабилити  аудит</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/prodvizhenie-sajtov/" >Продвижение сайтов</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/seo-optimizacziya.html" >SEO оптимизация</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html" >Контекстная реклама</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/smm,-smo,-sem.html" >SMM, SMO, SEM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/e-mail-marketing.html" >e-mail маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/serm.html" >SERM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/partnerskij-marketing.html" >Партнерский маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekst-marketing.html" >Контекст маркетинг</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/razrabotka/" >Разработка</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/razrabotka/razrabotka-sajta.html" >Разработка сайта</a></li></ul></li><li class="scroll_btn2"><a href="uslugi/dizajn.html" >Дизайн</a></li><li class="scroll_btn2"><a href="uslugi/fotografiya.html" >Фотография</a></li></ul></li><li class="scroll_btn1"><a href="agentstvo.html" >Агентство</a></li><li class="scroll_btn1"><a href="kejsyi/" >Кейсы</a></li><li class="scroll_btn1"><a href="blog/" >Блог</a></li><li class="scroll_btn1"><a href="kontaktyi.html" >Контакты</a></li></ul>',
    '[[$mainMenu]]' => '<ul  class=""><li class="first scroll_btn1"><a href="/" >Главная</a></li><li  class="scroll_btn1 sub-menu"><a href="uslugi/" >Услуги</a><ul  class="laval-menu"><li  class="first scroll_btn2 sub-menu"><a href="uslugi/audit-i-analitiki/" >Аудит и аналитики</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/audit-i-analitiki/texnicheskij-audit.html" >Технический аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/marketingovyij-audit.html" >Маркетинговый аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/poiskovyij-seo-audit.html" >Поисковый  seo аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/yuzabiliti-audit.html" >Юзабилити  аудит</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/prodvizhenie-sajtov/" >Продвижение сайтов</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/seo-optimizacziya.html" >SEO оптимизация</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html" >Контекстная реклама</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/smm,-smo,-sem.html" >SMM, SMO, SEM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/e-mail-marketing.html" >e-mail маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/serm.html" >SERM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/partnerskij-marketing.html" >Партнерский маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekst-marketing.html" >Контекст маркетинг</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/razrabotka/" >Разработка</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/razrabotka/razrabotka-sajta.html" >Разработка сайта</a></li></ul></li><li class="scroll_btn2"><a href="uslugi/dizajn.html" >Дизайн</a></li><li class="scroll_btn2"><a href="uslugi/fotografiya.html" >Фотография</a></li></ul></li><li class="scroll_btn1"><a href="agentstvo.html" >Агентство</a></li><li class="scroll_btn1"><a href="kejsyi/" >Кейсы</a></li><li class="scroll_btn1"><a href="blog/" >Блог</a></li><li class="scroll_btn1"><a href="kontaktyi.html" >Контакты</a></li></ul>',
    '[[$header]]' => '<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="/" ><img src="assets/site/images/logo.png" alt="Quo-Group"></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
					    [[!$simSearch]]
					    
						
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
					    <nav class="navmenu center">
					    <ul  class=""><li class="first scroll_btn1"><a href="/" >Главная</a></li><li  class="scroll_btn1 sub-menu"><a href="uslugi/" >Услуги</a><ul  class="laval-menu"><li  class="first scroll_btn2 sub-menu"><a href="uslugi/audit-i-analitiki/" >Аудит и аналитики</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/audit-i-analitiki/texnicheskij-audit.html" >Технический аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/marketingovyij-audit.html" >Маркетинговый аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/poiskovyij-seo-audit.html" >Поисковый  seo аудит</a></li><li class="scroll_btn3"><a href="uslugi/audit-i-analitiki/yuzabiliti-audit.html" >Юзабилити  аудит</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/prodvizhenie-sajtov/" >Продвижение сайтов</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/seo-optimizacziya.html" >SEO оптимизация</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekstnaya-reklama.html" >Контекстная реклама</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/smm,-smo,-sem.html" >SMM, SMO, SEM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/e-mail-marketing.html" >e-mail маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/serm.html" >SERM</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/partnerskij-marketing.html" >Партнерский маркетинг</a></li><li class="scroll_btn3"><a href="uslugi/prodvizhenie-sajtov/kontekst-marketing.html" >Контекст маркетинг</a></li></ul></li><li  class="scroll_btn2 sub-menu"><a href="uslugi/razrabotka/" >Разработка</a><ul  class="laval-menu"><li class="first scroll_btn3"><a href="uslugi/razrabotka/razrabotka-sajta.html" >Разработка сайта</a></li></ul></li><li class="scroll_btn2"><a href="uslugi/dizajn.html" >Дизайн</a></li><li class="scroll_btn2"><a href="uslugi/fotografiya.html" >Фотография</a></li></ul></li><li class="scroll_btn1"><a href="agentstvo.html" >Агентство</a></li><li class="scroll_btn1"><a href="kejsyi/" >Кейсы</a></li><li class="scroll_btn1"><a href="blog/" >Блог</a></li><li class="scroll_btn1"><a href="kontaktyi.html" >Контакты</a></li></ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header>',
    '[[$breadcrumbs]]' => '<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h1>Поиск по сайту</h1>
				<p></p>
			</div>
		</section><!-- //BREADCRUMBS -->',
    '[[Year]]' => '2018',
    '[[$footer]]' => '<section id="contacts" style="min-height: 699px;">
</section>
<footer>
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="footer_quo">
			    <div class="logo_f"> <a href=""> <img src="assets/site/images/logo.png" alt=""></a> </div>
			    <div class="address_f">ул.Грибоедова д.57, г.Рязань, 390 000</div>
			    <div class="phone_f"><a href="tel:+7(4912)50-45-40">+7(4912)50-45-40</a></div>
			    <div class="email_f"><a href="mailto:info@quo-group.ru">info@quo-group.ru</a></div>
			    <div class="social_f"></div>
			    <div class="copyright">© 2018</div>
			</div>
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</footer>',
    '[[%sisea.search? &namespace=`sisea` &topic=`default`]]' => 'Поиск',
    '[[%sisea.no_results? &query=``]]' => 'По вашему запросу ничего не найдено. Попробуйте ввести похожие по смыслу слова, чтобы получить лучший результат.',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<head>
	<base href="[[!++site_url]]" />
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="[[*description]]">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/site/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/site/css/tiny.css">
	<link href="assets/site/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href=\'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic\' rel=\'stylesheet\' type=\'text/css\'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	[[$scripts]]
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
	<base href="[[!++site_url]]" />
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="[[*description]]">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="assets/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets/site/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/site/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/site/css/tiny.css">
	<link href="assets/site/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href=\'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic\' rel=\'stylesheet\' type=\'text/css\'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	[[$scripts]]
</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/site/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/site/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/site/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/site/js/animate.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/site/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/site/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/site/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/site/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/site/js/animate.js" type="text/javascript"></script>
	<script src="assets/site/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/site/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="/" ><img src="assets/site/images/logo.png" alt="Quo-Group"></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
					    [[!$simSearch]]
					    
						
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
					    <nav class="navmenu center">
					    [[$mainMenu]]
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="/" ><img src="assets/site/images/logo.png" alt="Quo-Group"></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
					    [[!$simSearch]]
					    
						
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
					    <nav class="navmenu center">
					    [[$mainMenu]]
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'mainMenu' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '[[pdoMenu?
&level=`3`
&parents=`0`
&firstClass=`first`
&lastClass=`0`
&parentClass=`sub-menu`
&innerClass =`laval-menu`
&levelClass=`scroll_btn`
&tplOuter=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>` 
&tplInner=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>`
&tplParentRow=`@INLINE <li [[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[pdoMenu?
&level=`3`
&parents=`0`
&firstClass=`first`
&lastClass=`0`
&parentClass=`sub-menu`
&innerClass =`laval-menu`
&levelClass=`scroll_btn`
&tplOuter=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>` 
&tplInner=`@INLINE <ul [[+classes]]>[[+wrapper]]</ul>`
&tplParentRow=`@INLINE <li [[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h1>[[*longtitle:default=`[[*pagetitle]]`]]</h1>
				<p>[[*description]]</p>
			</div>
		</section><!-- //BREADCRUMBS -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h1>[[*longtitle:default=`[[*pagetitle]]`]]</h1>
				<p>[[*description]]</p>
			</div>
		</section><!-- //BREADCRUMBS -->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '<section id="contacts" style="min-height: 699px;">
</section>
<footer>
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="footer_quo">
			    <div class="logo_f"> <a href=""> <img src="assets/site/images/logo.png" alt=""></a> </div>
			    <div class="address_f">ул.Грибоедова д.57, г.Рязань, 390 000</div>
			    <div class="phone_f"><a href="tel:+7(4912)50-45-40">+7(4912)50-45-40</a></div>
			    <div class="email_f"><a href="mailto:info@quo-group.ru">info@quo-group.ru</a></div>
			    <div class="social_f"></div>
			    <div class="copyright">© [[Year]]</div>
			</div>
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section id="contacts" style="min-height: 699px;">
</section>
<footer>
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row" data-appear-top-offset="-100" data-animated="fadeInUp">
			<div class="footer_quo">
			    <div class="logo_f"> <a href=""> <img src="assets/site/images/logo.png" alt=""></a> </div>
			    <div class="address_f">ул.Грибоедова д.57, г.Рязань, 390 000</div>
			    <div class="phone_f"><a href="tel:+7(4912)50-45-40">+7(4912)50-45-40</a></div>
			    <div class="email_f"><a href="mailto:info@quo-group.ru">info@quo-group.ru</a></div>
			    <div class="social_f"></div>
			    <div class="copyright">© [[Year]]</div>
			</div>
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'simSearch' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'simSearch',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '[[!SimpleSearchForm? &landing=`30` &tpl=`searchTpl`]]
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!SimpleSearchForm? &landing=`30` &tpl=`searchTpl`]]
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Year' => 
      array (
        'fields' => 
        array (
          'id' => 36,
          'source' => 2,
          'property_preprocess' => false,
          'name' => 'Year',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => 'echo date(\'Y\');',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'echo date(\'Y\');',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 2,
          'name' => 'images',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/site/images/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/site/images/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 33,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'SimpleSearch' => 
      array (
        'fields' => 
        array (
          'id' => 32,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearch',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractSource = $modx->getOption(\'extractSource\',$scriptProperties,\'content\');
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$tvPrefix = $modx->getOption(\'tvPrefix\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$addSearchToLink = intval($modx->getOption(\'addSearchToLink\',$scriptProperties,"0"));
$searchInLinkName = $modx->getOption(\'searchInLinkName\',$scriptProperties,"search");

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $args = \'\';
            if ($addSearchToLink) {
                $args = array($searchInLinkName => $searchString);
            }
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx,$args);
        }
        if ($showExtract) {
            $extract = $searchString;
            if (array_key_exists($extractSource, $resourceArray)) {
                $text = $resourceArray[$extractSource];
            } else {
                $text = $modx->runSnippet($extractSource, $resourceArray);
            }
            $extract = $search->createExtract($text,$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode($outputSeparator,$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchResult',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения содержимого каждого отдельного результата поиска.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'sisea.containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchResults',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк который будет использован как шаблон обёртка для результатов поиска, разбивки на страницы и сообщений.',
              'area_trans' => '',
            ),
            'useAllWords' => 
            array (
              'name' => 'useAllWords',
              'desc' => 'sisea.useallwords_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Если включено, будет искать только результаты в которых есть все указанные в строке поиска слова.',
              'area_trans' => '',
            ),
            'maxWords' => 
            array (
              'name' => 'maxWords',
              'desc' => 'sisea.maxwords_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 7,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Максимальное количество слов по которым будет происходить поиск. Применяется только если useAllWords выключен.',
              'area_trans' => '',
            ),
            'minChars' => 
            array (
              'name' => 'minChars',
              'desc' => 'sisea.minchars_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The minimum number of characters to trigger the search.',
              'area_trans' => '',
            ),
            'searchStyle' => 
            array (
              'name' => 'searchStyle',
              'desc' => 'sisea.searchstyle_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.partial',
                  'value' => 'partial',
                  'name' => 'Partial',
                ),
                1 => 
                array (
                  'text' => 'sisea.match',
                  'value' => 'match',
                  'name' => 'Match',
                ),
              ),
              'value' => 'partial',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'To search either with a partial LIKE search, or a relevance-based MATCH search.',
              'area_trans' => '',
            ),
            'perPage' => 
            array (
              'name' => 'perPage',
              'desc' => 'sisea.perpage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Количество результатов поиска для отображения на странице..',
              'area_trans' => '',
            ),
            'showExtract' => 
            array (
              'name' => 'showExtract',
              'desc' => 'sisea.showextract_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Показывать или нет фрагмент содержимого ресурса с найденным поисковым запросом в результатах поиска.',
              'area_trans' => '',
            ),
            'extractLength' => 
            array (
              'name' => 'extractLength',
              'desc' => 'sisea.extractlength_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 200,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Количество символов  которые будут извлечены из содержимого ресурса для показа в результатах поиска.',
              'area_trans' => '',
            ),
            'extractEllipsis' => 
            array (
              'name' => 'extractEllipsis',
              'desc' => 'sisea.extractellipsis_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '...',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Строка которая используется для обёртывания извлечённого из содержимого ресурса фрагмента. По умолчанию многоточие.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'sisea.includetvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'sisea.processtvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'highlightResults' => 
            array (
              'name' => 'highlightResults',
              'desc' => 'sisea.highlightresults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Подсвечивать или нет поисковый запрос в результатах поиска.',
              'area_trans' => '',
            ),
            'highlightClass' => 
            array (
              'name' => 'highlightClass',
              'desc' => 'sisea.highlightclass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea-highlight',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя CSS класса который будет добавляться для подсветки результатов поиска.',
              'area_trans' => '',
            ),
            'highlightTag' => 
            array (
              'name' => 'highlightTag',
              'desc' => 'sisea.highlighttag_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'span',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'HTML тег которым будет обёрнут подсвеченный поисковый запрос в результатах поиска.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'sisea.pagelimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of page links to display when rendering page navigation controls.',
              'area_trans' => '',
            ),
            'pageTpl' => 
            array (
              'name' => 'pageTpl',
              'desc' => 'sisea.pagetpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'PageLink',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк который будет использован как шаблон для ссылок в разбивке на страницы.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'sisea.pagefirsttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the first page pagination link.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'sisea.pagelasttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the last page pagination link.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'sisea.pageprevtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the previous page pagination link.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'sisea.pagenexttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk to use for the next page pagination link.',
              'area_trans' => '',
            ),
            'currentPageTpl' => 
            array (
              'name' => 'currentPageTpl',
              'desc' => 'sisea.currentpagetpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'CurrentPageLink',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк который будет использован как шаблон для ссылки на текущую страницу в разбивке на страницы.',
              'area_trans' => '',
            ),
            'pagingSeparator' => 
            array (
              'name' => 'pagingSeparator',
              'desc' => 'sisea.pagingseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' | ',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Разделитель который будет помещён между ссылками в разбивке на страницы.',
              'area_trans' => '',
            ),
            'ids' => 
            array (
              'name' => 'ids',
              'desc' => 'sisea.ids_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список идентификаторов ресурсов которыми будет ограничен поиск.',
              'area_trans' => '',
            ),
            'idType' => 
            array (
              'name' => 'idType',
              'desc' => 'sisea.idtype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.parents',
                  'value' => 'parents',
                  'name' => 'Parents',
                ),
                1 => 
                array (
                  'text' => 'sisea.documents',
                  'value' => 'documents',
                  'name' => 'Documents',
                ),
              ),
              'value' => 'parents',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Тип ограничения для параметра ids. Если parents, в поиске будут участвовать все дочернии документы указанного родителя. Если documents, в поиске будут участвовать только ресурсы с указанными идентификаторами.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'sisea.exclude_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude from search eg. "10,15,19". This will exclude the resources with the ID "10","15" or "19".',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'sisea.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Если idtype установлен parents, глубина на которую будет происходить поиск в дереве ресурсов.',
              'area_trans' => '',
            ),
            'hideMenu' => 
            array (
              'name' => 'hideMenu',
              'desc' => 'sisea.hidemenu_desc',
              'type' => 'textfield',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.hidemenu_visible',
                  'value' => 0,
                  'name' => 'Искать в видимых',
                ),
                1 => 
                array (
                  'text' => 'sisea.hidemenu_hidden',
                  'value' => 1,
                  'name' => 'Искать в скрытых',
                ),
                2 => 
                array (
                  'text' => 'sisea.hidemenu_both',
                  'value' => 2,
                  'name' => 'Искать в скрытых и видимых',
                ),
              ),
              'value' => 2,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Включить или нет в поиск ресурсы у которых отмечен пункт &laquo;Не показывать в меню&raquo;. 0 искать только в ресурсах видимых в меню, 1 искать только в ресурсах не видимых в меню, 2 искать и в тех и в других.',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'sisea.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Контексты в которых будет происходить поиск. По умолчанию текущий контекст, если не указан другой.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'offsetIndex' => 
            array (
              'name' => 'offsetIndex',
              'desc' => 'sisea.offsetindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea_offset',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться как смещение для разбивки на страницы результатов поиска.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'sisea.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'sisea.',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The prefix for global placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
            'andTerms' => 
            array (
              'name' => 'andTerms',
              'desc' => 'sisea.andterms_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to add a logical AND between words.',
              'area_trans' => '',
            ),
            'matchWildcard' => 
            array (
              'name' => 'matchWildcard',
              'desc' => 'sisea.matchwildcard_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Enable wildcard search. Set to false to do exact searching on a search term.',
              'area_trans' => '',
            ),
            'docFields' => 
            array (
              'name' => 'docFields',
              'desc' => 'sisea.docfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle,longtitle,alias,description,introtext,content',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of specific Resource fields to search.',
              'area_trans' => '',
            ),
            'fieldPotency' => 
            array (
              'name' => 'fieldPotency',
              'desc' => 'sisea.fieldpotency_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Specify weighting of search results. Example: pagetitle:3,alias:10 will give 3 points if result is found in pagetitle, 10 points if result is found in alias.',
              'area_trans' => '',
            ),
            'urlScheme' => 
            array (
              'name' => 'urlScheme',
              'desc' => 'sisea.urlscheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.url_relative',
                  'value' => -1,
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'sisea.url_absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'sisea.url_full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => -1,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The URL scheme you want: http, https, full, abs, relative, etc. See the $modx->makeUrl() documentation. This is used when the pagination links are generated.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'sisea.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Any hooks to run post-search that can add faceted results to the search result set.',
              'area_trans' => '',
            ),
            'activeFacet' => 
            array (
              'name' => 'activeFacet',
              'desc' => 'sisea.activefacet_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'default',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The current active facet. Leave this alone unless you want a result to show from a non-standard facet derived through a postHook.',
              'area_trans' => '',
            ),
            'facetLimit' => 
            array (
              'name' => 'facetLimit',
              'desc' => 'sisea.facetlimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 5,
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The number of non-active-facet results to show on the main results page. Defaults to 5.',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'sisea.sortby_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of Resource fields to sort the results by. Leave blank to sort by relevance and score.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'sisea.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'sisea.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of directions to sort the results by. Must match the number of items in the sortBy parameter.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * SimpleSearch snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* find search index and toplaceholder setting */
$searchIndex = $modx->getOption(\'searchIndex\',$scriptProperties,\'search\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$noResultsTpl = $modx->getOption(\'noResultsTpl\',$scriptProperties,\'SearchNoResults\');

/* get search string */
if (empty($_REQUEST[$searchIndex])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => \'\',
    ));
    return $search->output($output,$toPlaceholder);
}
$searchString = $search->parseSearchString($_REQUEST[$searchIndex]);
if (!$searchString) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
    return $search->output($output,$toPlaceholder);
}

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'SearchResult\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'SearchResults\');
$showExtract = $modx->getOption(\'showExtract\',$scriptProperties,true);
$extractSource = $modx->getOption(\'extractSource\',$scriptProperties,\'content\');
$extractLength = $modx->getOption(\'extractLength\',$scriptProperties,200);
$extractEllipsis = $modx->getOption(\'extractEllipsis\',$scriptProperties,\'...\');
$highlightResults = $modx->getOption(\'highlightResults\',$scriptProperties,true);
$highlightClass = $modx->getOption(\'highlightClass\',$scriptProperties,\'sisea-highlight\');
$highlightTag = $modx->getOption(\'highlightTag\',$scriptProperties,\'span\');
$perPage = $modx->getOption(\'perPage\',$scriptProperties,10);
$pagingSeparator = $modx->getOption(\'pagingSeparator\',$scriptProperties,\' | \');
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'sisea.\');
$includeTVs = $modx->getOption(\'includeTVs\',$scriptProperties,\'\');
$processTVs = $modx->getOption(\'processTVs\',$scriptProperties,\'\');
$tvPrefix = $modx->getOption(\'tvPrefix\',$scriptProperties,\'\');
$offsetIndex = $modx->getOption(\'offsetIndex\',$scriptProperties,\'sisea_offset\');
$idx = isset($_REQUEST[$offsetIndex]) ? intval($_REQUEST[$offsetIndex]) + 1 : 1;
$postHooks = $modx->getOption(\'postHooks\',$scriptProperties,\'\');
$activeFacet = $modx->getOption(\'facet\',$_REQUEST,$modx->getOption(\'activeFacet\',$scriptProperties,\'default\'));
$activeFacet = $modx->sanitizeString($activeFacet);
$facetLimit = $modx->getOption(\'facetLimit\',$scriptProperties,5);
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$addSearchToLink = intval($modx->getOption(\'addSearchToLink\',$scriptProperties,"0"));
$searchInLinkName = $modx->getOption(\'searchInLinkName\',$scriptProperties,"search");

/* get results */
$response = $search->getSearchResults($searchString,$scriptProperties);
$placeholders = array(\'query\' => $searchString);
$resultsTpl = array(\'default\' => array(\'results\' => array(),\'total\' => $response[\'total\']));
if (!empty($response[\'results\'])) {
    /* iterate through search results */
    foreach ($response[\'results\'] as $resourceArray) {
        $resourceArray[\'idx\'] = $idx;
        if (empty($resourceArray[\'link\'])) {
            $ctx = !empty($resourceArray[\'context_key\']) ? $resourceArray[\'context_key\'] : $modx->context->get(\'key\');
            $args = \'\';
            if ($addSearchToLink) {
                $args = array($searchInLinkName => $searchString);
            }
            $resourceArray[\'link\'] = $modx->makeUrl($resourceArray[\'id\'],$ctx,$args);
        }
        if ($showExtract) {
            $extract = $searchString;
            if (array_key_exists($extractSource, $resourceArray)) {
                $text = $resourceArray[$extractSource];
            } else {
                $text = $modx->runSnippet($extractSource, $resourceArray);
            }
            $extract = $search->createExtract($text,$extractLength,$extract,$extractEllipsis);
            /* cleanup extract */
            $extract = strip_tags(preg_replace("#\\<!--(.*?)--\\>#si",\'\',$extract));
            $extract = preg_replace("#\\[\\[(.*?)\\]\\]#si",\'\',$extract);
            $extract = str_replace(array(\'[[\',\']]\'),\'\',$extract);
            $resourceArray[\'extract\'] = !empty($highlightResults) ? $search->addHighlighting($extract,$highlightClass,$highlightTag) : $extract;
        }
        $resultsTpl[\'default\'][\'results\'][] = $search->getChunk($tpl,$resourceArray);
        $idx++;
    }
}

/* load postHooks to get faceted results */
if (!empty($postHooks)) {
    $limit = !empty($facetLimit) ? $facetLimit : $perPage;
    $search->loadHooks(\'post\');
    $search->postHooks->loadMultiple($postHooks,$response[\'results\'],array(
        \'hooks\' => $postHooks,
        \'search\' => $searchString,
        \'offset\' => !empty($_GET[$offsetIndex]) ? intval($_GET[$offsetIndex]) : 0,
        \'limit\' => $limit,
        \'perPage\' => $limit,
    ));
    if (!empty($search->postHooks->facets)) {
        foreach ($search->postHooks->facets as $facetKey => $facetResults) {
            if (empty($resultsTpl[$facetKey])) {
                $resultsTpl[$facetKey] = array();
                $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
                $resultsTpl[$facetKey][\'results\'] = array();
            } else {
                $resultsTpl[$facetKey][\'total\'] = $resultsTpl[$facetKey][\'total\'] = $facetResults[\'total\'];
            }

            $idx = !empty($resultsTpl[$facetKey]) ? count($resultsTpl[$facetKey][\'results\'])+1 : 1;
            foreach ($facetResults[\'results\'] as $r) {
                $r[\'idx\'] = $idx;
                $fTpl = !empty($scriptProperties[\'tpl\'.$facetKey]) ? $scriptProperties[\'tpl\'.$facetKey] : $tpl;
                $resultsTpl[$facetKey][\'results\'][] = $search->getChunk($fTpl,$r);
                $idx++;
            }
        }
    }
}

/* set faceted results to placeholders for easy result positioning */
$output = array();
foreach ($resultsTpl as $facetKey => $facetResults) {
    $resultSet = implode($outputSeparator,$facetResults[\'results\']);
    $placeholders[$facetKey.\'.results\'] = $resultSet;
    $placeholders[$facetKey.\'.total\'] = !empty($facetResults[\'total\']) ? $facetResults[\'total\'] : 0;
    $placeholders[$facetKey.\'.key\'] = $facetKey;
}
$placeholders[\'results\'] = $placeholders[$activeFacet.\'.results\']; /* set active facet results */
$placeholders[\'total\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? $resultsTpl[$activeFacet][\'total\'] : 0;
$placeholders[\'page\'] = isset($_REQUEST[$offsetIndex]) ? ceil(intval($_REQUEST[$offsetIndex]) / $perPage) + 1 : 1;
$placeholders[\'pageCount\'] = !empty($resultsTpl[$activeFacet][\'total\']) ? ceil($resultsTpl[$activeFacet][\'total\'] / $perPage) : 1;

if (!empty($response[\'results\'])) {
    /* add results found message */
    $placeholders[\'resultInfo\'] = $modx->lexicon(\'sisea.results_found\',array(
        \'count\' => $placeholders[\'total\'],
        \'text\' => !empty($highlightResults) ? $search->addHighlighting($searchString,$highlightClass,$highlightTag) : $searchString,
    ));
    /* if perPage set to >0, add paging */
    if ($perPage > 0) {
        $placeholders[\'paging\'] = $search->getPagination($searchString,$perPage,$pagingSeparator,$placeholders[\'total\']);
    }
}
$placeholders[\'query\'] = $searchString;
$placeholders[\'facet\'] = $activeFacet;

/* output */
$modx->setPlaceholder($placeholderPrefix.\'query\',$searchString);
$modx->setPlaceholder($placeholderPrefix.\'count\',$response[\'total\']);
$modx->setPlaceholders($placeholders,$placeholderPrefix);
if (empty($response[\'results\'])) {
    $output = $search->getChunk($noResultsTpl,array(
        \'query\' => $searchString,
    ));
} else {
    $output = $search->getChunk($containerTpl,$placeholders);
}
return $search->output($output,$toPlaceholder);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);