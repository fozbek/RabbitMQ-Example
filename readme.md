RabbitMQ Example
================
An exmaple of use RabbitMQ in multiple programming languages, Golang and PHP.

    $ docker-compose up

... and you can see RabbitMQ magement page at http://localhost:90 You can login with default credentials. 

guest:guest

You can send message to RabbitMQ with producer 

    $ curl -d "id=1&name=Iphone" -X POST http://localhost:91

You can see the messages on docker-logs for now.
