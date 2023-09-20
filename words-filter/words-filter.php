<?php
/*
    Plugin Name: Word fitler
    Description: Filter words on wordpress home page.
    Version: 1.0
    Author: Manirmp
    Author URI: www.manirmp.ir
*/
define('WF_DIR',plugin_dir_path(__FILE__)); // file path
define('WF_URL',plugin_dir_url(__FILE__)); // file url adress
define('WF_INC',WF_DIR.'/inc/'); // includes path


function wf_filter_words($content){
    $wordOne = 'Lorem';
    $wordOneReplacement = '<a href="www.google.com">LINK</a>';
    // replace link with lorem word
    $content = preg_replace("/{$wordOne}/",$wordOneReplacement,$content);
    $wordTwo = 'text';
    // replace noting with text word
    $content  = preg_replace("/{$wordTwo}/","",$content);
    $wordThree = "dummy";
    $wordLenght = mb_strlen($wordThree); // Get word lenght
    // replace dummy with lorem Word
    $content  = preg_replace("/{$wordThree}/",str_repeat('#',$wordLenght),$content);
    return $content;
}
add_filter('the_content','wf_filter_words'); // filter on the_content