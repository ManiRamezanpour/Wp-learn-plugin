<?php
/*
Plugin Name: Word fitler
Description: Filter words on wordpress home page.
Version: 1.0
Author: Manirmp
Author URI: www.manirmp.ir
*/
define('WF_DIR',plugin_dir_path(__FILE__));
define('WF_URL',plugin_dir_url(__FILE__));
define('WF_INC',WF_DIR.'/inc/');


function wf_filter_words($content){
    $wordOne = 'Lorem';
    $wordOneReplacement = '<a href="www.google.com">LINK</a>';
    $content = preg_replace("/{$wordOne}/",$wordOneReplacement,$content);
    $wordTwo = 'text';
    $content  = preg_replace("/{$wordTwo}/","",$content);
    $wordThree = "typesetting";
    $wordLenght = mb_strlen($wordThree);
    $content  = preg_replace("/{$wordThree}/",str_repeat('#',$wordLenght),$content);
    return $content;
}
add_filter('the_content','wf_filter_words');