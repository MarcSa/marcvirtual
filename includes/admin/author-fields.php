<?php

function mv_custom_user_profile_fields( $user ){ 

    ?>
    <table class="form-table">
        <tr>
            <th><label for="mv_twitter"><?php _e( 'Twitter', 'marcvirtual' ) ?></label></th>
            <td>
                <input type="text" name="mv_twitter" id="mv_twitter" class="regular-text" value="<?php echo esc_attr( get_the_author_meta( 'mv_twitter', $user->ID ) ); ?>">
            </td>
        </tr>
    </table>

    <?php 

}

function mv_save_extra_profile_fields( $user_id ){
    if ( !current_user_can('edit_user') ) {
        return false;
    } 

    update_user_meta( $user_id, 'mv_twitter', $_POST['mv_twitter'] );
    
}