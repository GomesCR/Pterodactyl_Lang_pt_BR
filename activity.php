<?php

/**
 * Contém todas as strings de tradução para diferentes eventos
 * do log de atividades. Elas devem ser identificadas pelo valor
 * antes dos dois pontos (:) no nome do evento. Se não houver
 * dois pontos presente, elas devem ficar no nível superior.
 */
return [
    'auth' => [
        'fail' => 'Falha no login',
        'success' => 'Login realizado',
        'password-reset' => 'Senha redefinida',
        'reset-password' => 'Solicitou redefinição de senha',
        'checkpoint' => 'Autenticação de dois fatores solicitada',
        'recovery-token' => 'Usado token de recuperação de dois fatores',
        'token' => 'Resolveu desafio de dois fatores',
        'ip-blocked' => 'Bloqueada requisição de endereço IP não listado para :identifier',
        'sftp' => [
            'fail' => 'Falha no login SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Alterou email de :old para :new',
            'password-changed' => 'Alterou senha',
        ],
        'api-key' => [
            'create' => 'Criou nova chave API :identifier',
            'delete' => 'Excluiu chave API :identifier',
        ],
        'ssh-key' => [
            'create' => 'Adicionou chave SSH :fingerprint à conta',
            'delete' => 'Removeu chave SSH :fingerprint da conta',
        ],
        'two-factor' => [
            'create' => 'Ativou autenticação de dois fatores',
            'delete' => 'Desativou autenticação de dois fatores',
        ],
    ],
    'server' => [
        'reinstall' => 'Reinstalou servidor',
        'console' => [
            'command' => 'Executou ":command" no servidor',
        ],
        'power' => [
            'start' => 'Iniciou o servidor',
            'stop' => 'Parou o servidor',
            'restart' => 'Reiniciou o servidor',
            'kill' => 'Forçou parada do processo do servidor',
        ],
        'backup' => [
            'download' => 'Baixou o backup :name',
            'delete' => 'Excluiu o backup :name',
            'restore' => 'Restaurou o backup :name (arquivos excluídos: :truncate)',
            'restore-complete' => 'Completou restauração do backup :name',
            'restore-failed' => 'Falha ao completar restauração do backup :name',
            'start' => 'Iniciou novo backup :name',
            'complete' => 'Marcou o backup :name como completo',
            'fail' => 'Marcou o backup :name como falho',
            'lock' => 'Bloqueou o backup :name',
            'unlock' => 'Desbloqueou o backup :name',
        ],
        'database' => [
            'create' => 'Criou nova base de dados :name',
            'rotate-password' => 'Senha rotacionada para base de dados :name',
            'delete' => 'Excluiu base de dados :name',
        ],
        'file' => [
            'compress_one' => 'Compactou :directory:file',
            'compress_other' => 'Compactou :count arquivos em :directory',
            'read' => 'Visualizou o conteúdo de :file',
            'copy' => 'Criou uma cópia de :file',
            'create-directory' => 'Criou diretório :directory:name',
            'decompress' => 'Descompactou :files em :directory',
            'delete_one' => 'Excluiu :directory:files.0',
            'delete_other' => 'Excluiu :count arquivos em :directory',
            'download' => 'Baixou :file',
            'pull' => 'Baixou arquivo remoto de :url para :directory',
            'rename_one' => 'Renomeou :directory:files.0.from para :directory:files.0.to',
            'rename_other' => 'Renomeou :count arquivos em :directory',
            'write' => 'Escreveu novo conteúdo em :file',
            'upload' => 'Iniciou um upload de arquivo',
            'uploaded' => 'Realizou upload de :directory:file',
        ],
        'sftp' => [
            'denied' => 'Bloqueou acesso SFTP devido a permissões',
            'create_one' => 'Criou :files.0',
            'create_other' => 'Criou :count novos arquivos',
            'write_one' => 'Modificou o conteúdo de :files.0',
            'write_other' => 'Modificou o conteúdo de :count arquivos',
            'delete_one' => 'Excluiu :files.0',
            'delete_other' => 'Excluiu :count arquivos',
            'create-directory_one' => 'Criou o diretório :files.0',
            'create-directory_other' => 'Criou :count diretórios',
            'rename_one' => 'Renomeou :files.0.from para :files.0.to',
            'rename_other' => 'Renomeou ou moveu :count arquivos',
        ],
        'allocation' => [
            'create' => 'Adicionou :allocation ao servidor',
            'notes' => 'Atualizou as notas para :allocation de ":old" para ":new"',
            'primary' => 'Definiu :allocation como alocação primária do servidor',
            'delete' => 'Excluiu a alocação :allocation',
        ],
        'schedule' => [
            'create' => 'Criou o agendamento :name',
            'update' => 'Atualizou o agendamento :name',
            'execute' => 'Executou manualmente o agendamento :name',
            'delete' => 'Excluiu o agendamento :name',
        ],
        'task' => [
            'create' => 'Criou uma nova tarefa ":action" para o agendamento :name',
            'update' => 'Atualizou a tarefa ":action" para o agendamento :name',
            'delete' => 'Excluiu uma tarefa do agendamento :name',
        ],
        'settings' => [
            'rename' => 'Renomeou o servidor de :old para :new',
            'description' => 'Alterou a descrição do servidor de :old para :new',
        ],
        'startup' => [
            'edit' => 'Alterou a variável :variable de ":old" para ":new"',
            'image' => 'Atualizou a Imagem Docker do servidor de :old para :new',
        ],
        'subuser' => [
            'create' => 'Adicionou :email como subusuário',
            'update' => 'Atualizou as permissões do subusuário :email',
            'delete' => 'Removeu :email como subusuário',
        ],
    ],
];
