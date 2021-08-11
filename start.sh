#!/bin/bash

app_is_run=.run_app

run_main() {
	if [[ -f "$app_is_run" ]]; then
		docker-compose start

	else
		docker-compose up -d --build site
		docker-compose run --rm artisan migrate
		docker-compose run --rm artisan storage:link
		touch .run_app

	fi
}

down_main() {
	docker-compose down
}

#-------------------------------------------------------------------
# Execute

run_main || down_main
