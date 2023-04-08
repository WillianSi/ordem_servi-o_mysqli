# Ordem e serviço com banco mysqli

Este é um repositório no GitHub que contém um projeto de sistema para gerenciamento de ordens de serviço usando PHP e MySQLi. O projeto é composto por arquivos PHP, CSS e JavaScript, e utiliza o padrão de arquitetura MVC (Model-View-Controller) para separar a lógica de negócios, a interface do usuário e o controle de fluxo.
O sistema permite ao usuário cadastrar ordens de serviço, visualizar as ordens cadastradas, alterar e excluir ordens existentes, e gerar relatórios de ordens por período. O projeto utiliza técnicas de validação de entrada de dados para garantir a segurança e integridade das informações.
O repositório contém também uma pasta "sql" com o script para criação do banco de dados e tabelas necessárias para o funcionamento do sistema.

<h1>Sistema de Gerenciamento de Ordem de Serviço</h1>
less
Copy code
<h2>Funcionalidades</h2>
<ul>
	<li>Cadastro de ordens de serviço</li>
	<li>Visualização de ordens cadastradas</li>
	<li>Alteração de ordens existentes</li>
	<li>Exclusão de ordens existentes</li>
	<li>Geração de relatórios de ordens por período</li>
</ul>

<h2>Arquitetura</h2>
<p>O projeto utiliza o padrão de arquitetura MVC (Model-View-Controller) para separar a lógica de negócios, a interface do usuário e o controle de fluxo. A pasta "model" contém os arquivos responsáveis pelo acesso ao banco de dados e manipulação dos dados. A pasta "view" contém os arquivos responsáveis pela interface do usuário. A pasta "controller" contém os arquivos responsáveis pelo controle de fluxo da aplicação.</p>

<h2>Segurança</h2>
<p>O projeto utiliza técnicas de validação de entrada de dados para garantir a segurança e integridade das informações. Os formulários de cadastro e edição de ordens de serviço possuem validação de campos obrigatórios e formatos de entrada corretos.</p>

<h2>Banco de Dados</h2>
<p>O script para criação do banco de dados e tabelas necessárias para o funcionamento do sistema estão na pasta "sql". Para criar o banco de dados, basta importar o arquivo "ordem_servico.sql" no MySQL.</p>

<h2>Requisitos</h2>
<ul>
	<li>PHP 7 ou superior</li>
	<li>MySQLi</li>
</ul>

<h2>Instalação</h2>
<ol>
	<li>Baixe o repositório ou clone utilizando <code>git clone https://github.com/WillianSi/ordem_servi-o_mysqli.git</code></li>
	<li>Importe o script de criação do banco de dados em "sql/ordem_servico.sql" no MySQL.</li>
	<li>Configure as informações de conexão ao banco de dados no arquivo "model/conexao.php".</li>
	<li>Execute o servidor PHP utilizando <code>php -S localhost:8000</code></li>
	<li>Acesse o sistema no navegador utilizando o endereço "http://localhost:8000"</li>
</ol>
