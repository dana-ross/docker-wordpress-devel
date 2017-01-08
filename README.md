# docker-wordpress-devel

A Docker setup for WordPress development

## License

[MIT](http://daveross.mit-license.org/)

See [why I contribute to open source software](https://medium.com/@csixty4/why-i-write-open-source-software-6d3569c85e64).

## Installation

```
git clone --recursive git@github.com:daveross/docker-wordpress-devel.git
cd docker-wordpress-devel
docker-compose up
```

## Usage

* WordPress is available at http://localhost
* PHPMyAdmin is available at http://localhost:8001
* Mailhog is available at http://localhost:8002
* All outbound emails are routed to Mailhog through sendmail
* Object Caching is enabled & using memcached
* Batcache is installed

If you're replacing wp-content with your project's own wp-content directory,
be sure to copy wp-content/mu-plugins/mail-override.php to fix email sending.