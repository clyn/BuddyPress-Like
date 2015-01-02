<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * bp_like_list_scripts()
 *
 * Includes the scripts required for ajax etc.
 * 
 * TODO: Begin versioning scripts, test loading in footer. to find faults and test performance differences
 *
 */
function bp_like_list_scripts() {
<<<<<<< HEAD
=======
	// Only load if the user is logged in and if they aren't in the dashboard
	if ( ! is_user_logged_in() && ! is_admin() ) {
		return;
	}
>>>>>>> 8a3df64fbb65a4bf3360000b3f002e62fd5e06f7
    wp_register_script( 'bplike-jquery' , plugins_url( '/assets/js/bp-like.min.js' , dirname( __FILE__ ) ) , BP_LIKE_VERSION , array('jquery') );
    wp_enqueue_script( 'bplike-jquery' );

    /* JQuery dialog for likers popup. */
<<<<<<< HEAD
   /// wp_register_script('jquery-ui-dialog', array('jquery'));
    wp_enqueue_script(' jquery-ui-dialog');
=======
    wp_enqueue_script( 'jquery-ui-dialog' );
>>>>>>> 8a3df64fbb65a4bf3360000b3f002e62fd5e06f7
}

/**
 * bp_like_insert_head()
 *
 * Includes JavaScript variables needed in the <head>.
 *
 */
function bp_like_insert_head() {
<<<<<<< HEAD
=======
	// Only load if the user is logged in and if they aren't in the dashboard
	if ( ! is_user_logged_in() && ! is_admin() ) {
		return;
	}
>>>>>>> 8a3df64fbb65a4bf3360000b3f002e62fd5e06f7
    ?>	
    <script type="text/javascript">
        /* <![CDATA[ */
        var bp_like_terms_like = '<?php echo bp_like_get_text( 'like' ); ?>';
        var bp_like_terms_like_message = '<?php echo bp_like_get_text( 'like_this_item' ); ?>';
        var bp_like_terms_unlike_message = '<?php echo bp_like_get_text( 'unlike_this_item' ); ?>';
        var bp_like_terms_view_likes = '<?php echo bp_like_get_text( 'view_likes' ); ?>';
        var bp_like_terms_hide_likes = '<?php echo bp_like_get_text( 'hide_likes' ); ?>';
        var bp_like_terms_unlike_1 = '<?php echo bp_like_get_text( 'unlike' ); ?> (1)';
        /* ]]> */


    <?php if ( bp_like_get_settings( 'remove_fav_button' ) == 1 ) { ?>
            jQuery(document).ready(function($) {

                jQuery(".fav").remove();
                jQuery(".unfav").remove();
            });
    <?php } ?>
    </script>
    <?php
}

<<<<<<< HEAD
// TODO: only load these if user is logged in, test
add_action( 'wp_head' , 'bp_like_insert_head' );
add_action( 'wp_print_scripts' , 'bp_like_list_scripts' );
=======
add_action( 'wp_head' , 'bp_like_insert_head' );
add_action( 'wp_enqueue_scripts' , 'bp_like_list_scripts' );
>>>>>>> 8a3df64fbb65a4bf3360000b3f002e62fd5e06f7