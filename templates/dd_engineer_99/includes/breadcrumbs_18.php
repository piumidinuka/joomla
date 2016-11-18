<?php
function breadcrumbs_18() {
    $document = JFactory::getDocument();
    $view = $document->view;
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('breadcrumb') ? true : false;
    ?>
    <?php echo $view->position('breadcrumb', '', '18', 'breadcrumbs'); ?>
    <?php
}