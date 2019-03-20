<?php
/**
 * Increase the max value of Show Hint option in General Settings of Quiz
 */
add_filter( 'learn_press_quiz_general_meta_box', 'my_callback_filter_learn_press_quiz_general_meta_box' );
function my_callback_filter_learn_press_quiz_general_meta_box($meta){
    for($i = 0; $i<sizeof($meta['fields']); $i++){
        if($meta['fields'][$i]['id'] == '_lp_show_hint'){
            $meta['fields'][$i]['max']  = 200;
        }
    }
}