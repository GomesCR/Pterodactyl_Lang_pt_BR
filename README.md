# Pterodactyl - Pacote de Idioma Português do Brasil

Este é o pacote de tradução em Português do Brasil para o Painel Pterodactyl.

## 📋 Pré-requisitos

- Instalação do Pterodactyl Panel
- Acesso SSH ao servidor
- Permissões de root/sudo

## 🚀 Instalação

1. Acesse a pasta de recursos do seu painel Pterodactyl:
```bash
cd /var/www/pterodactyl/resources/lang
```

2. Crie a pasta 'pt' para o idioma português:
```bash
mkdir pt
```

3. Faça o download dos arquivos de tradução:
```bash
cd pt
git clone https://github.com/GomesCR/Pterodactyl_Lang_pt_BR.git .
```

4. Limpe o cache do Laravel e as visualizações compiladas:
```bash
cd /var/www/pterodactyl
php artisan view:clear
php artisan cache:clear
```

5. Ajuste as permissões dos arquivos:
```bash
chown -R www-data:www-data /var/www/pterodactyl/*
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
