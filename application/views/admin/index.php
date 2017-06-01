    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel de Controle
        <small>Versão 1.0</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Itens no menu</p>
            </div>
            <div class="icon">
              <i class="ion ion-navicon"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Serviços Cadastrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Itens no portifolio</p>
            </div>
            <div class="icon">
              <i class="ion ion-grid"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>65</h3>

              <p>Histórias sobre a empresa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
          <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                  <div class="inner">
                      <h3>65</h3>

                      <p>Pessoas da equipe</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-ios-people"></i>
                  </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-darkest-gray">
                  <div class="inner">
                      <h3>65</h3>

                      <p>Parceiros</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-arrow-graph-up-right"></i>
                  </div>
              </div>
          </div>
          <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">


            <!-- Calendar -->
            <div class="box box-solid bg-aqua-gradient">
                <div class="box-header">
                    <i class="ion ion-navicon"></i>

                    <h3 class="box-title">Itens do menu</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block btn-lg" style="margin-bottom: 20px;background-color: #00c0ef;color: white">Edicionar item</button>
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th>Menu</th>
                            <th>Link</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-yellow-gradient">
                <div class="box-header">
                    <i class="ion ion-grid"></i>

                    <h3 class="box-title">Portifolio</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-yellow btn-lg" style="margin-bottom: 20px">Edicionar portfolio</button>
                    <table class="table table-striped table-bordered table-list">
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
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-purple-gradient">
                <div class="box-header">
                    <i class="ion ion-ios-people"></i>

                    <h3 class="box-title">Equipe</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-purple btn-success btn-lg" style="margin-bottom: 20px">Edicionar pessoa</button>
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Imagem</th>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Linkedin</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
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
                    <h3>Atual: <?php echo $config_msg ?></h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Mensagem nova">
                        </div>
                        <input type="submit" class="form-control" value="Atualizar">
                    </form>
                </div>
            </div>

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="ion ion-briefcase"></i>

              <h3 class="box-title">Serviços</h3>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <button class="btn btn-block btn-success btn-lg" style="margin-bottom: 20px">Edicionar serviço</button>
                <table class="table table-striped table-bordered table-list">
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
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-blue-gradient">
                <div class="box-header">
                    <i class="ion ion-ios-paper"></i>

                    <h3 class="box-title">História</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-blue btn-lg" style="margin-bottom: 20px">Edicionar história</button>
                    <table class="table table-striped table-bordered table-list">
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
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-darkest-gray">
                <div class="box-header" style="color: black">
                    <i class="ion ion-arrow-graph-up-right"></i>

                    <h3 class="box-title">Parceiros</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <button class="btn btn-block bg-darkest btn-lg" style="margin-bottom: 20px">Edicionar parceiros</button>
                    <table class="table table-striped table-bordered table-list">
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
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
    <script>
        $('.textarea').wysihtml5();
    </script>