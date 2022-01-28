# ApiSetup By ɄŁ₮₹₳
Simple API setup for amps or whatever scripts you want to use

How to install (Centos 6+):

yum install httpd mod_ssl

/sbin/chkconfig httpd on

yum install php-mysql php-devel php-gd php-pecl-memcache php-pspell php-snmp php-xmlrpc php-xml

/usr/sbin/apachectl restart

yum install make

yum install gcc

yum install php php-pear libssh2 libssh2-devel

pecl install -f ssh2

touch /etc/php.d/ssh2.ini

echo extension=ssh2.so > /etc/php.d/ssh2.ini

/etc/init.d/httpd restart

<br>
Verify you have SSH2 installed on server:
<br>
php -m | grep ssh2

<br><br>
Compile Scripts:

yum -y install screen libpcap-devel tcl tcl-devel gcc

mv /root/api.php /var/www/html/
<br>
<br>
All done!<br>
API URL > http://serverip/api.php?apikey=API_KEY&host=[host]&port=[port]&time=[time]&method=[method]
