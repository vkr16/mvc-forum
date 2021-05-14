# mvc-forum
 Project mata kuliah pemrograman aplikasi web
 
 # Start Configuration
 After pulling this code you need to change some configuration to get this code work as expected on your environment.
 
 1. Change database configuration on file "app/config/config.php" 
:::::::::: Change http://localhost/mvc-forum to your working directory on local or your link to the root of your host 
:::::::::: Change "localhost" on DB_HOST to your database host
:::::::::: Change "root" on DB_USER to your database username
:::::::::: Change "" (empty quotation mark) on DB_PASS to your database password
:::::::::: Change "openforum" on DB_NAME to your database name

2. Change static link for ajax on file "app/views/login/index.php" and file "app/views/register/index.php"
::::::::: Locate "http://localhost/mvc-forum" and replace your working directory on local or your link to the root of your host 

3. Last but not least, import the sql file included in this repository as the database.

4. Hope it works for you :)


# Known Bug 
~ on some hosting the controller file's name must be started with lowercase.
::::: Solution -> Rename the files inside folder "app/controllers/" one by one with lowecase
