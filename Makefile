.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t fizzbuzz .

build-container:
	docker run -dt --name fizzbuzz -v .:/540/FizzBuzz fizzbuzz
	docker exec fizzbuzz composer install

start:
	docker start fizzbuzz

test: start
	docker exec fizzbuzz ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it fizzbuzz /bin/bash

stop:
	docker stop fizzbuzz

clean: stop
	docker rm fizzbuzz
	rm -rf vendor
