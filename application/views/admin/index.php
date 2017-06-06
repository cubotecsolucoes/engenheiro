    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel de Controle
        <small>Versão 1.1</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
          <a href="#servicos">
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3 id="serviceCount"></h3>

                  <p>Serviços Cadastrados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-briefcase"></i>
                </div>
              </div>
            </div>
          </a>
        <!-- ./col -->
          <a href="#portfolio">
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3 id="portfolioCount"></h3>

                  <p>Itens no portifolio</p>
                </div>
                <div class="icon">
                  <i class="ion ion-grid"></i>
                </div>
              </div>
            </div>
          </a>
        <!-- ./col -->
          <a href="#historia">
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3 id="aboutCount"></h3>

                  <p>Histórias sobre a empresa</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-paper"></i>
                </div>
              </div>
            </div>
          </a>
        <!-- ./col -->
          <a href="#equipe">
              <div class="col-lg-2 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-purple">
                      <div class="inner">
                          <h3 id="teamCount"></h3>

                          <p>Pessoas da equipe</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-ios-people"></i>
                      </div>
                  </div>
              </div>
          </a>
              <!-- ./col -->
          <a href="#parceiros">
                <div class="col-lg-2 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-darkest-gray">
                      <div class="inner">
                          <h3 id="partnerCount"></h3>

                          <p>Parceiros</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-arrow-graph-up-right"></i>
                      </div>
                  </div>
              </div>
          </a>
          <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
            <!-- Portfolio -->
            <div id="portfolio" class="box box-solid bg-yellow-gradient">
                <div class="box-header">
                    <i class="ion ion-grid"></i>

                    <h3 class="box-title">Portifolio</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-yellow btn-lg" id="openModal" data-options="portfolio" style="margin-bottom: 20px">Edicionar portfolio</button>
                    <table class="table table-striped table-bordered table-list" id="tabelaPortfolio">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Subtitulo</th>
                            <th>Descripção</th>
                            <th>Imagem</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <!-- Equipe -->
            <div id="equipe" class="box box-solid bg-purple-gradient">
                <div class="box-header">
                    <i class="ion ion-ios-people"></i>

                    <h3 class="box-title">Equipe</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-purple btn-success btn-lg" id="openModal" data-options="team" style="margin-bottom: 20px">Edicionar pessoa</button>
                    <table class="table table-striped table-bordered table-list" id="tabelaEquipe">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Imagem</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">
            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="ion ion-chatbubble"></i>

                    <h3 class="box-title">Mensagem de Boas vindas</h3>
                </div>
                <div class="box-body">
                    <h3>Titulo: <b id="title"><?php echo $config_title ?></b></h3>
                    <h4>Subtitulo: <b id="subtitle"><?php echo $config_subtitle ?></b></h4>
                    <hr>
                    <form id="AtualizarMensagem">
                        <div class="form-group input-group">
                          <span class="input-group-addon">Titulo</span>
                          <input type="text" class="form-control" name="title" required="required" placeholder="Novo Titulo">
                        </div>
                        <div class="form-group input-group">
                          <span class="input-group-addon">Subtitulo</span>
                          <input type="text" class="form-control" name="subtitle" required="required" placeholder="Novo Subtitulo">
                        </div>
                        <input type="submit" class="form-control" value="Atualizar">
                    </form>
                </div>
            </div>

          <!-- Serviços -->
          <div id="servicos" class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="ion ion-briefcase"></i>

              <h3 class="box-title">Serviços</h3>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <button class="btn btn-block btn-success btn-lg" id="openModal" data-options="service" style="margin-bottom: 20px">Edicionar serviço</button>
                <table class="table table-striped table-bordered table-list" id="tabelaServicos">
                    <thead>
                    <tr>
                        <th>Icone</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <!-- /.box -->

            <!-- História -->
            <div id="historia" class="box box-solid bg-blue-gradient">
                <div class="box-header">
                    <i class="ion ion-ios-paper"></i>

                    <h3 class="box-title">História</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-blue btn-lg" id="openModal" data-options="about" style="margin-bottom: 20px">Edicionar história</button>
                    <table class="table table-striped table-bordered table-list" id="tabelaHistoria">
                        <thead>
                        <tr>
                            <th>Ano</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <!-- Parceiros -->
            <div id="parceiros" class="box box-solid bg-darkest-gray">
                <div class="box-header" style="color: black">
                    <i class="ion ion-arrow-graph-up-right"></i>

                    <h3 class="box-title">Parceiros</h3>
                </div>
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-darkest btn-lg" id="openModal" data-options="partners" style="margin-bottom: 20px">Edicionar parceiros</button>
                    <table class="table table-striped table-bordered table-list" id="tabelaParceiros">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Link</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

<div role="dialog" id="modalForm" tabindex="-1" class="modal fade in" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
      <form id="formModal">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"></h4></div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning pull-right" type="button" data-dismiss="modal">Cancelar </button>
                <button class="btn btn-success pull-left" type="submit">Salvar </button>
            </div>
        </div>
      </form>
    </div>
</div>

    <script>
    var site_url = "<?php echo(site_url()) ?>";
    var token = "123";
    
    $(document).ready(function(){

      $('.textarea').wysihtml5();

      var tabelaParceiros = $("#tabelaParceiros").DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });
      var tabelaEquipe = $("#tabelaEquipe").DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });
      var tabelaHistoria = $("#tabelaHistoria").DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });
      var tabelaMenu = $("#tabelaMenu" ).DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });
      var tabelaPortfolio = $("#tabelaPortfolio").DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });
      var tabelaServicos = $("#tabelaServicos").DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        },
        "pageLength": 10
      });

      $(document).on('submit', '#AtualizarMensagem', function(event) {
        event.preventDefault();
        $.post(site_url + '/controle/atualizarMensagem/' + token, $(this).serialize(), function(data, textStatus, xhr) {
          if (textStatus != 'success') 
          {
            console.log("Erro ao salvar o titulo e subtitulo!");
          }
          else
          {
            DrawMensage();
          }
        });
      });

      DrawBoxMenu();
      DrawBoxServico();
      DrawBoxPortfolio();
      DrawBoxHistoria();
      DrawBoxEquipe();
      DrawBoxParceiro();

      DrawTableMenu();
      DrawTableServicos();
      DrawTablePortfolio();
      DrawTableHistoria();
      DrawTableEquipe();
      DrawTableParceiros();


      // BUTTON FUNCTION
      $(document).on('click', '.botao', function(event) {
        var id = this.getAttribute('data-id');
        var acao = this.getAttribute('data-acao');
        var tipo = this.getAttribute('data-tipo');
        if (acao == 'delete')
        {
          if (tipo == 'menu') {$.post(site_url + '/controle/deleteMenu/' + token + '/' + id, function(){DrawTableMenu()});}
          else if (tipo == 'portfolio') {$.post(site_url + '/controle/deletePortfolio/' + token + '/' + id, function(){DrawTablePortfolio()});}
          else if (tipo == 'team') {$.post(site_url + '/controle/deleteTeam/' + token + '/' + id, function(){DrawTableEquipe()});}
          else if (tipo == 'service') {$.post(site_url + '/controle/deleteService/' + token + '/' + id, function(){DrawTableServicos()});}
          else if (tipo == 'about') {$.post(site_url + '/controle/deleteAbout/' + token + '/' + id, function(){DrawTableHistoria()});}
          else if (tipo == 'partners') {$.post(site_url + '/controle/deletePartners/' + token + '/' + id, function(){DrawTableParceiros()});}
        }
      });

      // MODAL FUNCTIONS
        // OPEN MODAL
      $(document).on('click', '#openModal', function(event) {
        event.preventDefault();
        var loadForm = this.getAttribute('data-options');
        $('#modalForm').find('form').attr('data-form', loadForm);
        $('.modal-title').text('Novo ' + loadForm);
        if (loadForm == 'menu') 
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Nome</span>' +
            '<input type="text" class="form-control" name="menu" required="required" placeholder="Nome do menu">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Link</span>' +
            '<input type="text" class="form-control" name="link" required="required" placeholder="Link do menu">' +
          '</div>';
        }
        else if (loadForm == 'portfolio')
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Titulo</span>' +
            '<input type="text" class="form-control" name="title" required="required" placeholder="Titulo do portfolio">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Subtitulo</span>' +
            '<input type="text" class="form-control" name="subtitle" required="required" placeholder="Subtitulo do portfolio">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Descrição</span>' +
            '<input type="text" class="form-control" name="description" required="required" placeholder="Descrição do portfolio">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Imagem</span>' +
            '<input type="file" name="img">' +
          '</div>';
        }
        else if (loadForm == 'team')
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Nome</span>' +
            '<input type="text" class="form-control" name="name" required="required" placeholder="Nome da pessoa">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Cargo</span>' +
            '<input type="text" class="form-control" name="office" required="required" placeholder="Cargo da pessoa">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Twitter</span>' +
            '<input type="text" class="form-control" name="twitter" placeholder="Twitter da pessoa">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Facebook</span>' +
            '<input type="text" class="form-control" name="face" placeholder="Facebook da pessoa">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Linkedin</span>' +
            '<input type="text" class="form-control" name="linkedin" placeholder="Linkedin da pessoa">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Imagem</span>' +
            '<input type="file" name="img">' +
          '</div>';
        }
        else if (loadForm == 'service')
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Icone</span>' +
            '<input type="text" class="form-control" name="icon" required="required" placeholder="Icone do serviço">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Titulo</span>' +
            '<input type="text" class="form-control" name="title" required="required" placeholder="Titulo do serviço">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Descrição</span>' +
            '<input type="text" class="form-control" name="description" placeholder="Descrição do serviço">' +
          '</div>';
        }
        else if (loadForm == 'about')
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Ano</span>' +
            '<input type="text" class="form-control" name="year" required="required" placeholder="Ano da história">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Titulo</span>' +
            '<input type="text" class="form-control" name="title" required="required" placeholder="Titulo da história">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Descrição</span>' +
            '<input type="text" class="form-control" name="description" placeholder="Descrição da história">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Imagem</span>' +
            '<input type="file" name="img">' +
          '</div>';
        }
        else if (loadForm == 'partners')
        {
          var texto = '' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Nome</span>' +
            '<input type="text" class="form-control" name="name" required="required" placeholder="Nome do parceiro">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Site</span>' +
            '<input type="text" class="form-control" name="url" required="required" placeholder="Site do parceiro">' +
          '</div>' +
          '<div class="form-group input-group">' +
            '<span class="input-group-addon">Imagem</span>' +
            '<input type="file" name="img">' +
          '</div>';
        }
        $('.modal-body').append(texto);
        $('#modalForm').modal();
      });

        // ON MODAL CLOSE
      $('#modalForm').on('hidden.bs.modal', function(event) {
        $('.modal-body').text('');
      });

        // SUBMIT MODAL FORM
      $(document).on('submit', '#formModal', function(event) {
          event.preventDefault();
          var tipo = this.getAttribute('data-form');
          if (tipo == 'menu') {tipo = 'addMenu';}
          else if (tipo == 'portfolio') {tipo = 'addPortfolio';}
          else if (tipo == 'team') {tipo = 'addTeam';}
          else if (tipo == 'service') {tipo = 'addService';}
          else if (tipo == 'about') {tipo = 'addAbout';}
          else if (tipo == 'partners') {tipo = 'addPartners';}

          var formData = new FormData(this);

          $.ajax({
            url: site_url + '/controle/' + tipo + '/' + token,
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function () {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
            return myXhr;
            }
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });
          

          $.post(site_url + '/controle/' + tipo + '/' + token, $(this).serialize(), function(data, textStatus, xhr) {
            if (textStatus == 'success')
            {
              $('#modalForm').modal('hide');
              if (tipo == 'addMenu') {DrawTableMenu();}
              else if (tipo == 'addPortfolio') {DrawTablePortfolio();}
              else if (tipo == 'addTeam') {DrawTableEquipe();}
              else if (tipo == 'addService') {DrawTableServicos();}
              else if (tipo == 'addAbout') {DrawTableHistoria();}
              else if (tipo == 'addPartners') {DrawTableParceiros();}
            }
          });
      });

      // $(document).on('submit', '#formModal', function(event) {
      //     event.preventDefault();
      //     var tipo = this.getAttribute('data-form');
      //     if (tipo == 'menu') {tipo = 'addMenu';}
      //     else if (tipo == 'portfolio') {tipo = 'addPortfolio';}
      //     else if (tipo == 'team') {tipo = 'addTeam';}
      //     else if (tipo == 'service') {tipo = 'addService';}
      //     else if (tipo == 'about') {tipo = 'addAbout';}
      //     else if (tipo == 'partners') {tipo = 'addPartners';}

      //     $.post(site_url + '/controle/' + tipo + '/' + token, $(this).serialize(), function(data, textStatus, xhr) {
      //       if (textStatus == 'success')
      //       {
      //         $('#modalForm').modal('hide');
      //         if (tipo == 'addMenu') {DrawTableMenu();}
      //         else if (tipo == 'addPortfolio') {DrawTablePortfolio();}
      //         else if (tipo == 'addTeam') {DrawTableEquipe();}
      //         else if (tipo == 'addService') {DrawTableServicos();}
      //         else if (tipo == 'addAbout') {DrawTableHistoria();}
      //         else if (tipo == 'addPartners') {DrawTableParceiros();}
      //       }
      //     });
      // });


      // MENSAGE MENSAGE
      function DrawMensage() {
        $.getJSON(site_url + '/controle/getMensage/', function(json, textStatus) {
            if (textStatus == 'success') 
            {
              if (json.length != 0) 
              {
                $('#title').text(json['title']);
                $('#subtitle').text(json['subtitle']);
              }
              else
              {
                console.log("Nenhum Retorno do titulo e subtitulo");
              }
            }
            else
            {
              console.log("Erro ao tentar obter o titule e subtitulo!");
            }
        });
      }

      // DRAW BOX

      function DrawBoxMenu() {
        $.getJSON(site_url + '/controle/getCountMenu/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#menuCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }

      function DrawBoxServico() {
        $.getJSON(site_url + '/controle/getCountService/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#serviceCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }

      function DrawBoxPortfolio() {
        $.getJSON(site_url + '/controle/getCountPortfolio/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#portfolioCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }

      function DrawBoxHistoria() {
        $.getJSON(site_url + '/controle/getCountAbout/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#aboutCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }

      function DrawBoxEquipe() {
        $.getJSON(site_url + '/controle/getCountTeam/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#teamCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }

      function DrawBoxParceiro() {
        $.getJSON(site_url + '/controle/getCountPartner/', function(json, textStatus) {
          if (textStatus == 'success') 
          {
            $('#partnerCount').text(json[0]);
          }
          else
          {
            console.log("Error ao obter o número de itens.");
          }
        });
      }


      // PRINT BUTTON
      function printButton(id,tipo,acao) {
        var button = '<button type="button" title="Remover" data-id="'+ id +'" data-tipo="'+ tipo +'" data-acao="'+ acao +'" class="btn btn-danger botao pull-right"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
        return button;
      }

      // DRAW TABLE

      function DrawTableMenu() {
                $.getJSON(site_url + '/controle/getMenuList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          tabelaMenu.clear();
                            $.each(json, function (index, item)
                            {

                                tabelaMenu.row.add([
                                    item.menu,
                                    item.link,
                                    printButton(item.id,'menu','delete')
                                ]).draw();
                            });
                        }
                    }
                );
      };

      function DrawTableParceiros() {
                $.getJSON(site_url + '/controle/getPartnersList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          if (json.length > 0)
                          {
                            tabelaParceiros.clear();
                            $.each(json, function (index, item)
                            {
                                tabelaParceiros.row.add([
                                    item.name,
                                    item.img,
                                    item.url,
                                    printButton(item.id,'partners','delete')
                                ]).draw();
                            });
                          }
                          else
                          {
                            tabelaPerceiros.clear();
                          }
                        }
                    }
                );
      };

      function DrawTableEquipe() {
                $.getJSON(site_url + '/controle/getTeamList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          tabelaEquipe.clear();
                            $.each(json, function (index, item)
                            {
                                tabelaEquipe.row.add([
                                    item.name,
                                    item.office,
                                    item.img,
                                    printButton(item.id,'team','delete')
                                ]).draw();
                            });
                        }
                    }
                );
      };

      function DrawTableHistoria() {
                $.getJSON(site_url + '/controle/getAboutList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          tabelaHistoria.clear();
                            $.each(json, function (index, item)
                            {
                                tabelaHistoria.row.add([
                                    item.year,
                                    item.title,
                                    item.description,
                                    item.img,
                                    printButton(item.id,'about','delete')
                                ]).draw();
                            });
                        }
                    }
                );
      };

      function DrawTablePortfolio() {
                $.getJSON(site_url + '/controle/getPortfolioList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          tabelaPortfolio.clear();
                            $.each(json, function (index, item)
                            {
                                tabelaPortfolio.row.add([
                                    item.title,
                                    item.subtitle,
                                    item.description,
                                    item.img,
                                    printButton(item.id,'portfolio','delete')
                                ]).draw();
                            });
                        }
                    }
                );
      };

      function DrawTableServicos() {
                $.getJSON(site_url + '/controle/getServiceList/' + token,function(json,textStatus) {
                        if (textStatus == 'success')
                        {
                          tabelaServicos.clear();
                            $.each(json, function (index, item)
                            {
                                tabelaServicos.row.add([
                                    item.icon,
                                    item.title,
                                    item.description,
                                    printButton(item.id,'service','delete')
                                ]).draw();
                            });
                        }
                    }
                );
      };
       
    });
        
        

    </script>