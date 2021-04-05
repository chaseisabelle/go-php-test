prune:
	docker system prune --force

build:
	docker build --no-cache --tag=gophpgo:test .

run:
	docker run gophpgo:test

all:
	make prune && make build && make run