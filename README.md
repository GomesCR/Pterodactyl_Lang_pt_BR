# Pterodactyl - Pacote de Idioma Português do Brasil

Este é o pacote de tradução em Português do Brasil para o Painel Pterodactyl.

## 📋 Pré-requisitos

- Instalação do Pterodactyl Panel
- Acesso SSH ao servidor
- Permissões de root/sudo

## 🚀 Instalação

1. Acesse a pasta de recursos do seu painel Pterodactyl:
```bash
cd /var/www/pterodactyl
```

2. Faça backup dos arquivos de linguagem existentes (caso necessário):
```bash
cp -r resources/lang/pt resources/lang/pt_backup
```

3. Baixe e instale os arquivos de tradução:
```bash
cd resources/lang
rm -rf pt  # Remove pasta pt existente se houver
git clone https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git pt
```

4. Corrija as permissões e limpe os caches:
```bash
chown -R www-data:www-data /var/www/pterodactyl/*
chmod -R 755 storage/* bootstrap/cache
php artisan view:clear
php artisan cache:clear
composer dump-autoload
```

5. Reinicie os serviços:
```bash
systemctl restart nginx
systemctl restart php8.1-fpm  # Ajuste a versão do PHP conforme sua instalação
```

## 🔧 Configuração

1. Acesse o painel de administração do Pterodactyl
2. Vá para 'Settings'
3. Na seção 'Default Language', selecione 'Português do Brasil (pt)'
4. Clique em 'Save' para aplicar as alterações

## 👥 Para Usuários

Cada usuário pode selecionar o idioma português individualmente:
1. Faça login no painel
2. Clique no seu nome de usuário no canto superior direito
3. Selecione 'Account'
4. Na seção 'Language', escolha 'Português do Brasil (pt)'
5. Clique em 'Save' para aplicar

## ⚠️ Solução de Problemas

Se a linguagem continuar voltando para inglês:

1. Verifique se o arquivo `config/app.php` tem a configuração correta:
```php
'locale' => 'pt',
'fallback_locale' => 'en',
```

2. Verifique as permissões dos arquivos:
```bash
chown -R www-data:www-data /var/www/pterodactyl/resources/lang/pt
chmod -R 644 /var/www/pterodactyl/resources/lang/pt/*
```

3. Limpe todos os caches do Laravel:
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

4. Se ainda persistir, tente:
   - Limpar o cache do navegador
   - Fazer logout e login novamente no painel
   - Verificar se todos os arquivos de tradução estão presentes e com conteúdo correto

## ⚠️ Observações

- Após a instalação, pode ser necessário limpar o cache do navegador
- Em caso de problemas, verifique as permissões dos arquivos
- Se encontrar erros de tradução, sinta-se à vontade para contribuir com correções

## 🤝 Contribuindo

Se você encontrar erros ou quiser melhorar a tradução:
1. Faça um fork do repositório
2. Crie uma branch para suas alterações
3. Envie um pull request com suas melhorias

## 📝 Licença

Este projeto segue a mesma licença do Pterodactyl Panel.
