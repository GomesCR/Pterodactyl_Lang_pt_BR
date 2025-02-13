#!/bin/bash

# Verifica se está rodando como root
if [ "$EUID" -ne 0 ]; then 
  echo "Por favor, execute como root (sudo ./install.sh)"
  exit 1
fi

# Define o diretório do Pterodactyl
PTERO_DIR="/var/www/pterodactyl"

# Verifica se o diretório do Pterodactyl existe
if [ ! -d "$PTERO_DIR" ]; then
  echo "Diretório do Pterodactyl não encontrado em $PTERO_DIR"
  exit 1
fi

# Faz backup da pasta de linguagem existente (se houver)
if [ -d "$PTERO_DIR/resources/lang/pt" ]; then
  echo "Fazendo backup da pasta de linguagem existente..."
  mv "$PTERO_DIR/resources/lang/pt" "$PTERO_DIR/resources/lang/pt_backup_$(date +%Y%m%d_%H%M%S)"
fi

# Cria o diretório de linguagem
mkdir -p "$PTERO_DIR/resources/lang/pt"

# Copia os arquivos de tradução
cp -r * "$PTERO_DIR/resources/lang/pt/"

# Remove arquivos desnecessários do diretório de destino
rm -f "$PTERO_DIR/resources/lang/pt/install.sh"
rm -f "$PTERO_DIR/resources/lang/pt/README.md"
rm -rf "$PTERO_DIR/resources/lang/pt/.git"

# Define as permissões corretas
chown -R www-data:www-data "$PTERO_DIR/resources/lang/pt"
find "$PTERO_DIR/resources/lang/pt" -type f -exec chmod 644 {} \;
find "$PTERO_DIR/resources/lang/pt" -type d -exec chmod 755 {} \;

# Limpa os caches do Laravel
cd "$PTERO_DIR"
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear
composer dump-autoload

echo "Tradução instalada com sucesso!"
echo "Agora edite o arquivo config/app.php e altere a linha 'locale' => 'en' para 'locale' => 'pt'"
