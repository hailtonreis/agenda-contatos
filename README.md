Agenda de Contatos

Um sistema simples de cadastro, listagem, edição e exclusão de contatos, desenvolvido em Laravel 11.

Funcionalidades:

Listar contatos

Cadastrar novo contato

Editar contato existente

Excluir contato

Exibição de mensagens de sucesso após cada operação

Tecnologias utilizadas:

Laravel – Framework PHP

Blade – Engine de templates

MySQL/PostgreSQL/SQLite – Banco de dados (ajustar conforme o usado)

Bootstrap/Tailwind (opcional) – Estilização básica

Estrutura do projeto:

app/

resources/views/contatos – Telas de listagem, edição e cadastro

routes/web.php – Rotas da aplicação

database/migrations – Estrutura do banco de dados

README.md

.env.example

composer.json

Instalação e configuração:

Clone o repositório:
git clone https://github.com/seu-usuario/agenda-contatos.git

cd agenda-contatos

Instale as dependências:
composer install
npm install && npm run dev (caso esteja usando Vite/Tailwind)

Configure o .env:
cp .env.example .env
php artisan key:generate

Configure o banco de dados no arquivo .env.

Rode as migrations:
php artisan migrate

Inicie o servidor:
php artisan serve

Telas:

Listagem de contatos

Formulário de cadastro

Edição de contato

Mensagens de sucesso após operações

Próximos passos:

Adicionar busca de contatos

Responsividade para mobile

Autenticação de usuários