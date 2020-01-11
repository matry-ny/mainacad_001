# Установка Docker Toolbox
- Инструкция: https://docs.docker.com/toolbox/toolbox_install_windows/
- Установщик: https://github.com/docker/toolbox/releases/download/v19.03.1/DockerToolbox-19.03.1.exe

# Начало работы
В терминале перейти в корневую директорию проекта и выполнить команды:
- Сборка контейнеров: `docker-compose build`
- Запуск конткейнеров: `docker-compose up -d`
- Запуск команды: `docker exec -it php-fpm-mainacad php l01/test.php`

# Уничтожение контейнеров (если нужно)
- Остановка контейнеров: `docker stop php-fpm-mainacad`
- Удаление контейнеров: `docker rm php-fpm-mainacad`