# Task Manager - Teste Técnico PHP/Laravel

## 📌 Sobre o Projeto
Aplicação de gestão de tarefas desenvolvida como teste técnico para a vaga de Desenvolvedor PHP/Laravel.
O sistema permite que um super-admin gerencie utilizadores e tarefas, com permissões específicas e interação em tempo real usando Livewire.

---

## ⚙️ Tecnologias Utilizadas
- PHP 8.4.14
- Laravel 12
- Livewire 3
- TailwindCSS
- PostgreSQL
- Database Notifications

---

## 🚀 Instalação e Execução

### Pré-requisitos
- PHP >= 8.3
- Composer
- Node.js & NPM
- postgresql



### Passos
```bash
git clone https://github.com/ArmandoDevX/Task-Manager.git
cd task-manager

composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate


### Configure o Banco de dado no arquivo env

php artisan migrate

php artisan migration --seed

composer run dev || php artisan serve

```

## Funcionalidades Implementadas

### Autenticação e Autorização

Login e logout sem uso de pacotes externos

Controle de acesso via middleware

### Gestão de Utilizadores

CRUD de utilizadores (somente super-admin)

### Permissões configuráveis por utilizador

Permissão padrão: apenas leitura

## Gestão de Tarefas

### CRUD de tarefas

Estados:

PENDENTE

EM_ANDAMENTO

FINALIZADO

## Atribuição de tarefas a utilizadores específicos

Prazo automático de 24 horas

Perfil do Utilizador

Atualização de nome, email e password

Exclusão da própria conta com confirmação via Livewire

## Regras de Permissão

Apenas o super-admin pode criar utilizadores

Apenas utilizadores autorizados podem:

Criar tarefas

Editar tarefas

Eliminar tarefas

Utilizadores sem permissão têm acesso somente leitura

## Notificações

Quando uma tarefa é criada pelo super-admin, todos os utilizadores recebem uma notificação

Notificações armazenadas no banco de dados (database notifications)

## Regras de Negócio

Cada tarefa possui prazo máximo de 24h

Um utilizador pode executar várias tarefas

O super-admin pode criar tarefas para utilizadores específicos

🧠 Decisões Técnicas

Não foram utilizados pacotes de autenticação ou permissões para atender ao requisito do teste

Uso de Enums para estados das tarefas

Livewire foi utilizado para garantir interações em tempo real sem reload da página

Policies foram utilizadas para controle de acesso

## Pontos de Melhoria

Implementação de testes automatizados

Melhorias na interface do utilizador

Sistema de auditoria de ações



# De nada vale o nosso conhecimento se não o partilharmos com o mundo.
Bom Trabalho Dev´s
