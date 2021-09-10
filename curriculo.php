<html>

<head>
  <link rel="stylesheet" href="stylec.css" />
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>

  <div id="corpo">
    <div id="informacao-de-contato">
      <h2 id="cabecalho-informacao-contato">Informação de contato</h2>
      <hr class="linha-informacao">
      <h2 class="fonte-informacao-contato">E-mail</h2>
      <?php echo $_GET['inputEmail'] ?>

      <h2 class="fonte-informacao-contato">Endereço</h2>
      <?php echo $_GET['inputRua'].", <br>" . $_GET['inputNumeroCasa'].", ". $_GET['inputBairro'].", <br>" . $_GET['inputCidade'].", " .$_GET['inputEstado']?>
      <h2 class="fonte-informacao-contato">Telefone</h2>
      <?php echo $_GET['inputTelefonePrincipal'] . "</br>" .$_GET['checkWhats']?>
      </br>
      <!-- <?php echo $_GET['inputTelefoneRecado'] . "</br>" .$_GET['checkWhats2']?> -->

      <h2 class="fonte-informacao-contato">Data de nascimento</h2>
      <?php echo $_GET['inputDataNascimento'] ?>
      <h2 class="fonte-informacao-contato">Naturalidade</h2>
      <?php echo $_GET['inputCidadeNascimento'] . "</br>" . $_GET['inputEstadoNascimento'] ?>
      <h2 class="fonte-informacao-contato"><?php echo $_GET['inputRedeSocial']?></h2>
      <a
        href="<?php echo $_GET['inputLinkRedeSocial']?>"><?php echo $_GET['inputLinkRedeSocial']?></a>
      <h2 id="cabecalho-informacao-contato">Habilidades</h2>
      <hr class="linha-informacao">
      <p><?php echo $_GET['inputHabilidades']?> </p>

    </div>



    <div id="conteudo">
      <div id="cabecalho-conteudo">
        <div id="resumo-perfil">
          <!-- <a href="curriculo-pdf.pdf" target="_blank"> -->
            <?php echo "<h1>" . $_GET['inputNome']. "</h1>" ?>
          <!-- </a> -->
          <h2 class="destaque-conteudo"><?php $_GET['inputSituacaoEmpregado']?></h2>
          <p id="resumo-perfil"><?php echo $_GET['inputSobreMim']?></p>
        </div>
        <!-- <div id="foto-perfil"><img src="perfil.jpg" alt="foto-perfil"></div> -->
      </div>

      <hr class="linha-conteudo">

      <div id="experiencias">
        <h2 class="destaque-conteudo">Experiências</h2>

        <div class="experiencia">
          <div class=lado1>
            <?php echo $_GET['inputCidadeEmpresa1']?><br>
            <i><?php echo $_GET['inputInicioEmpresa1']." - ". $_GET['inputFimEmpresa1']?></i>
          </div>
          <!-- <hr class="linha-experiencia"> -->

          <div class="lado2">
            <h2 class="titulo-experiencia"><?php echo $_GET['inputCargoEmpresa1']?></h2>
            <h2 class="destaque-conteudo"><?php echo $_GET['inputNomeEmpresa1']?></h2>
            <?php echo $_GET['inputDescEmpresa1']?>
          </div>
        </div>

        <div class="experiencia">
          <div class=lado1>
            <?php echo $_GET['inputCidadeEmpresa2']?><br>
            <i><?php echo $_GET['inputInicioEmpresa2']." - ". $_GET['inputFimEmpresa2']?></i>
          </div>
          <!-- <hr class="linha-experiencia"> -->

          <div class="lado2">
            <h2 class="titulo-experiencia"><?php echo $_GET['inputCargoEmpresa2']?></h2>
            <h2 class="destaque-conteudo"><?php echo $_GET['inputNomeEmpresa2']?></h2>
            <?php echo $_GET['inputDescEmpresa2']?>
          </div>
        </div>

        <div class="experiencia">
          <div class=lado1>
            <?php echo $_GET['inputCidadeEmpresa3']?><br>
            <i><?php echo $_GET['inputInicioEmpresa3']." - ". $_GET['inputFimEmpresa3']?></i>
          </div>
          <!-- <hr class="linha-experiencia"> -->

          <div class="lado2">
            <h2 class="titulo-experiencia"><?php echo $_GET['inputCargoEmpresa3']?></h2>
            <h2 class="destaque-conteudo"><?php echo $_GET['inputNomeEmpresa3']?></h2>
            <?php echo $_GET['inputDescEmpresa3']?>
          </div>
        </div>

        <!-- <div class="experiencia">
          <div class=lado1>
            Foz do Iguaçu, Brasil<br>
            <i>Janeiro 2018 - Outubro 2018</i>
          </div>
          <hr class="linha-experiencia">

          <div class="lado2">
            <h2 class="titulo-experiencia">Gestor de Vendas em Varejo</h2>
            <h2 class="destaque-conteudo">Damyller Confecções LTDA</h2>
            Gestor de equipe com foco em metas.<br>
            Recrutamento. Treinamento.
          </div>
        </div> -->
      </div>    

      <hr class="linha-conteudo">

      <div id="educacao">
        <h2 class="destaque-conteudo">Educação</h2>

        <div class="educacao-lista">
          <div class="lado2">
            <h2 class="titulo-experiencia"><?php echo $_GET['inputEscolaridade']?></h2>
            <h2 class="destaque-conteudo"><?php echo $_GET['inputInstituicao']?></h2>
              <?php echo $_GET['inputDescCurso']?>
          </div>
        </div>
      </div>


    </div>
  </div>

  

</body>

</html>