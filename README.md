# Welcome to MiSCapu Crud MVC!


For the script to work, first, you must create a table in your database.

The next step is run the following command from your terminal:

    composer install

Next, you must alter your database access credentials in the **Database.php** file which is in the following path:

    app/Model/Database.php

Alter the following lines:

    /**  
     * Database data connection */
    const HOST = 'localhost';  
    const DBUSER = 'root';  
    const DBPASS = 'root';  
    const DBNAME = 'miscapu';


