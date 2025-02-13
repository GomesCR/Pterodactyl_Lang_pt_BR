# Pterodactyl - Pacote de Idioma Português do Brasil

Este é o pacote de tradução em Português do Brasil para o Painel Pterodactyl.

## 📋 Pré-requisitos

- Instalação do Pterodactyl Panel
- Acesso SSH ao servidor
- Permissões de root/sudo

## 🚀 Instalação Corrigida

1. Primeiro, restaure a pasta 'en' se foi removida (é necessária para o funcionamento correto):
```bash
cd /var/www/pterodactyl
git checkout resources/lang/en
```

2. Instale os arquivos de tradução:
```bash
# Remova instalação anterior do português (se existir)
rm -rf resources/lang/pt

# Clone o repositório na pasta correta
git clone https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git resources/lang/pt

# Ajuste as permissões
chown -R www-data:www-data resources/lang/pt
find resources/lang/pt -type f -exec chmod 644 {} \;
find resources/lang/pt -type d -exec chmod 755 {} \;
```

3. Configure o Laravel para usar português como idioma padrão:
```bash
# Edite o arquivo .env na raiz do Pterodactyl
sed -i 's/APP_LOCALE=en/APP_LOCALE=pt/g' .env

# Edite config/app.php se necessário
# Procure e altere as seguintes linhas:
#   'locale' => 'pt',
#   'fallback_locale' => 'en',
```

4. Limpe todos os caches (importante executar TODOS os comandos):
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
composer dump-autoload -o
php artisan optimize:clear
```

5. Reinicie os serviços:
```bash
systemctl restart php8.1-fpm  # Ajuste para sua versão do PHP
systemctl restart nginx
```

6. Verifique os logs em tempo real para identificar possíveis erros:
```bash
tail -f /var/www/pterodactyl/storage/logs/laravel.log
```

## 🔍 Verificação da Instalação

Execute este comando para verificar se o Laravel reconhece o idioma português:
```bash
cd /var/www/pterodactyl
php artisan tinker
>>> app()->getLocale();  # Deve retornar 'pt'
>>> trans('test.test_message');  # Deve retornar a mensagem em português
```

## ⚠️ Solução de Problemas Comum

1. Se a tradução não aparece:
   - Verifique se todos os arquivos de tradução têm a extensão `.php`
   - Confirme se todos os arquivos começam com `<?php` e retornam um array
   - Verifique se as chaves de tradução correspondem exatamente às do inglês
   - Certifique-se de que não há erros de sintaxe PHP nos arquivos

2. Se o painel continua em inglês:
   - Verifique se APP_LOCALE está definido como 'pt' no arquivo .env
   - Confirme se o usuário tem permissão para alterar o idioma
   - Limpe o cache do navegador e faça logout/login

3. Para forçar o português como idioma padrão para todos os usuários:
```php
// Em config/app.php
'locale' => 'pt',
'fallback_locale' => 'pt',  // Mude também o fallback para pt
'available_locales' => ['pt'],  // Deixe apenas português como opção
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
