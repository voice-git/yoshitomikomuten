<?php
if (in_category('img-big')) {
	include(TEMPLATEPATH.'/single/single-big.php');
} elseif(in_category('img-small')) {
	include(TEMPLATEPATH.'/single/single-small.php');
} else {
	include(TEMPLATEPATH.'/single/single-base.php');
}
?>
