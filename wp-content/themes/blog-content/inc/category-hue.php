<?php

/**
 * Enqueue WordPress color picker for category edit screen.
 */
function blog_content_enqueue_category_color_picker( $hook ) {
    if ( 'edit-tags.php' === $hook || 'term.php' === $hook ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'blog-content-category-color-picker', get_template_directory_uri() . '/assets/js/category-hue.min.js', array( 'wp-color-picker' ), false, true );
    }
}
add_action( 'admin_enqueue_scripts', 'blog_content_enqueue_category_color_picker' );

/**
 * Add field to "Add Category" form
 */
function blog_content_custom_category_hue_add_field() {
    ?>
    <div class="form-field">
        <label for="blog_content_custom_category_hue"><?php esc_html_e( 'Category Color', 'blog-content' ); ?></label>
        <input type="text" name="blog_content_custom_category_hue" id="blog_content_custom_category_hue" value="" class="custom-category-color-picker" />
        <p class="description"><?php esc_html_e( 'Select a color for this category.', 'blog-content' ); ?></p>
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'blog_content_custom_category_hue_add_field' );

/**
 * Add field to "Edit Category" form
 */
function blog_content_custom_category_hue_edit_field( $term ) {
    $color = get_term_meta( $term->term_id, 'blog_content_custom_category_hue', true );
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="blog_content_custom_category_hue"><?php esc_html_e( 'Category Color', 'blog-content' ); ?></label></th>
        <td>
            <input type="text" name="blog_content_custom_category_hue" id="blog_content_custom_category_hue" value="<?php echo esc_attr( $color ); ?>" class="custom-category-color-picker" />
            <p class="description"><?php esc_html_e( 'Select a color for this category.', 'blog-content' ); ?></p>
        </td>
    </tr>
    <?php
}
add_action( 'category_edit_form_fields', 'blog_content_custom_category_hue_edit_field' );

/**
 * Save category color
 */
function blog_content_save_category_color( $term_id ) {
    if ( isset( $_POST['blog_content_custom_category_hue'] ) ) {
        update_term_meta( $term_id, 'blog_content_custom_category_hue', sanitize_hex_color( $_POST['blog_content_custom_category_hue'] ) );
    }
}
add_action( 'created_category', 'blog_content_save_category_color' );
add_action( 'edited_category', 'blog_content_save_category_color' );
