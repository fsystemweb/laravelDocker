## Laravel Docker

    - Install Docker -> 'sudo apt install docker'.
    - Seachs images in Docker Hub.
    - Install composer image -> 'docker pull composer'.
    - Run composer install inside container -> 'docker run --rm -it -v "$(pwd)":/app composer composer install'
    - Install php image -> 'docker pull php'.
    - Run DockerFile -> 'docker build -t laravel-docker ./'. Run inside directory.
    - Run php server -> 'docker run --rm -it -p 8000:8000 -v "$(pwd)":/app laravel-docker php artisan serve --host=0.0.0.0'.
    - Set app key -> 'docker run --rm -it -p 8000:8000 -v "$(pwd)":/app laravel-docker php artisan key:generate'.
    - Create docker-composer to replace execute individual commands.
    - Run docker-compose -> 'docker-composer up'.

# Docker useful commands

    - See all the images -> 'docker images'.
    - See all the container -> 'docker ps'.
    - Delete image -> 'docker rmi <id>'.
    - Delete all images -> 'docker system prune -a'.
    - Stop image -> 'docker stop <my_container>'
    - Connect to console of container 'docker-compose exec <service> bash'.

# Template from

    - https://startbootstrap.com/

# Email Server

    - https://hub.docker.com/r/eaudeweb/mailtrap (user: mailtrap pass: mailtrap )
