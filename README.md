## vagrant-php-box ##

This repository holds a vagrant PHP box. The application has the skeleton for a
PHP MVC application with user & session management.

* To build the app, clone this git repo

    ```$ git clone https://github.com/hamzeen/vagrant-php-box.git```

* Once you clone it, Point your Terminal/CMD to this directory and run vagrant run vagrant (first time it should take up to 10-15 mins)

    ```$ vagrant up```

* The application can now accessible from http://localhost:1234 (The port could be changed in Vagrantfile)

* You need to visit **firstrun** page during first session to initialize the database schema and table(s). this
page is accessible from http://localhost:1234/firstrun (running it more than once will not halt the app **:)** )

* PhpMyAdmin is accessible from (http://localhost:1234/phpmyadmin)

* Vagrant sets up MySQL with following credentials:

    * Username: root
    * Password: root


![https://github.com/hamzeen/vagrant-php-box/raw/master/address_book_app.jpg](https://github.com/hamzeen/vagrant-php-box/raw/master/address_book_app.jpg)


## Pre-Requisites ##
*   [**VirutalBox**] (https://www.virtualbox.org/wiki/Download_Old_Builds) (I've used an older build 4.3.
The latest doesn’t seem to work on OSX Yosemite)
*   [**Vagrant**] (https://www.vagrantup.com/)


##Tips

####If you need to install the virtualbox used here (you need to do it only once)
```$ vagrant box add ubuntu/trusty64```

####Increase Startup speed (skip provisioning)
To speed up the startup process use ```$ vagrant up --no-provision```

####If you want to know your vagrant version
```$ vagrant -v```

####Once you had enough with this app!
```$ vagrant destroy```

>Shout at me if you find anything missing here!

## LICENSE ##
Copyright © 2015 Hamzeen. H.
Licensed under the Apache License, Version 2.0: http://www.apache.org/licenses/LICENSE-2.0

Permission is hereby granted, free of charge, to any person
obtaining a copy of this project. It includes the rights to use,
fork, modify, merge, publish and distribute.

THE SOURCE OF THIS PROJECT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND.