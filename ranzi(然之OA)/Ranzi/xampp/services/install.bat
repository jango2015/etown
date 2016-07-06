@echo off
set currentDir=%cd%

echo %currentDir% | find ":\xampp\services" > null
if %ERRORLEVEL% == 1 goto notRootDirectory
if %ERRORLEVEL% == 0 goto normalStart 

:notRootDirectory
  echo "Please extract the xampp to root directory, example:D:\\xampp"

  del .\null

  pause 
  exit

:normalStart
  echo First I need set the path for php and mysql
  ..\php\php.exe -c ..\php\php.raw.ini set.php

  echo Installing apache 2.4 as service...
  ..\apache\bin\httpd -k install -n apachezt
  echo starting apache
  net start apachezt

  echo Installing mysql as service...
  ..\mysql\bin\mysqld.exe --install mysqlzt
  echo starting mysql
  net start mysqlzt

  del .\null

  pause
