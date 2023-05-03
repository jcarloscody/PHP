php artisan serve
php artisan make:contoller nome
php artisan make:contoller nome --resource
php artisan make:component nome_componente
npm i
npm i bootstrap
npm run dev
php artisan make:migration create_nome_table
php  artisan migrate
php artisan make:model Nome
---------------

- nome de methods de controllers
  - consultar actions handled by resource controller, usamos as action (metodo de controller)
- Bootstrap
  - pelo npm
  - 


---- CONCEITOS
- .blade.php  é uma template enginer, ou seja, é um generator que ajuda a criar templates 
- criar componentes
- XSS
- webpack: configura os arquivos de front end como...
  - é uma pipeline do nosso front end
  - mover arquivos
  - tranformar arquivos css
  - mover imagens
- Laravel Mix
    - um pacote javascript, ajuda na configuração do webpack
    - permite que tenhamos uma pipeline 
    - fermenta que super simplifica a configuração do webpack
- DataBase
  - temos a configuração na pasta config
  - temos a pasta database
    - migrations: versionamento do bd
- ORM: Mapeamento do mundo orientado a objeto para o mundo relaional
  - aqui no laravel temos o ELOQUENT