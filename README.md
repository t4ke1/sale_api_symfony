# Sale
## Описание
___
    REST API для расчета стоимости путевки.
    Реализовано:
    POST /api/price
___
[api/doc](http://localhost/api/doc)
___
    {
    "price": "string", - цена тура 
    "startDate": "string", - дата начала тура, d.m.Y
    "brithDayDate": "string", - дата др, d.m.Y
    "payDate": "string" - дата оплаты, d.m.Y
    }
___

    Детская скидка применяется в соответствии с возрастом ребёнка (несовершеннолетнего) на момент старта путешествия.
    Скидка детям с 0 лет - 0%.
    Скидка детям с 3 лет - 80%.
    Скидка детям с 6 лет - 30%, не более 4500 ₽.
    Скидка детям с 12 лет - 10%.
    Скидка за раннее бронирование от 3% до 7%, но не более 1500 руб.
    Рассчитывается от стоимости с учётом детской скидки на дату оплаты.
    На путешествия с датой старта с 1 апреля по 30 сентября следующего 
     года при оплате весь ноябрь текущего и ранее скидка 7%; весь декабрь текущего года - 5%; 
     весь январь следующего года - 3%.
    На путешествия с датой старта с 1 октября текущего года по 14 января следующего года
    при оплате весь март текущего года и ранее скидка 7%; весь апрель текущего года - 5%;  
     весь май текущего года - 3%.
    На путешествия с датой старта с 15 января следующего года и далее при оплате весь август 
     текущего года и ранее скидка 7%; весь сентябрь текущего года - 5%; весь октябрь текущего года - 3%.
    Скидки суммируются от изначальной стоимости
___
## Устанвока
___
### Docker
    Вся среда разработки собрана в Docker.
    Перед тем как начать, убедитесь, что у вас установлен Docker. Вы можете скачать 
    Docker с официального сайта 
[Docker](https://www.docker.com/get-started)


### Проверка установки Docker
___
    Для проверки, установлен ли Docker, выполните следующую команду в терминале:
```bash
    docker --version
```
    Если Docker установлен правильно, вы увидите сообщение с версией Docker, например:
    Docker version 20.10.7, build f0df350
___
### Запуск
___
    1. Клонируйте репозиторий 
    2. Соберите контейнеры Docker
```bash
    docker compose up --build
```
    3.Проверьте статус контейнеров

```bash
    docker ps
``` 
    Eсли контейнеры запущены правильно, вы увидите сообщение с информацией о контейнерах, например:
    mfo-php-1           mfo-php       "docker-php-entrypoi…"   php           13 hours ago   Up 13 hours   0.0.0.0:8000->8000/tcp, 9000/tcp
    mfo-postgres_db-1   postgres:16   "docker-entrypoint.s…"   postgres_db   13 hours ago   Up 13 hours   0.0.0.0:5432->5432/tcp

    4. Установите и обновите все зависимости composer (В контейнере PHP)
```bash
    docker compose exec php bash -c "composer update"
    
```
    5. Запуски тестов
```bash
   docker compose exec php bash -c "vendor/bin/phpunit"
```

