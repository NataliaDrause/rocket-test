# rocket-test
Clearing website cache solution

<h2>A. Clearing cache at a specific time</h2>

1. Create a cron job through your web hosting control panel.

2. Set the desired time for the cache clearing plugin to run and include the following command (replace "yourdomain.com" with your domain name):
<br><code>wget -q -O - http://yourdomain.com/rocket-clean-domain.php > /dev/null</code>

3. Upload the rocket-clean-domain.php file (provided in this repository) to your WordPress installation's root (where wp-config.php and wp-load.php are located). Make sure that the cron job command path to the file is correct. 


<h2>B. Troubleshooting</h2>

1. By using the file manager or FTP, locate the provided rocket-clean-domain.php file and check if the file path is correct. 

2. Check the wp-content/cache folder and subfolders and see the time when files in the subfolders were modified/created. 

3. Check WordPress for any notices or error messages.

4. Check WP Rocket settings in WordPress for possible url exclusions.

5. Check if there are any plugins that are installed that may cause problems.

6. Check .htaccess, wp-config.php, and advanced-cache.php files to ensure that the WP Rocket lines are present.

7. Check WP Rocket configuration folder. 
8. Check if there are any old caching plugin folders that may prevent the WP Rocket plugin from working.
