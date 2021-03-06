<div class='wrap'>
    <h2>Iterable Settings</h2>
    <form method='post' action='options.php'>
        <?php settings_fields( 'iterable-settings' ); ?>
        <?php do_settings_sections( 'iterable-settings' ); ?>
        <table class='form-table'>
            <tr valign='top'>
                <th scope='row'>Iterable API Key</th>
                <td><input type='text' name='api_key' value='<?= esc_attr( get_option( 'api_key' ) ); ?>' /></td>
            </tr>
            <tr valign='top'>
                <th scope='row'>Listwise API Key</th>
                <td><input type='text' name='listwise_key' value='<?= esc_attr( get_option( 'listwise_key' ) ); ?>' /></td>
            </tr>
            <tr valign='top'>
                <th scope='row'>Plugin Error Email</th>
                <td><input type='text' name='error_email' value='<?= esc_attr( get_option( 'error_email' ) ); ?>' /></td>
            </tr>
            <tr valign='top'>
                <th scope='row'>Import Using External Site</th>
                <td><input type='text' name='external_importer' value='<?= esc_attr( get_option( 'external_importer' ) ); ?>' /></td>
            </tr>
            <tr valign='top'>
                <th scope='row'>Enable External Imports</th>
                <td><input type='checkbox' name='enable_external_imports' value='1' <?= checked( 1, get_option( 'enable_external_imports' ), false ) ?> /></td> 
            </tr>
            <tr valign='top'>
                <th scope='row'>Disable Gravityforms Warning</th>
                <td><input type='checkbox' name='disable_gravityforms_warning' value='1' <?= checked( 1, get_option( 'disable_gravityforms_warning' ), false ) ?> /></td> 
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
