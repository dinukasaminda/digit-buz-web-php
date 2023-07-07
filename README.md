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
ssh-keygen -t rsa -b 4096
cat /home/laviecla/.ssh/id_rsa.pub
copy public key
```
02. add that public key into your github repository as a deploy key
