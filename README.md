# docker-php-slim-server
Docker php slim server

With this image you can spin up a container to run a PHP Slim application on an Ubuntu:14.04 OS.

There is a test application is "app" directory.  You can delete its contents and then add your own app.

To build: docker build -t phpslimubuntu .

To run: docker container run -d -p 8001:80 phpslimubuntu

Feel free to contribute.