App
===================

Requirements

    PHP 7.0.0+ or newer
    Composer: curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    Docker: https://vessel.shippingdocker.com/docs/installing-docker/
    HTTP server with PHP support (eg: Apache, Nginx, Caddy)
    A supported database: MySQL, PostgreSQL or SQLite


Getting started is easy

Go to the application folder in terminal and initialize composer
	
	$ composer install

Once composer initialize the application you need to start the docker installation
this is what runs the web server any mysql database

Start vessel (this start the server)
	
	./vessel start
	
Head to http://localhost:8888 in your browser and see your Laravel site!

    Note 1: Starting Vessel for the first time will download the base Docker images from https://hub.docker.com and build our application container.

    This will only need to be run the first time.

    Note 2: If you receive an error including EADDRINUSE, you likely already have something listening on port 80 or 3306. This may be a Vagrant virtual machine, or Laravel Valet, but could be anything! See Multiple Environments for a solution.

    Note that the EADDRINUSE error is often last in the error output reported from Docker.

#Useful links for docker issues

	https://vessel.shippingdocker.com/docs/everyday-usage/
	https://vessel.shippingdocker.com/docs/common-issues/