# Magento2 Docker Boilerplate

Sample structure for Magento2 projects to use with Docker on Mac

It utilize [docker-sync.io](http://docker-sync.io) to sync project files instead of using docker volumes in Docker for Mac to improve I/O performance significantly

# Before start
Make sure [docker-sync](http://docker-sync.io) is properly installed

# Start project

##New project
- Clone this repo
- ```composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition src```
- Update data/env.php data/config.php if needed
- ```docker-sync-stack start```

## From existing source
- Clone this repo
- ```git clone {magento_project_git_url} src```
- ```docker-sync-stack start```
- Update data/env.php data/config.php if needed
