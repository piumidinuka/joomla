    <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
			$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$ac = htmlspecialchars($tplparams->get('ac'));
	$hcl = htmlspecialchars($tplparams->get('hcl'));
	$hic = htmlspecialchars($tplparams->get('hic'));
	$slide1 = htmlspecialchars($tplparams->get('slide1'));
	$slide2 = htmlspecialchars($tplparams->get('slide2'));
	$slide3 = htmlspecialchars($tplparams->get('slide3'));
	$slide4 = htmlspecialchars($tplparams->get('slide4'));
	$slide5 = htmlspecialchars($tplparams->get('slide5'));
	$fc = htmlspecialchars($tplparams->get('fc'));
	$tc = htmlspecialchars($tplparams->get('tc'));
	$gc = htmlspecialchars($tplparams->get('gc'));
	$pc = htmlspecialchars($tplparams->get('pc'));
	$dnb = htmlspecialchars($tplparams->get('dnb'));
	$dsb = htmlspecialchars($tplparams->get('dsb'));
	$dfb = htmlspecialchars($tplparams->get('dfb'));
	$db = htmlspecialchars($tplparams->get('db'));

        }
    ?>