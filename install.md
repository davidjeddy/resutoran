# Install

Gain access to machines terminal
 1) cd /{app root}
 2) wget https://getcomposer.org/composer.phar -O composer.phar
 3) php composer.phar install --prefer-dist --profile -o -vvv
 4) php console/yii migrate/up -p=./vendor/davidjeddy/yii2-resutoran/src/migrations/ --interactive=0