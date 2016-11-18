<?php
function breadcrumbs_20() {
    $document = JFactory::getDocument();
    $view = $document->view;
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('breadcrumb') ? true : false;
    ?>
    <?php echo $view->position('breadcrumb', '', '20', 'breadcrumbs'); ?>
    <?php
}