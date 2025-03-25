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

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" enctype="multipart/form-data" aria-label="Formulário de cadastro de animal">
                                <fieldset>
                                    <legend id="form_heading" class="sr-only">Cadastro de Animais</legend>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label for="tipo_animal">Tipo de Animal</label>
                                            <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?= set_value('tipo_animal'); ?>" style="text-transform: uppercase;" aria-required="true">
                                            <?= form_error('tipo_animal', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="tipo_animal" class="form-text text-muted">Tipo de Animal</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="nome">Nome do Animal</label>
                                            <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome'); ?>" style="text-transform: uppercase;" aria-required="true">
                                            <?= form_error('nome', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="nome" class="form-text text-muted">Nome do Animal</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="raca">Raça</label>
                                            <input type="text" class="form-control" id="raca" name="raca" value="<?= set_value('raca'); ?>" style="text-transform: uppercase;" aria-required="true">
                                            <?= form_error('raca', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="raca" class="form-text text-muted">Raça do Animal</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="cor">Cor</label>
                                            <input type="text" class="form-control" id="cor" name="cor" value="<?= set_value('cor'); ?>" style="text-transform: uppercase;" aria-required="true">
                                            <?= form_error('cor', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="cor" class="form-text text-muted">Cor do Animal</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= set_value('data_cadastro'); ?>" aria-required="true">
                                            <?= form_error('data_cadastro', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="data_cadastro" class="form-text text-muted">Data de Cadastro</small>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo" class="form-control" aria-required="true">
                                                <option value="Macho">Macho</option>
                                                <option value="Fêmea">Fêmea</option>
                                            </select>
                                            <?= form_error('sexo', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="sexo" class="form-text text-muted">Sexo do Animal</small>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="castrado">Castrado</label>
                                            <select name="castrado" id="castrado" class="form-control" aria-required="true">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                            <?= form_error('castrado', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="castrado" class="form-text text-muted">Animal Castrado</small>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="porte">Porte</label>
                                            <select name="porte" id="porte" class="form-control" aria-required="true">
                                                <option value="Pequeno">Pequeno</option>
                                                <option value="Médio">Médio</option>
                                                <option value="Grande">Grande</option>
                                            </select>
                                            <?= form_error('porte', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="porte" class="form-text text-muted">Porte do Animal</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="observacao">Observação</label>
                                            <textarea class="form-control" id="observacao" name="observacao" aria-required="false"><?= set_value('observacao'); ?></textarea>
                                            <?= form_error('observacao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="observacao" class="form-text text-muted">Observações sobre o Animal</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="foto">Foto do Animal</label>
                                            <input type="file" class="form-control" id="foto" name="foto" aria-required="false">
                                            <?= form_error('foto', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="foto" class="form-text text-muted">Envie uma foto do animal</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Cadastrar</button>
                                            <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-primary ml-20">Voltar</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>