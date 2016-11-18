<!DOCTYPE html>
<html dir="ltr">
<head>
<?php include("$themeDir/includes/close.php"); ?>

<link href="<?php echo $document->params->get('fav'); ?>" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<!--[if lte IE 9]>
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/layout.ie.css'); ?>" media="screen"/>
<![endif]-->
<script src="<?php echo addThemeVersion($document->templateUrl . '/layout.core.js') ?>"></script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/CloudZoom.js'); ?>" type="text/javascript"></script>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if(('edit' == JRequest::getVar('layout') && 'form' == JRequest::getVar('view')) ||
        ('com_config' == JRequest::getVar('option') && 'config.display.modules' == JRequest::getVar('controller'))) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/media.css'); ?>" media="screen" />
    <script src="<?php echo addThemeVersion($document->templateUrl . '/js/template.js'); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    
</head>
<body class=" bootstrap bd-body-3  bd-pagebackground-25 bd-margins">
    <header class=" bd-headerarea-1 bd-margins">
        <div class="bd-containereffect-7 container-effect container "><section class=" bd-section-1 bd-tagstyles " id="headersection" data-section-title="headersection">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-35 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-37 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/logo.png"
<?php

$logoSrc = ob_get_clean();
$logoLink = '';

if ($themeParams->get('logoFile'))
    $logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';

if ($themeParams->get('logoLink'))
    $logoLink = $themeParams->get('logoLink');

if (!$logoLink)
    $logoLink = JUri::base(true);

?>
<a class=" bd-logo-3 animated bd-animation-13" data-animation-name="zoomIn" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-6" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a>
    </div>
</div>
	

	
		
	
    </div>
</div>
    </div>
</section></div>
	
		<div class="bd-containereffect-9 container-effect container "><section class=" bd-section-15 bd-tagstyles " id="section21" data-section-title="HOTINFO">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-14 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-18 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <p class=" bd-textblock-36 bd-content-element">



</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-16 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-customhtml-11 bd-tagstyles">
    <div class="bd-container-inner bd-content-element">



    </div>
</div>
    </div>
</div>
	
		
	
		<div class=" bd-layoutbox-2 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-socialicons-2">
    
        
    
    
    
    
    
    
</div>
    </div>
</div>
	
		<div class=" bd-layoutbox-4 bd-no-margins clearfix">
    <div class="bd-container-inner">
       
    </div>
</div>
    </div>
</div>
    </div>
</section></div>
	
		<?php
    renderTemplateFromIncludes('hmenu_1', array());
?>
</header>
	
		<section class=" bd-section-26 bd-tagstyles" id="section7" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <?php 
    renderTemplateFromIncludes('breadcrumbs_18');
?>
    </div>
</section>
	
		<div class="bd-containereffect-2 container-effect container ">
<div class="bd-contentlayout-3  bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    

                    <div class=" bd-layoutitemsbox-19 bd-flex-wide bd-no-margins">
    <div class=" bd-content-5">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('common');
    echo '<jdoc:include type="component" />';
    ?>
</div>
</div>

                    
                </div>
                
            </div>
            
        </div>

    </div>
</div></div>
	
		<footer class=" bd-footerarea-1 bd-margins">
		  <section class=" bd-section-31 bd-tagstyles" id="footer8" data-section-title="footer8">
    <div class="bd-container-inner bd-margins clearfix">
        <?php
    renderTemplateFromIncludes('joomlaposition_2');
?>
    </div>
</section>
	
		<section class=" bd-section-18 bd-tagstyles" id="rightreserved" data-section-title="rightreserved">
    <div class="bd-container-inner bd-margins clearfix">
        <p class=" bd-textblock-42 animated bd-animation-33 bd-no-margins bd-content-element" data-animation-name="lightSpeedIn" data-animation-event="scroll" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false">

<?php echo date("Y");?> © <?php echo $document->params->get('footer1'); ?>. All Rights Reserved.


</p>
    </div>
</section>
	
		<?php if ($db == 1) { ?><div class=" bd-pagefooter-3 bd-page-width ">
    <div class="bd-container-inner">
        <?php include("$themeDir/includes/config.php"); ?>
            
    </div>
</div><?php } ?>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-66 bd-icon "></span>
</a></div>
</body>
</html>