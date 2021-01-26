# Dockerized Wordpress + MariaDB

## Getting started

### Prerequisites

* [Docker](https://store.docker.com/search?offering=community&type=edition)
* [Docker-compose](https://docs.docker.com/compose/install/)

## Configuration

* Port can be changed in docker-compose.yml (default: 8080)
* ./wp-content folder mounted on run
* ./db folder has the database used

Based on wordpress:latest image

## Running

As usual

```
docker-compose up -d
```

http://localhost:8080

## Building the images (just in case)

```
docker-compose build
```

## Access the container (install laravel or whatever you need to do)

```
docker-compose run wp bash
```

