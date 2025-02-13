<?php

return [
    'sign_in' => 'Entrar',
    'go_to_login' => 'Ir para Login',
    'failed' => 'Não foi encontrada nenhuma conta com essas credenciais.',

    'forgot_password' => [
        'label' => 'Esqueceu a Senha?',
        'label_help' => 'Digite o email da sua conta para receber instruções sobre como redefinir sua senha.',
        'button' => 'Recuperar Conta',
    ],

    'reset_password' => [
        'button' => 'Redefinir e Entrar',
    ],

    'two_factor' => [
        'label' => 'Token 2-Fatores',
        'label_help' => 'Esta conta requer uma segunda camada de autenticação para continuar. Por favor, digite o código gerado pelo seu dispositivo para completar este login.',
        'checkpoint_failed' => 'O token de autenticação de dois fatores é inválido.',
    ],

    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    'password_requirements' => 'A senha deve ter pelo menos 8 caracteres e deve ser exclusiva para este site.',
    '2fa_must_be_enabled' => 'O administrador exige que a Autenticação de 2 Fatores esteja ativada em sua conta para usar o Painel.',
];
