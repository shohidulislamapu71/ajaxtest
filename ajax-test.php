<?php

/**
 * Template Name: Ajax Test
 */

get_header();
the_title();
the_content();?>
<form action="<?php echo home_url('/'); ?>" method="post">
    <input type="hidden" id="ajax_nonce" value="<?php echo wp_create_nonce('ajax_test') ?>">
    <label for="">Submit title</label>
    <input type="text" name="info" id="info">
    <input id="ajax-submit" type="submit" value="Submit">
</form>
<?php
get_footer();
?>