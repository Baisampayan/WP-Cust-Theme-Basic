<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

// Creating Custom Action Hooks
function after_pagination() {
    echo "Subscribe For Latest Updates";
}
add_action( 'myfirsttheme_after_pagination', 'after_pagination' );

?>