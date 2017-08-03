# cruddemo
Steps to deploy on localhost
1) Copy both directories ('https://github.com/umeshmd/cruddemo.git' and 'https://github.com/umeshmd/yii.git') in root folder of localhost.
2) Create database 'cruddemo' in mysql (Change mysql credentials if required in /cruddemo/protected/config/main.php)
3) Create table in selected database 'cruddemo' by using following query.
    
                CREATE TABLE `cruddemo`.`personal_details` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(255) NULL,
              `country` VARCHAR(45) NULL,
              `email` VARCHAR(255) NULL,
              `moblie_number` VARCHAR(255) NULL,
              `about_you` VARCHAR(255) NULL,
              `birth_day` DATE NULL,
              PRIMARY KEY (`id`));
    
4) Run web application using 'http://localhost/cruddemo/' in browser, wiil lead you to login page.
5) Enter credentials as follow to login to system
      UserName: admin
      Password: admin
