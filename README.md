# Pterodactyl - Pacote de Idioma Português do Brasil

Este é o pacote de tradução em Português do Brasil para o Painel Pterodactyl.

## 📋 Pré-requisitos

- Instalação do Pterodactyl Panel
- Acesso SSH ao servidor
- Permissões de root/sudo

## 🚀 Instalação Correta (Atualizada)

1. Acesse a pasta raiz do Pterodactyl:
```bash
cd /var/www/pterodactyl
```

2. Faça backup das configurações atuais:
```bash
cp -r resources/lang/en resources/lang/en_backup
cp .env .env_backup
```

3. Instale os arquivos de tradução:
```bash
# Remova instalação anterior do português (se existir)
rm -rf resources/lang/pt

# Clone o repositório na pasta correta
git clone https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git resources/lang/pt
```

4. Configure o Laravel para usar português como idioma padrão:
```bash
# Edite o arquivo .env
sed -i 's/APP_LOCALE=en/APP_LOCALE=pt/g' .env

# Crie o arquivo de configuração de idiomas
cat > config/locale.php << 'EOL'
<?php
return [
    'languages' => [
        'pt' => [
            'name' => 'Português do Brasil',
            'locale' => 'pt_BR',
        ],
    ],
];
EOL
```

5. Ajuste as permissões e limpe os caches:
```bash
# Ajuste permissões
chown -R www-data:www-data resources/lang/pt
find resources/lang/pt -type f -exec chmod 644 {} \;
find resources/lang/pt -type d -exec chmod 755 {} \;

# Limpe todos os caches
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear
composer dump-autoload -o
php artisan optimize:clear

# Reinicie o PHP-FPM e o servidor web
systemctl restart php8.1-fpm  # Ajuste para sua versão do PHP
systemctl restart nginx
```

6. Verifique a instalação:
```bash
# Entre no tinker do Laravel
php artisan tinker

# Verifique o idioma atual
>>> app()->getLocale();  # Deve retornar 'pt'

# Teste uma tradução
>>> trans('strings.email');  # Deve retornar a versão em português
```

## ⚠️ Solução de Problemas Comuns

1. Se o idioma não muda:
   - Verifique se o arquivo `config/locale.php` foi criado corretamente
   - Confirme se APP_LOCALE está como 'pt' no arquivo .env
   - Verifique se todos os arquivos de tradução estão na pasta correta: `resources/lang/pt/`
   - Certifique-se que as permissões estão corretas (proprietário www-data)

2. Se algumas strings continuam em inglês:
   - Compare os arquivos de tradução com os originais em `resources/lang/en/`
   - Verifique se todos os arquivos de tradução necessários estão presentes
   - Certifique-se que as chaves nos arquivos de tradução correspondem exatamente às originais

3. Se o painel trava ou apresenta erros:
   - Verifique os logs em `storage/logs/laravel.log`
   - Confirme se todos os arquivos PHP estão sintaticamente corretos
   - Verifique se o cache foi limpo corretamente

4. Para forçar o português globalmente:
```php
// Em config/app.php
return [
    'locale' => 'pt',
    'fallback_locale' => 'pt',
    'available_locales' => ['pt'],
];
```

## 📝 Estrutura dos Arquivos

A estrutura correta dos arquivos deve ser:
```
resources/lang/pt/
├── activity.php
├── admin/
├── auth.php
├── command/
├── dashboard/
├── exceptions.php
├── pagination.php
├── passwords.php
├── server/
├── strings.php
└── validation.php
```

Cada arquivo deve:
1. Começar com `<?php`
2. Retornar um array com as traduções
3. Manter as mesmas chaves dos arquivos em inglês
4. Ter permissões 644 (arquivos) ou 755 (diretórios)

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
