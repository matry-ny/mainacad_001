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
- В файле `C:\Windows\System32\Drivers\etc\hosts` прописать: `127.0.0.1  mainacad-001.local`

# Наслаждайтесь:
- WEB: http://mainacad-001.local:8082/
- Terminal: `docker exec -it php-fpm-mainacad php l01/test.php`

# Уничтожение контейнеров (если нужно)
- Остановка контейнеров: `docker stop nginx-mainacad php-fpm-mainacad`
- Удаление контейнеров: `docker rm nginx-mainacad php-fpm-mainacad`