# Desenvolvimento de Software - SENAI

Este repositório contém o primeiro projeto web desenvolvido durante as aulas do curso de aprendizagem de **Desenvolvimento de Software** do **SENAI**. (05/2024)

O objetivo principal do projeto é implementar uma interface web simples que permita a realização de operações CRUD (Criar, Ler, Atualizar, Deletar), além de revisar conceitos fundamentais de desenvolvimento de software, como integração de banco de dados. 

## 🔧 Tecnologias Utilizadas

- **PHP:** Utilizado para a implementação dos métodos CRUD e para realizar a conexão com o banco de dados;
- **HTML:** Estruturação da página web;
- **CSS:** Estilização e formatação visual da página;
- **Bootstrap:** Framework para estilização do visual da página;
- **XAMPP:** Ambiente de desenvolvimento local para rodar o servidor e banco de dados.

## 📁 Estrutura do Repositório

- **/database:** Scripts para criação do banco de dados;
- **/static:** Arquivos estáticos, como CSS e imagens;
- **/src:** Contém o código PHP responsável pela lógica e páginas da aplicação.

## ⚙️ Como Rodar o Projeto

Antes de iniciar a instalação, certifique-se de ter os seguintes programas instalados:

- **Git:** Versionamento e hospedagem de código;
- **XAMPP:** Pacote de software que inclui o Apache, MySQL e PHP;
- **MySQL:** Banco de dados relacional.

Com os programas necessários instalados, é possível realizar a execução dos passos a seguir.

### 1. Configurar o Banco de Dados

- Abra o `CMD` e execute o seguinte comando para habilitar o MySQL:

        mysql -u <seu-nome-de-usuário> -p

- Logo após, execute os comandos presentes no arquivo **databases.db**, localizado na pasta `databases`.

- Por fim, utilize o seguinte comando para fechar o MySQL:

        exit

### 2. Configuração do Projeto

- Abra o XAMPP e abra as portas do Apache e MySQL.

> ⚠️ **Observação:** caso a porta do MySQL não esteja abrindo, execute o seguinte comando no terminal e abra a porta pelo XAMPP novamente: `net stop mysql80`.

- Clone o projeto dentro da pasta `htdocs` do XAMPP com o seguinte comando:

        git clonehttps://github.com/ruansilva123/DESO_PHP-AULA-SENAI.git

### 3. Pesquisa do Link do projeto

- No seu navegador, acesse a seguinte URL:

        http://localhost/DESO_PHP-AULA-SENAI/src/pages/login.php