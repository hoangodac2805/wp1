<?php
require_once('lib/nav-menu.php');
require_once('lib/redirect.php');
require_once('lib/post.php');




function custom_paginate_links($link)
{
    $link = str_replace("<span class='page-numbers'>", "<a class='page-numbers' href='#'>", $link);
    $link = str_replace("<span class='page-numbers current'>", "<a class='page-numbers current' href='#'>", $link);
    $link = str_replace("<span class='page-numbers dots'>", "<a class='page-numbers dots' href='#'>", $link);
    $link = str_replace("</span>", "</a>", $link);
    return $link;
}
add_filter('paginate_links', 'custom_paginate_links');


?>