Tantric Activation
===================

# Requirements

    PHP 7.0.0+ or newer
    Composer: curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    Docker: https://vessel.shippingdocker.com/docs/installing-docker/
    HTTP server with PHP support (eg: Apache, Nginx, Caddy)
    A supported database: MySQL, PostgreSQL or SQLite


# Installation

Getting started is easy

Go to the application folder in terminal and initialize composer
	
	$ composer install

Once composer initialize the application will AUTOMATICALLY start the docker environment installation
this is what runs the web server and mysql database

Once Docker is completed you need to Start vessel (this will start the server)
	
	./vessel start
	
Head to http://localhost:8888 in your browser and checkout the site!

    Note 1: Starting Vessel for the first time will download the base Docker images from https://hub.docker.com and build our application container.

    This will only need to be run the first time.

    Note 2: If you receive an error including EADDRINUSE, you likely already have something listening on port 80 or 3306. This may be a Vagrant virtual machine, or Laravel Valet, but could be anything! See Multiple Environments for a solution.

    Note that the EADDRINUSE error is often last in the error output reported from Docker.
# Default Admin
	USER: admin@admin.com
	PASS: password
	
# Useful links for docker issues

	https://vessel.shippingdocker.com/docs/everyday-usage/
	https://vessel.shippingdocker.com/docs/common-issues/
	
# Blade Page Structure
https://laravel.com/docs/5.5/blade

# File Locations
We are currently using the TUBED theme

	All the CORE site templates are located in /public/content/themes/tubed/
	All the Pages are located in /resources/views/
