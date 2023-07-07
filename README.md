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

01. generate new rsa key pair inside the cpanel terminal
```
ssh-keygen -t ecdsa -C "dinukasaminda@gmail.com"
cat /home/laviecla/.ssh/id_ecdsa.pub
copy public key
```
02. add that public key into your github repository as a deploy key
03. user cpanel git version control to close repository by ssh link
