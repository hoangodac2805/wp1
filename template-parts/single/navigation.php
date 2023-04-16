<?php
$prev = get_previous_post();
$next = get_next_post();
?>
<?php if ($prev || $next) { ?>
    <ul class="groupbtn">
        <?php if ($prev) { ?>
            <li class="prev_link"><a href="<?php the_permalink($prev->ID) ?>">Prev</a></li>
        <?php } ?>
        <?php if ($next) { ?>
            <li class="next_link"><a href="<?php the_permalink($next->ID) ?>">Next</a></li>
        <?php } ?>
     
    </ul>
<?php }  ?>