help: ## Показать доступные команды для make
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
logs: ## Посмотреть логи всех контейнеров: make logs; логи контейнера: make logs c=CONTAINER_NAME
	docker-compose logs --tail=200 -f $(c)
ps: ## Cписок запущенных контейнеров
	docker ps --size
shell: ## Запустить терминал в контейнере: make shell c=CONTAINER_NAME
	docker exec -it --user root $(c) /bin/sh

up: create-dirs docker-up ## Запусить контейнеры
down: docker-down ## Остановить контейнеры
restart: docker-restart ## Перезапусить контейнеры
show: docker-ps docker-images docker-volumes docker-network ## Показать всю информацию о контейнерах, дисках, сетях, образах
remove: docker-down-clear docker-down-images docker-remove-cont ## Удалить все образы, диски, сети, контейнеры

set-access: ## Удаляет проблему с правами на папкии файлы
	sudo find . -type d -exec chmod 777 {} \;
	sudo find . -type f -exec chmod 644 {} \;
docker-ps: ## Просмотр контейнеров
	@printf "\033[0;31m\n" && docker ps -a && printf "\033[1;37m\n"

docker-images: ## Просмотр образов
	@printf "\033[0;31m\n" && docker images && printf "\033[1;37m\n"

docker-volumes: ## Просмотр томов
	@printf "\033[0;31m\n" && docker volume ls && printf "\033[1;37m\n"

docker-network: ## Просмотр сети
	@printf "\033[0;31m\n" && docker network ls && printf "\033[1;37m\n"

docker-up: ## Запустить все контейнеры
	docker-compose up

docker-up-d: ## Запустить все контейнеры в фоновом режиме
	docker-compose up -d

docker-down: ## Остановить контейнеры
	docker-compose down

docker-remove-cont: ## Остановить контейнеры и удалить их
	docker-compose down --remove-orphans

docker-down-clear: ## Остановить контейнеры, удалить их и удалить volumes
	docker-compose down -v --remove-orphans

docker-down-images: ## Удаление образов и томов
	docker system prune -af --volumes

docker-pull: ## Cкачать указанные образы
	docker-compose pull

docker-build: ## Сборка образа из Dockerfile
	docker-compose build

docker-build-up: ## Сборка образа поднятие контейнеров окружения в фоне
	docker-compose up -d --build

docker-restart: ## Перезапустить все контейнеры
	docker-compose restart

migrate-status: ## Статус миграций
	docker exec -it php-fpm php artisan migrate:status

migrate: ## Запуск миграций
	docker exec -it php-fpm php artisan migrate

migrate-pretend: ## Просмотр операторов SQL без запуска миграций
	docker exec -it php-fpm php artisan migrate --pretend

migrate-force: ## Принудительный запуск миграций
	docker exec -it php-fpm php artisan migrate --force

migrate-back: ## Откатить крайнюю миграцию, step=Количество миграций
	docker exec -it php-fpm php artisan migrate:rollback --step=$(step)

migrate-reset: ## Откат всех миграций
	docker exec -it php-fpm php artisan migrate:reset

migrate-refresh: ## Откат и миграция одной командой
	docker exec -it php-fpm php artisan migrate:refresh

migrate-fresh: ## Удаление таблиц и миграция одной командой
	docker exec -it php-fpm php artisan migrate:fresh

artisan-key: ## Генерация ключа
	docker exec -it php-fpm php artisan key:generate

clear-cache: ## Очистка всего кэша
	docker exec -it php-fpm php artisan cache:clear

clear-view: ## Очистка кэша представлений
	docker exec -it php-fpm php artisan view:clear

clear-route: ## Очистка кэша путей
	docker exec -it php-fpm php artisan route:clear

shell-php: ## Войти в контейнер php для комманд composer, вывода версии, списка модулей
	docker exec -it php-fpm bash





