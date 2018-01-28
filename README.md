## crud-client

    Back-End

>Instale o [Composer](https://getcomposer.org/doc/00-intro.md)  
>
>Windows [Download](https://getcomposer.org/Composer-Setup.exe)
>
>Linux / Unix / OSX:
>
>No terminal: php composer-setup.php --install-dir=bin --filename=composer

>Após instalação do composer acesse o diretório client-back e execute o comando no terminal;
>
>composer install && composer update && php artisan key:generate && composer dump

>Ainda dentor o projeto abra o arquivo (.env)
>Verifique o usuário e senha do banco de dados no ambient elocal

>DB_USERNAME=root

>DB_PASSWORD=null

>Criar no mysql um schema com o nome a seguir ou de sua preferência
>DB_DATABASE=client_back

>Após criar o schema execute o seguinte comando no terminal, ele irá montar a estrutura do DB 
>
>php artisan migrate

>Finalizando iremos subir o servidor local php artisan serve --port=8000 

    Front-End

>Instale o [Node.js](https://nodejs.org) Versão LTS

>No terminal instale o [Bower](https://bower.io/)
>
>npm install -g bower

>Acesso o diretório: client-front/assets/
>
>execute o comando: bower install

>Aparecerá a seguinte mensagem:
>
>Unable to find a suitable version for angular, please choose one by typing one of the numbers below:
>
>Escolha a opção: 1) angular#1.2.4 

>Dentro do raiz do projeto client-front
>
>execute o seguinte comando para configurar o htt-server
>
>npm install -g http-server
>
>Após instalação execute o seguinte comando;
>
>http-server -a localhost -p 8001

>Pronto! O projeto está configurado \o/



