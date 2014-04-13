Totalna wyszukiwarka wikipedii

================================================================================
INSTALACJA APACHE
================================================================================
http://newbie.linux.pl/?id=article&show=510



================================================================================
INSTALACJA ROZSZERZENIA PHP SOLR
================================================================================


Do instalacji mogą być potrzebne pakiety takie jak curl, libcurl i libxml2:

sudo apt-get install curl libcurl3 libcurl3-dev php5-cur libxml2

PRZED INSTALACJĄ ROZSZERZENIE POBIERAMY ZE STRONY: http://pecl.php.net/package/solr

tar -zxvf solr.1.1.0b.tgz

cd solr.0.9.9

phpize

./configure

sudo make && make install

Po wykonaniu tych czynności w katalogu /usr/lib/php5/20090626+lfs powinien być widoczny plik solr.so

Następnie tworzymy nowy plik solr.ini w katalogu /etc/php5/cli/conf.d

Zawartość pliku:
"
	; configuration for php Solr module
	extension=solr.so
"

Zapisujemy (zazwyczaj dostęp do tego katalogu jest zablokowany, dlatego polecam użyć "sudo nautilus")

Restart Apache'a: sudo /etc/init.d/apache2 restart

Po wpisaniu komendy: "php -me" powienien być już widoczny solr.

Droga alternatywna:
1.) pear install pecl/solr
2.) pecl install -n solr

Prawdopodobnie trzeba także ręcznie dodać plik solr.ini

DOKUMENTACJA PHP SOLR: http://www.php.net/manual/en/book.solr.php

PRZYDATNE INFORMACJE DOTYCZĄCE INSTALACJI: https://bugs.php.net/bug.php?id=59028
