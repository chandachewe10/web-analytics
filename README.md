## Web Analytics

### web analytics to view the total number of people who visited your website in a specific month
### for the current year.

## Installation 
### If you have composer installed in your machine install this package on your CLI as:
### `composer require chandachewe/analytics`

## Use Case
### Once installed in your machine import the database which is named as `ipman`
### you can customise the database credentials in `src/Db.php`
### On your landing page include the follwoing on top:
### 1. `use ChandaChewe\Webanalytics\Config;`
### 2. `require_once __DIR__ . '/vendor/autoload.php';`
### 3. `new Config();`
### A sample is given for you in `index.php` as the landing page
### This package uses the IPV4 Addresses of users to count the number of visits on your website
### Hence it needs to be tested in live production to capture users IPV4 addresses
### as localhost cannot do that.
### For testing purposes in localhost you can search for any `IPV4` Address and replace it
### on `$usersIP` in `src/Config.php`
### Visit `analytics.php` to view web visitors in that particular month.

## Contributions
### This is an open source PHP Package which uses `freegeoip` and `jscanvas`. You are free
### to make any `meaningful` contributions, PR etc to enhace it. 




