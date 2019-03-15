# symfony4-restful
RESTfull API template based on Symfony 4 +  MySQL + docker-compose.yml
## Installation

Firstly, you must have ready-to-use Symfony project. Instructions in the Symfony docs: https://symfony.com/download .

Then, you should install FOSRESTBundle - bundle for creating Restful API on Symfony:

1 -
    ```  
    composer require symfony/serializer 
    ```

2 -
    ```  
    composer require friendsofsymfony/rest-bundle 
    ```


# Config

You have to configure FOSRESTBundle by following steps:

   ```
   #config/packages/fost_rest.yaml
   fos_rest:
       view:
          view_response_listener:  true
       format_listener:
           rules:
              - { path: ^/api, prefer_extension: true, fallback_format: json, priorities: [ json ] }
   ```
```
#config/routes/annotations.yaml
#Note: use your own resource/directory as you prefer
#Note: In this config you separating Rest and Web controllers

web_controller:
    resource: ../../src/Infrastructure/Controller/Web/
     type: annotation
     
rest_controller:
     resource: ../../src/Infrastructure/Controller/Rest/
     type: annotation
     prefix: /api
```
Now you have finished configuration.

#What next?

You need to install and configure Doctrine ORM and create your Entity for working with Rest API. Follow instructions described in Symfony Docs:
1. Doctrine installation: https://symfony.com/doc/current/doctrine.html
2. Doctrine configuration: https://symfony.com/doc/current/reference/configuration/doctrine.html

