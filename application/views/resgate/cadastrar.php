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


            <!--<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label>Tipo de Animal</label>
                                        <input type="text" class="form-control" id="animal" name="animal" value="<?= set_value('animal'); ?>" placeholder="Gato">
                                        <?= form_error('animal', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Data de Resgate</label>
                                        <input type="date" class="form-control" id="data_resgate" name="data_resgate" value="<?= set_value('data_resgate'); ?>">
                                        <?= form_error('data_resgate', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 ">
                                        <label for="sexo">Sexo</label></br>
                                        <select name="sexo" id="sexo">
                                            <option value="Macho">Macho</option>
                                            <option value="Fêmea">Fêmea</option>
                                        </select>
                                        <small></small>
                                        <?= form_error('sexo', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 mb-20">
                                        <label for="cep">CEP:</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="00000-000" id="cep" name="cep" maxlength="9" onblur="pesquisacep(this.value)">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                            </div>
                                            <?= form_error('cep', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro:</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                                            <?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°:</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                            <?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                            <?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 ">
                                        <div class="form-group">
                                            <label for="localidade">Cidade:</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade">
                                            <?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF:</label>
                                            <input type="text" class="form-control" id="uf" name="uf">
                                            <?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="observacao">Observação</label>
                                            <input type="text" class="form-control" id="observacao" name="observacao">
                                            <?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
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
                        </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" aria-hidden="true"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" aria-labelledby="form-title">
                                <fieldset>
                                    <h2 id="form-title" class="sr-only">Formulário de Cadastro de Resgate de Animais</h2>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label for="animal">Tipo de Animal</label>
                                            <input type="text" class="form-control" id="animal" name="animal" value="<?= set_value('animal'); ?>" placeholder="Gato" aria-describedby="animalHelp">
                                            <small id="nome" class="form-text text-muted">Informe o nome do animal.</small>
                                            <?= form_error('animal', '<div class="text-danger" id="animalHelp">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="data_resgate">Data de Resgate</label>
                                            <input type="date" class="form-control" id="data_resgate" name="data_resgate" value="<?= set_value('data_resgate'); ?>" aria-describedby="dataResgateHelp">
                                            <small id="data_resgate" class="form-text text-muted">Informe a Data de Resgate.</small>
                                            <?= form_error('data_resgate', '<div class="text-danger" id="data_resgate">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo" class="form-control" aria-describedby="sexoHelp">
                                                <option value="Macho">Macho</option>
                                                <option value="Fêmea">Fêmea</option>
                                            </select>
                                            <small id="data_resgate" class="form-text text-muted">Informe o Sexo do Animal.</small>
                                            <?= form_error('sexo', '<div class="text-danger" id="sexo">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 mb-20">
                                            <label for="cep">CEP:</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="00000-000" id="cep" name="cep" maxlength="9" onblur="pesquisacep(this.value)" aria-required="true">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" aria-label="Buscar CEP">Buscar</button>
                                                </div>
                                                <?= form_error('cep', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            </div>
                                            <small id="cep" class="form-text text-muted">CEP</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="logradouro">Logradouro:</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro" aria-describedby="logradouroHelp">
                                            <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                            <?= form_error('logradouro', '<div class="text-danger" id="logradouro">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="numero">N°:</label>
                                            <input type="text" class="form-control" id="numero" name="numero" aria-describedby="numeroHelp">                                          
                                            <small id="logradouro" class="form-text text-muted">Informe o Número.</small>
                                            <?= form_error('numero', '<div class="text-danger" id="numero">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="bairroHelp">
                                            <small id="bairro" class="form-text text-muted">Informe o Bairro.</small>
                                            <?= form_error('bairro', '<div class="text-danger" id="bairro">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="localidade">Cidade:</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade" aria-describedby="localidadeHelp">
                                            <small id="localidade" class="form-text text-muted">Cidade</small>
                                            <?= form_error('localidade', '<div class="text-danger" id="localidadeHelp">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="uf">UF:</label>
                                            <input type="text" class="form-control" id="uf" name="uf" aria-describedby="uf">
                                            <small id="estado" class="form-text text-muted">Estado</small>
                                            <?= form_error('uf', '<div class="text-danger" id="uf">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="observacao">Observação</label>
                                            <input type="text" class="form-control" id="observacao" name="observacao" aria-describedby="observacaoHelp">
                                            <small id="observacao" class="form-text text-muted">Observação</small>
                                            <?= form_error('observacao', '<div class="text-danger" id="observacao">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 ml-20">
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
    </div>