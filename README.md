# Установка Docker Toolbox
- Инструкция: https://docs.docker.com/toolbox/toolbox_install_windows/
- Установщик: https://github.com/docker/toolbox/releases/download/v19.03.1/DockerToolbox-19.03.1.exe

### При работе в Windows Home (без виртуализации)

после запуска "Docker Quickstart Terminal"
- открыть панель управления "VirtualBox"
- в настройках "default" выбрать "Общие папки" и добавить весь диск с проектом https://headsigned.com/posts/mounting-docker-volumes-with-docker-toolbox-for-windows/
- перезапустить "Docker Quickstart Terminal"

# Начало работы
В терминале перейти в корневую директорию проекта и выполнить команды:
- Сборка контейнеров: `docker-compose build`
- Запуск конткейнеров: `docker-compose up -d`
- Запуск команды: `docker exec -it php-fpm-mainacad php l01/test.php`

# Наслаждайтесь:
http://mainacad-001.local:8082/

# Уничтожение контейнеров (если нужно)
- Остановка контейнеров: `docker stop php-fpm-mainacad`
- Удаление контейнеров: `docker rm php-fpm-mainacad`