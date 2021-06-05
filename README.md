### Orocommerce Customization Demo

#### Installation
docker
```
brew cask install docker
open /Applications/Docker.app
```

php
```
brew install php@7.4 composer node docker-compose
echo 'export PATH="/usr/local/opt/php@7.4/bin:$PATH" \nexport PATH="/usr/local/opt/php@7.4/sbin:$PATH" \nexport PATH="/usr/local/opt/node@12/bin:$PATH"' >> ~/.zshrc
```

configure php
```
echo "memory_limit = 2048M \nmax_input_time = 600 \nmax_execution_time = 600 \nrealpath_cache_size=4096K \nrealpath_cache_ttl=600 \nopcache.enable=1 \nopcache.enable_cli=0 \nopcache.memory_consumption=512 \nopcache.interned_strings_buffer=32 \nopcache.max_accelerated_files=32531 \nopcache.save_comments=1" >> /usr/local/etc/php/7.4/php.ini
```

install project
```
curl -sS https://get.symfony.com/cli/installer | bash
echo 'export PATH="$HOME/.symfony/bin:$PATH"' >> ~/.zshrc
source ~/.zshrc
symfony local:server:ca:install
```

#### Server start
start mysql
```
docker-compose up
```

start server
```
symfony server:start
```

#### Check customization widget
```
https://127.0.0.1:8000/admin/user/view/1
```

#### Console Development Command

Show current routes
```
php bin/console debug:router
```

Clear cache
```
php bin/console cache:clear --env=de
```

Check envrionment variable
```
php bin/console debug:container --env-vars
```

Some system info
```
php bin/console --version
php bin/console about
```

#### Related docs
create bundle
```
https://doc.oroinc.com/backend/extension/create-bundle/
```

Symfony best practice
```
https://symfony.com/doc/4.4/bundles/best_practices.html#bundle-name
```