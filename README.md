



Instalação
----------


  Acessar o projeto pelo terminal 
  executar `composer install`
    executar `composer updata`
  Criar um banco de dados (Ex: agenda)
  Renomear o arquivo **.env.example** (localizado na raiz do projeto) para **.env**
  Acessar o arquivo .env e inserir as suas configurações do banco de dados 
 

    DB_CONNECTION=mysql
    
    DB_HOST=127.0.0.1
    
    DB_PORT=3306
    
    DB_DATABASE=agenda
    
    DB_USERNAME=root
    
    DB_PASSWORD=

Executar no terminal:

7) `php artisan migrate`
8) `php artisan db:seed`
8) `php artisan key:generate`
9) `php artisan serve`




