### SPOTAMON - Crowdsourced Pokemon Go map.
Demo map: (spots only remain 15 seconds) <a href="https://www.spotamon.com/demo/">here</a>

#### Discord

Join us <a href="https://discordapp.com/invite/spU9p7v">here</a>

#### Install
- Create Database,
- Connect to DB in config and load site, on first load it will auto create tables. 

#### Default Login
Username: admin<br>
Password: admin

#### Webhooks (DISCORD ONLY)
- Enable cURL in your webhosting backend / WAMP / etcetera to  use webhooks.
- Edit the following lines in your config:

```ini
//Webhook Setup
$webhook_url = "https://www.yourwebhookurlgoeshere"; // <-- Webhook URL of your Discord channel
$viewurl = "https://www.spotamon.com"; // <-- Enter your FULL Spotamon url here including http:// or https:// example: https://www.mysite.com < NO BACKSLASH AT THE END!
$viewtitle = "View on Spotamon"; // <-- Text showing for the MAP-link @ Discord
```

#### Crornjob Commands
Set your Cronjob to check each minute:

Pokemon spots: `/usr/bin/wget 'https://www.siteurl/frontend/spotscron.php'`<br>
Raid spots: `/usr/bin/wget 'https://www.siteurl/frontend/raidcron.php'`<br>
Egg spots: `/usr/bin/wget 'https://www.siteurl/frontend/eggcron.php'`

#### Importing Gym/Stop CSV's

1. First download the browser-extension '<a href="https://tampermonkey.net/">Tampermonkey</a>'.
2. In Tampermonkey go to the "Utilities"-tab and in the URL-field enter this url: `https://www.spotamon.com/gymscript.js` and click `Import -> Install`
3. Go to gymhuntr.com and from the menu on the left side choose the last option, this will open a popup.
4. In this menu click 'Save stops as CSV' or 'Save gyms as CSV'.
5. Run yoururl.com/config/gymcsv.php / yoururl.com/config/stopcsv.php and import the files.
6. Delete the .php files to prevent people from uploading fake stuff.

#### Cronjob Documentation

https://code.tutsplus.com/tutorials/scheduling-tasks-with-cron-jobs--net-8800<br>
https://docs.plesk.com/en-US/onyx/customer-guide/scheduling-tasks.65207/<br>
https://www.plothost.com/kb/working-cron-jobs-directadmin/<br>
https://documentation.cpanel.net/display/68Docs/Cron+Jobs

#### Make Cronjob online

https://www.setcronjob.com<br>
https://cron-job.org/en/

#### Configuration

`config.php`
```php
// Connect to Database
$servername = "";
$username = "";
$password = "";
$database = "";
// CSV Import username/password
$csvuser = "";
$csvpass = "";
// Set maps default location example: 
// Example:
// $mapcenter = "51.9720526, 6.7202572";
$mapcenter = "";
//24HR-Clock (default = false = 12HR) 
$clock = "";
//Google Maps key
$gmaps= "";
//Webhook Setup
$webhook_url = ""; // <-- Webhook URL of your Discord channel
$viewurl = ""; // <-- Enter your FULL Spotamon url here including http:// or https:// example: https://www.mysite.com < NO BACKSLASH AT THE END!
$viewtitle = ""; // <-- Text showing for the MAP-link @ Discord
```

#### Notes
- Scan location is intended for mobile use. Location on PC might be wrong!

#### Todo
- Make all table content sortable on frontend
- Add locales for frontend
- Add quests
