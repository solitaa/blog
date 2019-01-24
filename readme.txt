C:\wamp64\bin\apache\apache2.4.35\conf\extra\httpd-vhosts.conf


add here 

<VirtualHost *:80>
  ServerName blog.com
  DocumentRoot "${INSTALL_DIR}/www/blog/public"
</VirtualHost>


then

C:\Windows\System32\drivers\etc\hosts


add here
127.0.0.1 blog.com


You must open this file as adminstrator.
Open nodepad++ as admin and then the file to be able to save or open the file with vscode, it will automatically suggest you to save as admin.


Don't forget to restart the server.