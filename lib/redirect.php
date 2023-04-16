<?php

function redirect_page_to_404($template)
{
    if (is_page(array(19,17,23,21))) {
        $new_template = locate_template(array('404.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'redirect_page_to_404');


?>