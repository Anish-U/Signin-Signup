# Signin-Signup

Designing an Sign-up & Log-in system.<br>
The main aim of the project is to develop a website which would facilitate the user to create an new account or login using the correct credentials. This project shows how we can have a secure login without SQL injections, etc. This project also shows how we can have a SEO friendly URL's. 

Technologies used:

Front end: HTML, CSS, SASS, JavaScript, Bootstrap<br>
Back end: PHP, MySQL Database

---

# Purpose

The purpose of this project is for best practice of PHP & Database (SQL).<br>

---

# Development setup

### 1. Retrieve our project (if you haven't done so already)

```git
 $ git clone git@github.com:Anish-U/Signin-Signup.git
```
### 2. Move project folder to htdocs folder

   if you cannot find the htdocs folder please follow the below links,

  * [Where to find htdocs in XAMPP Mac](https://stackoverflow.com/questions/45518021/where-to-find-htdocs-in-xampp-mac)
  * [Find htdocs path, no matter where file is stored](https://stackoverflow.com/questions/5536730/find-htdocs-path-no-matter-where-file-is-stored)
  * [htdocs path in linux](https://stackoverflow.com/questions/1582851/htdocs-path-in-linux)
  * [https://stackoverflow.com/questions/1582851/htdocs-path-in-linux](https://stackoverflow.com/questions/44989243/unable-to-find-htdocs-on-xampp)

### 3. Restore Database

   * Goto phpMyAdmin.
   * Create a Database of name 'loginsignup' and select Import.
   * Find 'File to import:' section and choose the file 'signup_login.sql' which is located under project folder [ sourceCode -> assets -> sql -> signup_login.sql ] and hit GO.
   
### 4.Setup Database Configurations

  * Goto project folder -> source code -> database.inc.php.
  * setup your configuratons related to MySQL.
  
 ### 5. Start Server
  * start the server and run;
    * http://localhost:8888/PATH_TO_THE_PROJECT_FILES/index (replace the port number 8888 to your port).
    
