
## О проекте

Учебный pet проект, реализация функционала управления турнирной сеткой, с разделением на пользовательскую и административную часть.
Разработчик: Евгений Тамбовский

## Стек: 
- PHP 8.0;
- SQL 8.0.3;
- Composer 2.3.10;
- npm 8.15.0;
- laravel 9.3.10.


## Установка

- Выполните клонирование проекта в Вашу директорию проекта (git clone);
- Не забудьте настроить проект и установить подключение к базе даных в файле .env;
- Установите пакеты composer (composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader);
- Установите пакеты npm и соберите их (npm install && npm run build);
- Очистите кэш приложения (php artisan clear-compiled && php artisan optimize);
- Запустите миграцию (php artisan migrate --force);
- И запустите приложение (php artisan up);


## CI|CD
-  На проекте подготволенны скрипты для запуска автоматического тестирования и сборки проекта на Aaction Github, о настройках и подключении можно почитать тут:
- **[CI|CD](https://mica-operation-954.notion.site/CI-CD-Laravel-GitHub-Action-0ff9080793134c8aa0ae23d14aa7554e)**


