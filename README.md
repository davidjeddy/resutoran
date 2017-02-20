Install
===

Terminal
docker exec -it zeroforksgiven_php_1
docker exec -it zeroforksgiven_php_1 composer require davidjeddy/yii2-resutoran
docker exec -it zeroforksgiven_php_1  php console/yii migrate/up migrationPath=./vendor/davidjeddy/yii2-resutoran/src/migrations/ --interactive=0