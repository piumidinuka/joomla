<?php
defined('_JEXEC') or die;
?>

<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'functions.php';
?>
<?php
echo shopFunctionsF::renderVmSubLayout('askrecomjs',array('product'=>$this->product));

$defaultTmplFile = JPATH_ROOT . '/components/com_virtuemart/views/productdetails/tmpl/default.php';
$themeTmplFile = dirname(__FILE__) . '/default_template.php';
if (file_exists($themeTmplFile)) {
?>
<!--TEMPLATE <?php echo getCurrentTemplateByType('productoverview'); ?> /-->
<?php
    require_once $themeTmplFile;
} else if (file_exists($defaultTmplFile)) {
    require_once $defaultTmplFile;
}
?>
