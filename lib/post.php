<?php
function get_all_posts()
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 5 // Lấy tất cả các bài viết
    );
    $posts = get_posts($args);
    return $posts;
}

?>