<?php
	if ( in_category('note') ) {
		include(TEMPLATEPATH . '/single-note.php');
	}
	else {
		include(TEMPLATEPATH . '/single-basis.php');
	}
?>