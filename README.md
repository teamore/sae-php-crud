# SAE Lectures | WebDev | PHP.1 "CRUD Application"
This repository provides a very basic CRUD (Create Read Update Delete) application example with minimized dependencies 
running inside a dockerized PHP environment and providing a
MYSQL database

# Build Dev-Environment with Docker
`docker compose up --force-recreate`

# Test it in the browser of your computer
Call this URL in your web browser:
`http://localhost:8080`

# Check running containers
You can check whether the container is running by executing
`docker container list`

This will return a list of all containers with their corresponding container IDs

# Kill (stop) a running container
To kill a running container, execute
`docker kill <container_id>`

