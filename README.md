<p align="center">
    
    <h1 align="center">Клиент для API ArzonDoc.uz</h1>
    <br>
</p>

ТРЕБОВАНИЯ
------------

Для установки проекта вам необходимо следующее установленное программное обеспечение веб сервер Apache, Mysql/MariaDb, PHP 5.4.0.
Легче всего установить пакет программ XAMPP по ссылке https://www.apachefriends.org/ru/index.html

УСТАНОВКА
------------

### Установка с помощью GIT

У Вас не установлен GIT, Вы можете установть его скачав его по ссылке https://git-scm.com/downloads.

Для установки приложения откройте консоль, перейти в папку куда хотите установить приложение и набрать следующую команду:

~~~
> git clone https://github.com/alexqwert/arzonDocApiClient
~~~

### Установка из архива

Скачайте архив приложения по ссылке https://github.com/alexqwert/arzonDocApiClient/archive/master.zip
и разархивируйте в папку куда вы хотите установить приложение.

КОНФИГУРАЦИЯ
-------------

### База Данных

Откройте в редакторе `config/db.php` и укажите параметры соединения с базой:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=medplus',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```


### Запуск миграции

Для запуска миграции в консоли наберите следующую команду:

 > yii migrate

 И подтвердите запуск миграции нажав y