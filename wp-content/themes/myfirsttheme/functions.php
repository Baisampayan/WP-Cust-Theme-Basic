<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

// Creating Custom Action Hooks
function after_pagination() {
    echo "<br>Subscribe For Latest Updates";
}
add_action( '_themename_after_pagination', 'after_pagination', 2 );

function after_pagination2() {
    echo "Subscribe For Latest Events";
}
add_action( '_themename_after_pagination', 'after_pagination2', 1 );
?>