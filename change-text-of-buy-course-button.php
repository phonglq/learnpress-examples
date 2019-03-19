<?php
/**
 * This example change text of purchase course button from 'Buy this course' to "Add to cart"
 */

add_filter('learn-press/purchase-course-button-text', 'lpex_custom_learn_press_purchase_course_button_text', 11);
function lpex_custom_learn_press_purchase_course_button_text( $text ) {
    $text = 'Add to cart';
    
    // for translate able, use commented code bellow
    //$text = __('Add to cart','text-domain');

    return $text;
}


?>