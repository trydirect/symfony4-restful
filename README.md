[![Build Status](https://travis-ci.com/trydirect/symfony4-restful.svg?branch=master)](https://travis-ci.com/trydirect/symfony4-restful)
![Docker Stars](https://img.shields.io/docker/stars/trydirect/symfony4-restful.svg)
![Docker Pulls](https://img.shields.io/docker/pulls/trydirect/symfony4-restful.svg)
![Docker Automated](https://img.shields.io/docker/cloud/automated/trydirect/symfony4-restful.svg)
![Docker Build](https://img.shields.io/docker/cloud/build/trydirect/symfony4-restful.svg)
[![Gitter chat](https://badges.gitter.im/trydirect/community.png)](https://gitter.im/try-direct/community)

# Symfony4-RESTful development template

RESTfull API development template based on Symfony 4 for development purpose

## Stack includes
* PHP-fpm 7.2.11
* Rest API
* MySQL 5.7
* Redis latest
* Elasticsearch 5.4.3
* Kibana 5.4.3
* Logstash 5.4.0
* XDebug 2.6.1
* Nginx 
* Supervisord
* Ubuntu 18.04

## Note
Before installing this project, please, make sure you have installed docker and docker-compose

To install docker execute: 
```sh
$ curl -fsSL https://get.docker.com -o get-docker.sh
$ sh get-docker.sh
$ pip install docker-compose
```
## Installation
Clone this project into your work directory:
```sh
$ git clone https://github.com/trydirect/symfony4-restful.git
```
Then build it via docker-compose:
```sh
$ cd symfony4-restful
$ docker-compose up -d
```

## Configuration

```
docker exec web composer install
```

Now, let's check the result
```
$ curl http://localhost/

url -i localhost
HTTP/1.1 200 OK
Server: nginx/1.14.2
Content-Type: application/json
Transfer-Encoding: chunked
Connection: keep-alive
X-Powered-By: PHP/7.2.11
Cache-Control: no-cache, private
Date: Fri, 24 May 2019 16:45:55 GMT

{"id":"s","name":"Test","description":"Description"}
```


# Contributing

1. Fork it (https://github.com/trydirect/symfony4-restful/fork)
2. Create your feature branch (git checkout -b feature/fooBar)
3. Commit your changes (git commit -am 'Add some fooBar')
4. Push to the branch (git push origin feature/fooBar)
5. Create a new Pull Request


#Support Development

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2BH8ED2AUU2RL)
