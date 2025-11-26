#!/bin/bash

cd /var/www/html

echo "🔧 Verificando dependências do Composer..."
if [ ! -d "vendor" ]; then
    echo "📦 Instalando dependências..."
    composer install
fi

chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

echo "🔑 Gerando APP_KEY..."
php artisan key:generate --force

echo "🚀 Executando migrations..."
php artisan migrate --force || echo "⚠️ Migrations falharam (talvez ainda não exista o banco). Continuando..."

echo "📝 Ajustando permissões..."
chmod -R 775 storage bootstrap/cache

echo "🐘 Iniciando PHP-FPM..."
php-fpm
