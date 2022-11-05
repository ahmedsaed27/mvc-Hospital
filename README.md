### mvc-Hospital

## installation
### 1- First, make sure you have the composer and XAMPP installed 
### 2- open the Notepad as admin and open file D:\XAMPP\apache\conf\extra  // show all files 
### 3- open Vhosts.conf 
### 4- write this at the end of the page   <VirtualHost *:80>
     DocumentRoot "D:/XAMPP/htdocs/Hospital/public"
     ServerName Hospital.mvc
  </VirtualHost>
###  and save 
  
###  5- open the Notepad as admin and open file C:\Windows\System32\drivers\etc\hosts  // show all files 
  
###  6- comment the local host like this...  
### localhost name resolution is handled within DNS itself.
	#127.0.0.1       localhost
	#::1             localhost
  
###  7- write this at the end of the page...   127.0.0.1         Hospital.mvc  // and save
  
###  8- import the sql file into db
  
###  9- open http://hospital.mvc/   
  
    
  

