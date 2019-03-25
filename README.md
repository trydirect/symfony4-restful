# symfony4-restful
RESTfull API template based on Symfony 4 for development purpose
* php-fpm 7.2.11
* Rest API
* Redis latest
* Elasticsearch 5.4.3
* Kibana 5.4.3
* Logstash 5.4.0
* XDebug 1.6.1

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
$ git clone "https://github.com/trydirect/symfony4-restful.git"
```
Then build it via docker-compose:
```sh
$ cd symfony4-restful
$ docker-compose up -d
```


# Contributing

1. Fork it (https://github.com/trydirect/symfony4-restful/fork)
2. Create your feature branch (git checkout -b feature/fooBar)
3. Commit your changes (git commit -am 'Add some fooBar')
4. Push to the branch (git push origin feature/fooBar)
5. Create a new Pull Request