FROM golang

# Laravel Project
RUN go get github.com/gin-gonic/gin
RUN go get github.com/streadway/amqp
WORKDIR /project
COPY . .
RUN go build

CMD [ "./project" ]
