# Install

Add machine ssh key to GitHub deployment keys

ssh into machine

    cd /{app root}
    composer install --prefer-dist --profile -o -v
    php console/yii migrate/up -p=./vendor/davidjeddy/yii2-resutoran/src/migrations/ --interactive=0