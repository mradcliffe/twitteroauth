
```bash
drush dl composer_manager
php modules/composer_manager/scripts/init.php
composer drupal-rebuild
composer update --dev --prefer-source --no-interaction
cd modules/twitteroauth
../../vendor/bin/phpunit .
```
