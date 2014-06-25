<?php


/* Quit */
defined('ABSPATH') OR exit;


/**
* Optimus
*
* @since 0.0.3
*/

class Publish_Confirm
{


    /**
    * Prepares the JS code integration
    *
    * @since   0.0.3
    * @change  0.0.3
    *
    * @hook    array  publish_confirm_message
    */

    public static function inject_js()
    {
        /* Check user role */
        if ( ! current_user_can('publish_posts') ) {
            return;
        }

        /* jQuery loaded? */
        if ( ! wp_script_is('jquery', 'done') ) {
            return;
        }

        /* Default message */
        $default = 'Are you sure you want to publish this now?';

        /* Custom message */
        $msg = apply_filters(
            'publish_confirm_message',
            $default
        );

        /* Message not changed? */
        if ( $msg === $default ) {
            load_plugin_textdomain(
                'publish_confirm',
                false,
                dirname(PUBLISH_CONFIRM_BASE). '/lang/'
            );

            $msg = __($default, 'publish_confirm');
        }

        /* Print javascript */
        self::_print_js( esc_js($msg) );
    }


    /**
    * Prints the JS code into the footer
    *
    * @since   0.0.3
    * @change  0.0.3
    *
    * @param   string  $msg  JS confirm message
    */

    private static function _print_js($msg)
    { ?>
        <script type="text/javascript">
            jQuery(document).ready(
                function($){
                    $('#publish').on(
                        'click',
                        function(event) {
                            if ( $('#original_publish').val() !== $(this).val() ) {
                                return;
                            }
                            if ( ! confirm("<?php echo $msg ?>") ) {
                                event.preventDefault();
                            }
                        }
                    );
                }
            );
        </script>
    <?php }
}