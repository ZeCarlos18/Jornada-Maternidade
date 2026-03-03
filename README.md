```markdown
# Jornada Maternidade

Este é um projeto desenvolvido com o framework Laravel.

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas na sua máquina:
* [PHP](https://www.php.net/) (versão 8.2 ou superior)
* [Composer](https://getcomposer.org/)
* [Node.js e NPM](https://nodejs.org/)
* [Git](https://git-scm.com/)

## 🚀 Instalação e Configuração

Siga os passos abaixo para rodar o projeto localmente:

1. **Clone o repositório**
   ```bash
   git clone (URL_DO_REPOSITORIO)

```

2. **Acesse a pasta do projeto**
```bash
cd nome_pasta

```


3. **Instale as dependências do PHP (Backend)**
```bash
composer install

```


4. **Instale as dependências do Node (Frontend)**
Para garantir que as páginas com JavaScript e estilos funcionem corretamente, instale os pacotes NPM:
```bash
npm install

```


5. **Configure as Variáveis de Ambiente**
Faça uma cópia do arquivo de exemplo para criar o seu arquivo de ambiente local:
```bash
cp .env.example .env

```


*(Nota: No Windows, se não estiver usando o terminal Bash, você pode usar `copy .env.example .env`)*
6. **Gere a Chave da Aplicação**
```bash
php artisan key:generate

```


7. **Configure e Rode as Migrações do Banco de Dados**
Certifique-se de configurar o seu banco de dados no arquivo `.env` recém-criado. Depois, crie as tabelas:
```bash
php artisan migrate

```



## 💻 Executando o Projeto

Para rodar a aplicação, você precisará de **dois terminais** abertos simultaneamente:

**Terminal 1: Servidor PHP**

```bash
php artisan serve

```

**Terminal 2: Compilação de Assets (Vite/Mix)**

```bash
npm run dev

```

Acesse a aplicação no seu navegador pelo endereço `http://localhost:8000`.
