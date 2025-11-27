#  Sistema de Gerenciamento de Hospedagem

##  Projeto Acadêmico - Programação Web (UDF)

Este repositório contém o código-fonte de um sistema simples de gerenciamento de hospedagem, desenvolvido como parte da avaliação da disciplina de **Programação Web** do curso de **Engenharia de Software** no Centro Universitário do Distrito Federal (UDF).

O projeto demonstra a aplicação de conceitos de desenvolvimento web *full-stack*, utilizando PHP para o backend e manipulação de dados via SQL.

---

##  Funcionalidades

O sistema foi projetado para gerenciar três entidades principais: Locais de Hospedagem, Clientes e Reservas.

| Entidade | Funcionalidades de Cadastro |
| :--- | :--- |
| **Local de Hospedagem** | Permite o cadastro de novos locais, incluindo: **Nome**, **Tipo** (Hotel, Pousada, Hostel, etc.), **Estado**, **Cidade** e **Bairro**. |
| **Cliente** | Permite o cadastro de informações pessoais do cliente: **Nome**, **E-mail**, **Telefone** e **CPF**. |
| **Reserva** | Permite o registro de uma nova reserva, vinculando um **Local** e um **Cliente** já cadastrados. Inclui: **Número do Quarto**, **Período de Hospedagem** e **Valor** total. |

---

##  Tecnologias Utilizadas

O projeto foi construído utilizando as seguintes tecnologias:

| Categoria | Tecnologia | Descrição |
| :--- | :--- | :--- |
| **Backend** | **PHP** | Linguagem de programação para o processamento do lado do servidor e lógica de negócios. |
| **Banco de Dados** | **SQL** (MySQL/MariaDB) | Sistema de gerenciamento de banco de dados relacional para persistência das informações. |
| **Frontend** | **HTML5** | Estrutura e marcação do conteúdo da aplicação. |
| **Estilização** | **CSS3** | Estilização e *layout* da interface do usuário. |
| **Interatividade** | **JavaScript** | Adição de interatividade e manipulação do DOM no lado do cliente. |

<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,html,js,css,mysql" />
   
  </a>
</p>

---

## ⚙️ Instalação e Configuração

Para rodar este projeto em sua máquina local, você precisará de um ambiente de servidor web que suporte PHP e MySQL. Recomenda-se o uso de pacotes como **XAMPP**, **WAMP** ou **MAMP**.

### Pré-requisitos

*   Servidor Web (Apache)
*   Interpretador PHP (versão 7.x ou superior)
*   Banco de Dados MySQL/MariaDB

### Passos para Configuração

1.  **Clone o Repositório:**
    ```bash
    git clone https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git
    cd NOME_DO_REPOSITORIO
    ```
    *(Substitua `SEU_USUARIO/NOME_DO_REPOSITORIO` pelo caminho real do seu projeto no GitHub.)*

2.  **Mova para o Diretório do Servidor:**
    Mova a pasta clonada (`NOME_DO_REPOSITORIO`) para o diretório de documentos do seu servidor web (ex: `htdocs` no XAMPP, `www` no WAMP).

3.  **Configuração do Banco de Dados:**
    a. Inicie o Apache e o MySQL no seu painel de controle (XAMPP/WAMP/MAMP).
    b. Acesse o **phpMyAdmin** (geralmente em `http://localhost/phpmyadmin`).
    c. Crie um novo banco de dados com o nome `hospedagem_db` (ou o nome que você utilizou no seu código PHP).
    d. **Importe o Schema:** Importe o arquivo SQL que contém a estrutura das tabelas (e dados iniciais, se houver).
        *   *Se você tiver um arquivo SQL, inclua-o na raiz do projeto e mencione o nome aqui (ex: `hospedagem_schema.sql`).*

4.  **Ajuste de Conexão (Se Necessário):**
    Verifique e ajuste as credenciais de conexão com o banco de dados no seu arquivo de configuração PHP (ex: `conexao.php` ou similar), garantindo que o `host`, `usuário`, `senha` e `nome do banco` estejam corretos para o seu ambiente local.

5.  **Acesso à Aplicação:**
    Abra seu navegador e acesse a aplicação pelo endereço:
    ```
    http://localhost/NOME_DO_REPOSITORIO/
    ```
    *(Substitua `NOME_DO_REPOSITORIO` pelo nome da pasta que você moveu para o `htdocs`.)*

---

##  Autores e Créditos

Este projeto foi desenvolvido por:

*   **[Kaiky Alexandre de Souza Ribeiro ]** - *Matrícula: [45952647]*

**Disciplina:** Programação Web
**Instituição:** Centro Universitário do Distrito Federal (UDF)
**Curso:** Engenharia de Software

---
