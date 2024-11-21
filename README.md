<h1>Projeto de Blog com Controle de Usuários</h1>

<h2>Sobre o Projeto</h2>
<p>
    Este projeto é um <strong>sistema de blog</strong> desenvolvido como parte de atividades acadêmicas e práticas de desenvolvimento web.
    Ele permite que usuários registrados publiquem postagens, adicionem imagens e interajam com os conteúdos por meio de comentários.
    O sistema também diferencia o acesso e permissões entre <strong>usuários comuns</strong> e <strong>administradores</strong>, garantindo segurança e organização no gerenciamento do conteúdo.
</p>

<h2>Funcionalidades</h2>
<ul>
    <li><strong>Autenticação de Usuários:</strong> Cadastro, login e diferenciação de níveis de acesso.</li>
    <li><strong>Postagens:</strong> Criação de posts com título, conteúdo e imagem.</li>
    <li><strong>Comentários:</strong> Adição e exibição de comentários em posts específicos.</li>
    <li><strong>Controle de Sessões:</strong> Garantia de interações seguras apenas para usuários autenticados.</li>
    <li><strong>Banco de Dados:</strong> Relacionamento entre tabelas com chaves estrangeiras.</li>
</ul>

<h2>Tecnologias Utilizadas</h2>
<ul>
    <li><strong>Front-End:</strong> HTML, CSS e JavaScript.</li>
    <li><strong>Back-End:</strong> PHP e MySQL.</li>
    <li><strong>Outras Ferramentas:</strong> XAMPP, Git/GitHub, phpMyAdmin.</li>
</ul>

<h2>Estrutura do Banco de Dados</h2>
<h3>Tabelas e Relacionamentos:</h3>
<ul>
    <li><strong>Tabela <code>usuarios</code>:</strong> Gerencia informações de login (id, nome, email, senha).</li>
    <li><strong>Tabela <code>posts</code>:</strong> Armazena postagens (id, título, conteúdo, imagem, usuário).</li>
    <li><strong>Tabela <code>comentarios</code>:</strong> Relacionada a posts e usuários (id, comentário, post_id, usuario_id).</li>
</ul>

<h2>Como Executar o Projeto</h2>
<ol>
    <li><strong>Clone o Repositório:</strong></li>
    <pre>git clone https://github.com/PennyWASS/Projeto-dev-web.git</pre>

<li><strong>Configure o Banco de Dados:</strong></li>
<p>
    Importe o arquivo SQL incluído no projeto para criar as tabelas no MySQL.
    Certifique-se de atualizar as credenciais de conexão nos arquivos <code>conectarDB.php</code>
    e <code>conectarAdmin.php</code>.
</p>

<li><strong>Inicie o Servidor Local:</strong></li>
<p>
    Utilize o XAMPP ou outra solução de servidor local. Certifique-se de que o Apache e o MySQL estão ativados.
</p>

<li><strong>Acesse o Projeto:</strong></li>
<p>Abra o navegador e acesse <code>http://localhost/caminho-do-projeto</code>.</p>
</ol>

<h2>Possíveis Melhorias Futuras</h2>
<ul>
    <li>Adicionar funcionalidade de upload seguro de imagens com verificação de tipo.</li>
    <li>Implementar paginação para exibição de posts e comentários.</li>
    <li>Melhorar a interface do usuário com frameworks como Bootstrap.</li>
    <li>Criar logs de atividades para administradores.</li>
</ul>

<h2>Contribuições</h2>
<p>
    Contribuições são bem-vindas! Sinta-se à vontade para abrir <strong>issues</strong> ou enviar um <strong>pull request</strong>.
</p>

  <h2>Licença</h2>
  <p>
      Este projeto é de uso livre, mas recomenda-se dar os devidos créditos ao autor ao utilizá-lo.
  </p>
