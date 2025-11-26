set -e

cd /var/www/html

if [ ! -f "artisan" ]; then
  echo "Nenhum projeto Laravel encontrado. Criando novo projeto..."
  composer create-project laravel/laravel .

  if [ ! -f ".env" ] && [ -f ".env.example" ]; then
    cp .env.example .env
  fi
fi

if [ ! -d "vendor" ]; then
  echo "Instalando dependências..."
  composer install
fi


if ! grep -q "APP_KEY=base64:" .env; then
  echo "Gerando APP_KEY..."
  php artisan key:generate
fi

echo "Inicialização concluída. Iniciando PHP-FPM..."
exec php-fpm
