"# travel_app" 
This project is an implementation of UN travel app assignment questions (1, 2, 3)
It requires the latest version of PHP, i.e PHP 7 and also latest MySQL server installed on a server to run.

If running from localhost, you will need to set HTTPD VHOSTS for the project to work. 
Here are the instructions to achieve>>
Assuming you have installed Xampp development server on your machine, you will go to the Xampp>> apache>> conf >> extra directory and find the httpd-vhosts file and paste the following code snippet into it;

            <VirtualHost *:80>
                ServerAdmin hackins@localhost.com
                DocumentRoot "C:/xampp/htdocs/Travel"
                ServerName dev.travel.com
                ErrorLog "logs/dev.travel.com-error.log"
                CustomLog "logs/dev.travel.com-access.log" common
            </VirtualHost>

            <VirtualHost *:80>
                ServerAdmin hackins@localhost.com
                DocumentRoot "C:/xampp/htdocs/Travel/front"
                ServerName front.travel.com
                ErrorLog "logs/front.travel.com-error.log"
                CustomLog "logs/front.travel.com-access.log" common
            </VirtualHost>

You will then edit the windows hosts files as below and add virtual host domain names that we have set in the httpd vhosts(people who use Linux know how to do this stuff)

    1.) Open notepad as Administrator.
    2.) Go to File > Open .... then navigate to the hosts directory as follows>> 
    3.) Go to Drive C> Windows > System32 > drivers > etc > 
    4.) Open the hosts file and paste this lines below it.
         
	127.0.0.1	dev.travel.com
	127.0.0.1	front.travel.com

Finally go to PHPMyAdmin and create a database named travel, import the database "travel.sql" file provided in the "system/config" folder.

I also used Smarty template engine for PHP facilitating the separation of presentation (HTML/CSS) from application logic. 
