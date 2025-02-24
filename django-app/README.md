# Flask App Docker Template

This project is a Docker template for a Flask application. It provides a simple setup to get your Flask app running in a Docker container.

## Prerequisites

- Docker installed on your machine
- Docker Compose installed on your machine

## Getting Started

1. Clone the repository:
    ```sh
    https://github.com/XmyKhnnt/docker-deploy-templates.git
    cd docker-deploy-templates
    cd flask-app

    ```

2. Build and run the Docker containers:
    ```sh
    docker-compose up --build
    ```

3. Open your browser and navigate to `http://localhost:5000` to see your Flask app in action.

## Project Structure

```
/flask-app
|-- app.py
|-- requirements.txt
|-- Dockerfile
|-- docker-compose.yml
|-- README.md
```

- `app.py`: The main Flask application file.
- `requirements.txt`: A list of Python dependencies to be installed.
- `Dockerfile`: Instructions to build the Docker image.
- `docker-compose.yml`: Configuration for Docker Compose to run the application.

## Docker Commands

- To stop the containers:
    ```sh
    docker-compose down
    ```

- To rebuild the containers without using the cache:
    ```sh
    docker-compose build --no-cache
    ```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any changes.
