<?php
/**
	Open and write info function
*/
function writeFile($myFile, $stringData) {


   	$fh = fopen($myFile, 'w') or die("var message='Can't open file';");
    	fwrite($fh, $stringData);
   	/**
      close file
    */
    fclose($fh);

}

$myFile = "/etc/apache2/sites-available/zend-ajax";

touch($myFile);  //Touch the file linux style and create it

$contents = "    # Place any notes or comments you have here
    # It will make any customisation easier to understand in the weeks to come
     
    # domain: domain1.com
    # public: /var/www/vhosts/domain.com/domain.com/
     
    <virtualhost *:80>
     
      # Admin email, Server Name (domain name) and any aliases
      ServerAdmin webmaster@zend-ajax
      ServerName  zend-ajax
      ServerAlias www.zend-ajax
      
      SetEnv APPLICATION_ENV \"development\"
     
      
      # Index file and Document Root (where the public files are located)
      DirectoryIndex index.html
      DocumentRoot /var/www/vhosts/zend-ajax/public
      
      # Custom log file locations
      LogLevel warn
      ErrorLog  /var/www/vhosts/zend-ajax/log/error.log
      CustomLog /var/www/vhosts/zend-ajax/log/access.log combined
     <Directory /var/www/vhosts/zend-ajax/public>
         Options Indexes FollowSymLinks MultiViews
      
         DirectoryIndex index.php
         RewriteEngine On
         RewriteCond %{REQUEST_URI} !^/images/
         
         AllowOverride All
         
         Order allow,deny
         Allow from all
     </Directory>
    </virtualhost>


";

writeFile($myFile, $contents);



?>