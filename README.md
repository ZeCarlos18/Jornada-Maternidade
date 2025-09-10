Criar o .env
Exemplo - Nome da pasta - pweb
git clone <url>
cd nome_pasta
copy .env.example .env
composer install
php artisan key:generate
.env configurar o banco
php artisan migrate
php artisan serve