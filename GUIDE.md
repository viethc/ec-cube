## Build a new image for ARM64
`docker buildx build --platform linux/arm64 -t ec-cube/arm64 --no-cache --pull --build-arg TAG=8.1-apache .`

## Editing docker-compose.yml
`Edit image of ec-cube service to ec-cube/arm64`
`DATABASE_URL : postgres://root:root@postgres/eccubedb`
`DATABASE_SERVER_VERSION : 14`

## Install dependencies
`composer install`
`npm install`

## Start/Stop the application
`docker compose -f docker-compose.yml -f docker-compose.pgsql.pgadmin.yml -f docker-compose.dev.yml up -d`
`docker compose -f docker-compose.yml -f docker-compose.pgsql.pgadmin.yml -f docker-compose.dev.yml down`
