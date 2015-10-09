###################
Quall Code Database Compiler
###################

Database Compiler is a tools that make easy a database set up for table and many
more also make them not too open phpmyadmin also using a CodeIgniter.
CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
How to Use
*******************

1. Set application/config/database.php with your host, user, password your db
2. Open <http://your-domain-name.com/compiler/createdb
3. Input your database name that you want and submit
4. For dropping see on your right screen, find your database name and click drop
5. Now you have database that you want, back to application/config/database.php
6. Change $config['database'] to database name that you input, now you can create table
7. For create table see the example on application/compiler/example.php
8. Happy Coding :)

*******************
Server Requirements
*******************

-PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

-Database <MySQL, Oracle, Postgre, and many more>
It will work on any database that CodeIgniter supported you can see codeigniter
User Guide for more details <it will come on your installation folder>

-Web Server <Apache Web Server>


************
Installation
************

Just copy paste to your web server and launch the application
