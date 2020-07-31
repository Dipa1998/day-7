<?php
$food= array('Healthy' => array('Salad','Vegetables','Pasta' ),'Unhealthy'=>  array('Pizza','Ice cream' ));
foreach ($food as $element=> $inner_element) {
	echo $element.'<br>';
}
?>