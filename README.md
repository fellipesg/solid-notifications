# solid-notifications
Creating a simple notifications system based on SOLID principles


To start testing, you'll need docker installed.
It's based on the Laravel Sail Environment: https://laravel.com/docs/9.x/sail.

Once Docker's installed, clone the application and type:
./vendor/bin/sail up

It'll bring the application up .


There are two routes:
/logs: Shows the history of all logs registered in the database ordered by the newest to oldest
/message: Shows the fomr to submit a new message based on the category
