# PHP App Docker Template

This project is a Docker template for running a PHP application.

## Prerequisites

- Docker installed on your machine
- Docker Compose installed on your machine

## Getting Started

1. Clone the repository:
    ```sh
    https://github.com/XmyKhnnt/docker-deploy-templates.git
    cd docker-deploy-templates
    cd php-app

    ```

2. Build and start the Docker containers:
    ```sh
    docker-compose up --build
    ```

3. Open your browser and navigate to `http://localhost:80` to see your PHP application running.

## Project Structure

- `Dockerfile`: Contains the instructions to build the PHP application image.
- `docker-compose.yml`: Defines the services, networks, and volumes used by the Docker containers.
- `src/`: Directory where your PHP application code resides.

## Customization

- Modify the `Dockerfile` to change the PHP version or add additional dependencies.
- Update `docker-compose.yml` to add more services like a database or a cache.

## Stopping the Containers

To stop the running containers, use:
```sh
docker-compose down
```

## License

This project is licensed under the MIT License.