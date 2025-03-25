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
                                    <div class="col-md-4 mb-20">
                                        <label>Nome do Adotante</label>
                                        <input type="text" class="form-control" id="nome_adotante" name="nome_adotante" value="<?= set_value('nome_adotante'); ?>">
                                        <//?= form_error('nome_adotante', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>">
                                        <//?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Data de Adoção</label>
                                        <input type="date" class="form-control" id="data_adocao" name="data_adocao" value="<?= set_value('data_adocao'); ?>">
                                        <//?= form_error('data_adocao', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 mb-20">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                                        <//?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Celular</label>
                                        <input type="text" class="form-control" id="celular" name="celular" value="<?= set_value('celular'); ?>">
                                        <//?= form_error('celular', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label>Tipo de Animal</label>
                                        <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?= set_value('tipo_animal'); ?>" placeholder="Gato">
                                        <//?= form_error('tipo_animal', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Nome do Animal</label>
                                        <input type="text" class="form-control" id="nome_animal" name="nome_animal" value="<?= set_value('nome_animal'); ?>">
                                        <//?= form_error('nome_animal', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 ">
                                        <label for="sexo_animal">Sexo</label></br>
                                        <select name="sexo_animal" id="sexo_animal">
                                            <option value="Macho">Macho</option>
                                            <option value="Fêmea">Fêmea</option>
                                        </select>
                                        <small></small>
                                        <//?= form_error('sexo_animal', '<div class="text-danger">', '</div>'); ?>
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
                                            <//?= form_error('cep', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro:</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                                            <//?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°:</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                            <//?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                            <//?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3 ">
                                        <div class="form-group">
                                            <label for="localidade">Cidade:</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade">
                                            <//?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF:</label>
                                            <input type="text" class="form-control" id="uf" name="uf">
                                            <//?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="observacao">Observação</label>
                                            <input type="text" class="form-control" id="observacao" name="observacao">
                                            <//?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 ml-20">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            <a href="<//?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20">Voltar</a>
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
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" aria-labelledby="form-title">                               
                                <fieldset>
                                    <legend id="form_heading" class="sr-only">Formulário de Adoção</legend>
                                    <div class="form-group row">
                                        <div class="col-md-4 mb-20">
                                            <label for="nome_adotante">Nome do Adotante</label>
                                            <input type="text" class="form-control" id="nome_adotante" name="nome_adotante" value="<?= set_value('nome_adotante'); ?>" aria-required="true">
                                            <?= form_error('nome_adotante', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="nome_adotante" class="form-text text-muted">Nome Completo.</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>" aria-required="true">
                                            <?= form_error('cpf', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="cpf" class="form-text text-muted">Número do CPF.</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="data_adocao">Data de Adoção</label>
                                            <input type="date" class="form-control" id="data_adocao" name="data_adocao" value="<?= set_value('data_adocao'); ?>" aria-required="true">
                                            <?= form_error('data_adocao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="data_adocao" class="form-text text-muted">Data da Adoção.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 mb-20">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" aria-required="true">
                                            <?= form_error('email', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="email" class="form-text text-muted">Endereço de e-mail.</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" value="<?= set_value('celular'); ?>" aria-required="true">
                                            <?= form_error('celular', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="celular" class="form-text text-muted">Celular.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label for="tipo_animal">Tipo de Animal</label>
                                            <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?= set_value('tipo_animal'); ?>" placeholder="Gato" aria-required="true">
                                            <?= form_error('tipo_animal', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="tipo_animal" class="form-text text-muted">Tipo de Animal.</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="nome_animal">Nome do Animal</label>
                                            <input type="text" class="form-control" id="nome_animal" name="nome_animal" value="<?= set_value('nome_animal'); ?>" aria-required="true">
                                            <?= form_error('nome_animal', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="nome_animal" class="form-text text-muted">Nome do Animal.</small>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="sexo_animal">Sexo</label><br>
                                            <select name="sexo_animal" id="sexo_animal" aria-required="true">
                                                <option value="Macho">Macho</option>
                                                <option value="Fêmea">Fêmea</option>
                                            </select>
                                            <?= form_error('sexo_animal', '<div class="text-danger" role="alert">', '</div>'); ?>
                                            <small id="sexo_animal" class="form-text text-muted">Sexo do Animal</small>
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
                                            <div class="form-group">
                                                <label for="logradouro">Logradouro:</label>
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" aria-required="true">
                                                <?= form_error('logradouro', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="numero">N°:</label>
                                                <input type="text" class="form-control" id="numero" name="numero" aria-required="true">
                                                <?= form_error('numero', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="numero" class="form-text text-muted">Número</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <div class="form-group">
                                                <label for="bairro">Bairro:</label>
                                                <input type="text" class="form-control" id="bairro" name="bairro" aria-required="true">
                                                <?= form_error('bairro', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="bairro" class="form-text text-muted">Bairro</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="localidade">Cidade:</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" aria-required="true">
                                                <?= form_error('localidade', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="localidade" class="form-text text-muted">Cidade</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF:</label>
                                                <input type="text" class="form-control" id="uf" name="uf" aria-required="true">
                                                <?= form_error('uf', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="uf" class="form-text text-muted">Estado</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="observacao">Observação</label>
                                                <input type="text" class="form-control" id="observacao" name="observacao">
                                                <?= form_error('observacao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                                <small id="observacao" class="form-text text-muted">Observação</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 ml-20">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" aria-label="Cadastrar Adoção">Cadastrar</button>
                                                <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info ml-20" aria-label="Voltar à Lista de Adoções">Voltar</a>
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
    </div>