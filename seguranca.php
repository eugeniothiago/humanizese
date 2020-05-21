<HTML>
<HEAD>
 <TITLE>SAADS</TITLE>
</HEAD>
<BODY>
      <?php
        //  Configuracoes do Script
        // ==============================
        $_SG['conectaServidor'] = true;    // Abre uma conex�o com o servidor MySQL
        $_SG['abreSessao'] = true;         // Inicia a sess�o com um session_start()

        $_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' � diferente de 'THIAGO'

        $_SG['validaSempre'] = true;       // Deseja validar o usu�rio e a senha a cada carregamento de p�gina?
        // Evita que, ao mudar os dados do usu�rio no banco de dado o mesmo continue logado.

        $_SG['servidor'] = 'localhost';    // Servidor MySQL
        $_SG['usuario'] = 'root';          // Usu�rio MySQL
        $_SG['senha'] = '';                // Senha MySQL
        $_SG['banco'] = 'site';            // Banco de dados MySQL

        $_SG['paginaLogin'] = 'index.php'; // P�gina de login

        $_SG['tabela'] = 'login';       // Nome da tabela onde os usu�rios s�o salvos
        // ==============================

        // ======================================
        //   ~ Não edite a partir deste ponto ~
        // ======================================

        // Verifica se precisa fazer a conex�o com o MySQL
          if ($_SG['conectaServidor'] == true) {
            $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: N�o foi poss�vel conectar-se ao servidor [".$_SG['servidor']."].");
            mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: N�o foi poss�vel conectar-se ao banco de dados [".$_SG['banco']."].");
          }

        // Verifica se precisa iniciar a sessao
          if ($_SG['abreSessao'] == true)
            session_start();

        /**
        * Funcao que valida um usuario e senha
        *
        * @param string $usuario - O usuario a ser validado
        * @param string $senha - A senha a ser validada
        *
        * @return bool - Se o usuario foi validado ou nao (true/false)
        */
          function validaUsuario($usuario, $senha) {
            global $_SG;

            $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

            // Usa a funcao addslashes para escapar as aspas
            $nusuario = addslashes($usuario);
            $nsenha = addslashes($senha);

            // Monta uma consulta SQL para procurar um usu�rio
            $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `email` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
            $query = mysql_query($sql);
            $resultado = mysql_fetch_assoc($query);

            // Verifica se encontrou algum registro
            if (empty($resultado)) {
              /* Nenhum registro foi encontrado => o usuario e invalido */
              return false;
            } else {
              // Definimos dois valores na sessao com os dados do usuario
              $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
              $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL

              // Verifica a opcao se sempre validar o login
              if ($_SG['validaSempre'] == true) {
                // Definimos dois valores na sessao com os dados do login
                $_SESSION['usuarioLogin'] = $usuario;
                $_SESSION['usuarioSenha'] = $senha;
              }

              return true;
            }
          }

        /**
        * Fun��o que protege uma p�gina
        */
        function protegePagina() {
          global $_SG;

            if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
              // Não há usuário logado, manda pra página de login
              expulsaVisitante(); }

            else  {
              // Há usuario logado, verifica se precisa validar o login novamente
              if ($_SG['validaSempre'] == true) {
                // Verifica se os dados salvos na sess�o batem com os dados do banco de dados
                if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
                  // Os dados n�o batem, manda pra tela de login
                  expulsaVisitante();
                }
              }
            }
        }

        /**
        * Funcao para expulsar um visitante
        */
          function expulsaVisitante() {
            global $_SG;

            // Remove as variaveis da sessao (caso elas existam)
            unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

            // Manda pra tela de login
            header("Location: ".$_SG['paginaLogin']);
          }
      ?>
</BODY>
</HTML>
