# Pterodactyl - Tradução para Português do Brasil

Este repositório contém a tradução em português do Brasil para o painel Pterodactyl.

## Pré-requisitos

- Pterodactyl Panel v1.11.10
- Acesso root ao servidor
- Git instalado

## Instalação

### Método 1: Usando o Script de Instalação

1. Clone este repositório:
```bash
cd /tmp
git clone -b master https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git
cd Pterodactyl_Lang_pt_BR
```

2. Torne o script de instalação executável:
```bash
chmod +x install.sh
```

3. Execute o script de instalação:
```bash
sudo ./install.sh
```

4. Edite o arquivo de configuração do Laravel:
```bash
sudo nano /var/www/pterodactyl/config/app.php
```

5. Localize a linha:
```php
'locale' => 'en',
```

6. Altere para:
```php
'locale' => 'pt',
```

7. Salve o arquivo e saia.

### Método 2: Instalação Manual

1. Clone este repositório:
```bash
cd /tmp
git clone -b master https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git
```

2. Crie o diretório de linguagem:
```bash
sudo mkdir -p /var/www/pterodactyl/resources/lang/pt
```

3. Copie os arquivos de tradução:
```bash
sudo cp -r Pterodactyl_Lang_pt_BR/* /var/www/pterodactyl/resources/lang/pt/
```

4. Defina as permissões corretas:
```bash
sudo chown -R www-data:www-data /var/www/pterodactyl/resources/lang/pt
sudo find /var/www/pterodactyl/resources/lang/pt -type f -exec chmod 644 {} \;
sudo find /var/www/pterodactyl/resources/lang/pt -type d -exec chmod 755 {} \;
```

5. Edite o arquivo de configuração do Laravel:
```bash
sudo nano /var/www/pterodactyl/config/app.php
```

6. Altere a linha:
```php
'locale' => 'en',
```
para:
```php
'locale' => 'pt',
```

7. Limpe os caches:
```bash
cd /var/www/pterodactyl
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

## Solução de Problemas

Se a tradução não aparecer após a instalação:

1. Verifique se os arquivos estão no diretório correto:
```bash
ls -la /var/www/pterodactyl/resources/lang/pt/
```

2. Verifique as permissões dos arquivos:
```bash
ls -la /var/www/pterodactyl/resources/lang/pt/
```

3. Verifique o arquivo de configuração:
```bash
grep "locale" /var/www/pterodactyl/config/app.php
```

4. Verifique os logs do Laravel:
```bash
tail -f /var/www/pterodactyl/storage/logs/laravel.log
```

5. Limpe todos os caches novamente:
```bash
cd /var/www/pterodactyl
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear
composer dump-autoload
```

6. Se tiver problemas ao clonar o repositório:
   - Certifique-se de usar o branch correto: `git clone -b master https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git`
   - Se o clone falhar, você pode baixar diretamente do GitHub usando o botão "Code > Download ZIP"
   - Após baixar o ZIP, extraia os arquivos e continue com os passos de instalação

## Contribuindo

Se você encontrar erros na tradução ou quiser melhorá-la, fique à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a mesma licença do Pterodactyl Panel.
