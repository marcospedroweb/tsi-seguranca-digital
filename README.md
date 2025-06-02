# Projeto Tarefas (PHP)

Projeto desenvolvido em PHP para gerenciamento básico de tarefas. Possui funcionalidades como cadastro, listagem, edição e exclusão de tarefas, além de login de usuário.

## 📁 Estrutura do Projeto

- class/: Contém as classes PHP utilizadas no projeto.
- components/: Componentes de interface ou scripts de apoio.
- db/: Scripts para conexão com o banco de dados.
- createTask.php: Página para criação de tarefas.
- editTask.php: Página para edição de tarefas.
- list.php: Página que lista as tarefas cadastradas.
- login.php / logout.php / register.php: Páginas de autenticação.

## 🚀 Como Executar o Projeto Localmente

1. Clone o repositório:
   git clone [<URL_DO_REPOSITORIO>](https://github.com/marcospedroweb/tsi-seguranca-digital.git)

2. Coloque o projeto na pasta htdocs ou www do seu servidor local (XAMPP, WampServer, Laragon, etc.).

3. Crie um banco de dados MySQL para o projeto (pode ter um script de criação dentro da pasta db).

4. Configure o arquivo de conexão com o banco de dados (geralmente dentro da pasta db).

5. Inicie o servidor local e acesse o projeto pelo navegador:
   http://localhost/NOME_DA_PASTA_DO_PROJETO

## 📚 Funcionalidades

- Login e registro de usuários.
- Criação, edição e exclusão de tarefas.
- Listagem de tarefas cadastradas.

## 🛠️ Tecnologias Utilizadas

- PHP
- MySQL
- HTML e CSS

---

## 🛤️ Passo a Passo de Boas Práticas e Manutenção

I. Base de Código
- Use controle de versão (ex.: Git) para rastrear o histórico de mudanças e permitir múltiplos deploys.

II. Dependências
- Declare e isole as dependências (ex.: bibliotecas externas ou frameworks).

III. Configurações
- Armazene configurações no ambiente (por exemplo, arquivos .env ou constantes configuráveis).

IV. Serviços de Apoio
- Gerencie serviços externos como bancos de dados ou serviços de autenticação.

V. Construa, Lance, Execute
- Separe etapas de build, deploy e execução, organizando por estágios para facilitar a manutenção.

VI. Processos
- Execute a aplicação como um ou mais processos independentes, evitando armazenamento de estado local.

VII. Vínculo de Porta
- Exporte serviços por ligação de porta, permitindo que sejam acessados por navegadores ou outros clientes.

VIII. Concorrência
- Dimensione o projeto usando múltiplos processos ou clusters quando necessário.

IX. Descartabilidade
- Maximize a robustez permitindo reinicialização e desligamento rápido (ex.: uso de supervisores de processo).

X. Dev/Prod Semelhantes
- Mantenha ambientes de desenvolvimento, teste e produção o mais similares possível.

XI. Logs
- Trate logs como fluxo de eventos, facilitando o monitoramento e a auditoria.

XII. Processos de Admin
- Execute tarefas administrativas e de manutenção como processos pontuais.

---

Este projeto é um exemplo acadêmico para aprendizado de PHP com CRUD básico e autenticação de usuários.
