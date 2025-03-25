<?php $this->load->view('layout/navbar'); ?>
<div class="page-wrap">

    <?php $this->load->view('layout/sidebar'); ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?= $icone_view; ?>" style=" background-color: DarkOrange;"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            <!--  <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST">
                                <div class="form-group row">
                                    <div class="col-md-6 mb-20">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" style="text-transform: uppercase;">
                                        <?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf">
                                            <?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label for="valor">Valor</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="R$" id="valor" name="valor">
                                            <?= form_error('valor', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-10">
                                        <div class="form-group">Data da Doação</label>
                                            <input type="date" class="form-control" id="data_doacao" name="data_doacao">
                                            <?= form_error('data_doacao', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-10">
                                        <div class="form-group">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="form-group row">
                                    <div class="col-md-6 ml-20">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" aria-labelledby="formTitle">
                                <fieldset>
                                    <legend id="formTitle" class="sr-only">Formulário de Cadastro de Doações</legend>
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-20">
                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" style="text-transform: uppercase;" aria-describedby="nomeHelp">
                                            <small id="nome" class="form-text text-muted">Informe o nome completo.</small>
                                            <?= form_error('nome', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="cpfHelp">
                                                <small id="cpf" class="form-text text-muted">Informe o CPF no formato 000.000.000-00.</small>
                                                <?= form_error('cpf', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 mt-10">
                                            <div class="form-group">
                                                <label for="valor">Valor</label>
                                                <input type="text" class="form-control" placeholder="R$" id="valor" name="valor" aria-describedby="valorHelp">
                                                <small id="valor" class="form-text text-muted">Informe o valor da doação.</small>
                                                <?= form_error('valor', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-10">
                                            <div class="form-group">
                                                <label for="data_doacao">Data da Doação</label>
                                                <input type="date" class="form-control" id="data_doacao" name="data_doacao" aria-describedby="dataHelp">
                                                <small id="data_doacao" class="form-text text-muted">Selecione a data da doação.</small>
                                                <?= form_error('data_doacao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-10">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                                <small id="email" class="form-text text-muted">Informe um e-mail válido.</small>
                                                <?= form_error('email', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 ml-20">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" aria-label="Cadastrar doação">Cadastrar</button>
                                                <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-primary ml-20" aria-label="Voltar para a página anterior">Voltar</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" aria-labelledby="formTitle">
                                <fieldset>
                                    <legend id="formTitle" class="sr-only">Formulário de Cadastro de Doações</legend>
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-20">
                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" style="text-transform: uppercase;" aria-describedby="nomeHelp">
                                            <small id="nome" class="form-text text-muted">Informe o nome completo</small>
                                            <?= form_error('nome', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="cpfHelp">
                                                <small id="cpf" class="form-text text-muted">Informe o CPF no formato 000.000.000-00</small>
                                                <?= form_error('cpf', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 mt-10">
                                            <div class="form-group">
                                                <label for="valor">Valor</label>
                                                <input type="text" class="form-control" placeholder="R$" id="valor" name="valor" aria-describedby="valorHelp">
                                                <small id="valor" class="form-text text-muted">Informe o valor da doação</small>
                                                <?= form_error('valor', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-10">
                                            <div class="form-group">
                                                <label for="data_doacao">Data da Doação</label>
                                                <input type="date" class="form-control" id="data_doacao" name="data_doacao" aria-describedby="dataHelp">
                                                <small id="data_doacao" class="form-text text-muted">Selecione a data da doação</small>
                                                <?= form_error('data_doacao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-10">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                                <small id="email" class="form-text text-muted">Informe um e-mail válido</small>
                                                <?= form_error('email', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 ml-20">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" aria-label="Cadastrar doação">Cadastrar</button>
                                                <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-primary ml-20" aria-label="Voltar para a página anterior">Voltar</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>