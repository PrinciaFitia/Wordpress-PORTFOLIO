<?php
/**
 * Template Name: Preview Solace Sitebuilder
 * Description: Empty Template for Site Builder.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$is_elementor_editor = \Elementor\Plugin::$instance->editor->is_edit_mode();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();

                the_content();

            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </main>
</div>

<?php
if (!$is_elementor_editor) {
    wp_footer();
}
?>
</body>
</html>
