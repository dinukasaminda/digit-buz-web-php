# digit-buz-web-php

## Install codeigniter

```
 composer create-project codeigniter4/appstarter
```

## Run

```
php spark serve
```

## connect github to cpanel

01. Generate new rsa key pair inside the cpanel terminal
```
ssh-keygen -t ecdsa -C "dinukasaminda@gmail.com"
cat /home/laviecla/.ssh/id_ecdsa.pub
copy public key
```
02. Add that public key into your github repository as a deploy key
03. User cpanel git version control to close repository by ssh link

## Deploy in cpanel

01. Copy code to public folder
```
cp -r /home/laviecla/repositories/digit-buz-web-php/digit-buz-web/* /home/laviecla/public_html/
```

02. Create .htaccess file in public_html directory
```
DirectoryIndex /public/index.php  
RewriteEngine On
RewriteCond $1 !^(index\.php|assets|robots\.txt|favicon\.ico) 
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ ./index.php/$1 [L,QSA]
RewriteRule ^(.*)$ public/$1 [L]
 
```

 03. Install Composer dependencies
```
cd /home/laviecla/public_html/
composer install
```
