# Iterable-Wordpress
Install this plugin directly by downloading as a .zip file and upload to your wordpress site.

## If you are updating an old plugin, you should:
1. Use WP CLI to install the Github Updater: `wp plugin install --activate https://github.com/afragen/github-updater/archive/master.zip`
1. Go to `Plugins->GitHub Updater->Settings->Install Plugin` in your Wordpress Dashboard and enter `zhuberty/Iterable-Wordpress` for the Plugin URI. Click the "Install Plugin" button.
1. Go to the "Plugins" tab in your Wordpress dashboard and if there are two Iterable Wordpress plugins there:
   1. Deactivate the old plugin
   1. Activate the new plugin
   1. Delete the old plugin
1. Enjoy!

## Or
1. Use your FTP client of choice to overwrite the files in the old plugin directory with the updated files.
