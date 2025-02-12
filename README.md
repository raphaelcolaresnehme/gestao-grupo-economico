Sistema de Gestão para Grupo Econômico

Este sistema foi desenvolvido para ajudar a administrar grupos econômicos, bandeiras, unidades e colaboradores, além de permitir a geração de relatórios e exportação de dados.

Tecnologias Utilizadas

Laravel 10 (PHP)

MySQL (Banco de dados)

Livewire (Interações dinâmicas no frontend)

Tailwind CSS (Estilização)



---

Passo a Passo para Instalar

O que você vai precisar

PHP 8.1 ou superior

Composer (gerenciador de dependências)

MySQL

Node.js e NPM (para rodar o frontend)



---

Clonando o Repositório

Para começar, abra o terminal e rode o seguinte comando:

git clone https://github.com/raphaelcolaresnehme/gestao-grupo-economico.git
cd gestao-grupo-economico


---

Configurando o Ambiente

Usando Docker (Laravel Sail)

Se preferir usar o Docker, rode os seguintes comandos:

cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed

Sem Docker (Rodando Localmente)

Se não for usar Docker, faça assim:

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve


---

Acessando o Sistema

Abra o navegador e acesse: http://localhost:8000

Usuário padrão: admin@example.com

Senha: password



---

O que o Sistema Faz

Permite criar, editar e excluir Grupos Econômicos, Bandeiras, Unidades e Colaboradores

Geração de relatórios

Exportação dos dados em formato Excel

Autenticação de usuários para login seguro



---

Estrutura do Projeto

app/: Código do backend (Laravel)

database/: Banco de dados (migrations e seeds)

resources/: Views e arquivos do frontend

routes/: Arquivos de rotas

tests/: Testes automatizados para garantir que tudo funciona



---

Rodando os Testes

Se quiser rodar os testes do sistema, use o comando:

php artisan test


---
