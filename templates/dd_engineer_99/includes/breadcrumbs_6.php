<?php
function breadcrumbs_6() {
    $document = JFactory::getDocument();
    $view = $document->view;
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('breadcrumb') ? true : false;
    ?>
    <?php echo $view->position('breadcrumb', '', '6', 'breadcrumbs'); ?>
    <?php
}