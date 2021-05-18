![Image of SA HELLO-WORLD](https://github.com/larsvdv/svhelloworld/blob/dev/public/images/logo_en1.png)

# Prerequisites

* Latest version of Xampp (https://www.apachefriends.org/index.html)
* Latest version of Composer (https://getcomposer.org/download/)
* A command line tool like Git Bash (https://gitforwindows.org/)
* An IDE of your choice. I'd recommend installing IntelliJ using your student licence (https://www.jetbrains.com/idea/download/#section=windows)


# How to run the project locally

* Clone this repository to a directory of choice on your local machine.
* Make sure the DocumentRoot in Xampp, httpd.conf, is set to the correct directory where the project is cloned to.
* Open the project in you IDE.
* Run ```composer install```.
* Create a database using Xampp's MySQL module. Open localhost/phpmyadmin in the browser, add a new database and give it a name to your liking.
* In your local project, add the database name to the .env.example file in the project root folder. Save the file and either rename is to .env or save it as .env
* Now run ```php artisan key:generate```
* You should be able to open the website now via localhost.
