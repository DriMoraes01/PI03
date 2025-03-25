<?php $this->load->view('layout/navbar'); ?>
<div class="page-wrap">

    <?php $this->load->view('layout/sidebar'); ?>

    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?= $icone_view; ?>" style="background-color: DarkOrange;"></i>
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
            <?php if ($error = $this->session->flashdata('error')) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                            <strong><?= $error; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--  <div class="row">
                <div class="col-md-12">
                    <?php foreach ($pessoas as $pessoa) : ?>
                        <div class="card">
                           <div class="card-header"><?= (isset($pessoa) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($pessoa->ultima_alteracao)) : ''); ?></div> 
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label>CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= (isset($pessoa) ? $pessoa->cpf : set_value('cpf')); ?>">
                                            <?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" value="<?= (isset($pessoa) ? $pessoa->nome : set_value('nome')); ?>" style="text-transform: uppercase;">
                                            <?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="data_nascimento">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= (isset($pessoa) ? $pessoa->data_nascimento : set_value('data_nascimento')); ?>">
                                            <?= form_error('data_nascimento', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>Sexo</label>
                                            <input type="text" class="form-control" name="sexo" id="sexo" value="<?= (isset($pessoa) ? $pessoa->sexo : set_value('sexo')); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="voluntario">É Voluntário</label> <br>
                                            <select name="voluntario" id="voluntario">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="celular">Celular:</label>
                                                <input type="text" class="form-control" id="celular" name="celular" value="<?= (isset($pessoa) ? $pessoa->celular : set_value('celular')); ?>">
                                                <small></small>
                                                <?= form_error('celular', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label>Email</label>
                                            <input type="email" id="email" class="form-control" name="email" value="<?= (isset($pessoa) ? $pessoa->email : set_value('email')); ?>">
                                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label for="cep">CEP:</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= (isset($pessoa) ? $pessoa->cep : set_value('cep')); ?>" onblur="pesquisacep(this.value)">
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
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= (isset($pessoa) ? $pessoa->logradouro : set_value('logradouro')); ?>">
                                                <?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="numero">N°:</label>
                                                <input type="text" class="form-control" id="numero" name="numero" value="<?= (isset($pessoa) ? $pessoa->numero : set_value('numero')); ?>">
                                                <?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="complemento">Complemento:</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" value="<?= (isset($pessoa) ? $pessoa->complemento : set_value('complemento')); ?>">
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?= (isset($pessoa) ? $pessoa->bairro : set_value('bairro')); ?>">
                                            <?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 ml-20">
                                            <div class="form-group">
                                                <label for="localidade">Cidade:</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?= (isset($pessoa) ? $pessoa->localidade : set_value('localidade')); ?>">
                                                <?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF:</label>
                                                <input type="text" class="form-control" id="uf" name="uf" value="<?= (isset($pessoa) ? $pessoa->uf : set_value('uf')); ?>">
                                                <?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="data_cadastro">Data de Cadastro:</label>
                                                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= (isset($pessoa) ? $pessoa->data_cadastro : set_value('data_cadastro')); ?>">
                                                <?= form_error('data_cadastro', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="file" class="form-control" id="foto" name="foto" value=" <?= set_value('foto'); ?>" required>
                                                <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($pessoa)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $pessoa->id; ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <div class="form-group row">
                                    <div class="col-md-12 ml-20">
                                        <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                        <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info">Voltar</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($pessoas as $pessoa) : ?>
                        <div class="card">
                            <!--    <div class="card-header">
                                <?= (isset($pessoa) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($pessoa->ultima_alteracao)) : ''); ?>
                            </div>  -->

                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= (isset($pessoa) ? $pessoa->cpf : set_value('cpf')); ?>" aria-describedby="cpfHelp">
                                            <?= form_error('cpf', '<div class="text-danger" id="cpfHelp">', '</div>'); ?>
                                            <small id="cpf" class="form-text text-muted">Informe o CPF</small>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" value="<?= (isset($pessoa) ? $pessoa->nome : set_value('nome')); ?>" style="text-transform: uppercase;" aria-describedby="nomeHelp">
                                            <?= form_error('nome', '<div class="text-danger" id="nomeHelp">', '</div>'); ?>
                                            <small id="nome" class="form-text text-muted">Informe o Nome Completo</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="data_nascimento">Data de Nascimento</label>
                                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= (isset($pessoa) ? $pessoa->data_nascimento : set_value('data_nascimento')); ?>" aria-describedby="dataNascimentoHelp">
                                            <?= form_error('data_nascimento', '<div class="text-danger" id="data_nascimento">', '</div>'); ?>
                                            <small id="data_nascimento" class="form-text text-muted">Informe a Data de Nascimento</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="sexo">Sexo</label>
                                            <input type="text" class="form-control" name="sexo" id="sexo" value="<?= (isset($pessoa) ? $pessoa->sexo : set_value('sexo')); ?>" aria-describedby="sexoHelp">
                                            <small id="sexo" class="form-text text-muted">Informe o Sexo</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="voluntario">É Voluntário</label><br>
                                            <select name="voluntario" id="voluntario" class="form-control" aria-describedby="voluntarioHelp">
                                                <option value="1" <?= isset($pessoa) && $pessoa->voluntario == 1 ? 'selected' : ''; ?>>Sim</option>
                                                <option value="0" <?= isset($pessoa) && $pessoa->voluntario == 0 ? 'selected' : ''; ?>>Não</option>
                                            </select>
                                            <small id="voluntario" class="form-text text-muted">Informe se a pessoa é voluntária ou não</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <input type="text" class="form-control" id="celular" name="celular" value="<?= (isset($pessoa) ? $pessoa->celular : set_value('celular')); ?>" aria-describedby="celularHelp">
                                                <?= form_error('celular', '<div class="text-danger" id="celularHelp">', '</div>'); ?>
                                                <small id="celular" class="form-text text-muted">Informe o número de celular</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" name="email" value="<?= (isset($pessoa) ? $pessoa->email : set_value('email')); ?>" aria-describedby="email">
                                            <?= form_error('email', '<div class="text-danger" id="email">', '</div>'); ?>
                                            <small id="email" class="form-text text-muted">Informe o e-mail</small>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label for="cep">CEP</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= (isset($pessoa) ? $pessoa->cep : set_value('cep')); ?>" onblur="pesquisacep(this.value)" aria-describedby="cepHelp">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                                </div>
                                                <?= form_error('cep', '<div class="text-danger" id="cepHelp">', '</div>'); ?>
                                                <small id="email" class="form-text text-muted">CEP</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="logradouro">Logradouro</label>
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= (isset($pessoa) ? $pessoa->logradouro : set_value('logradouro')); ?>" aria-describedby="logradouroHelp">
                                                <?= form_error('logradouro', '<div class="text-danger" id="logradouroHelp">', '</div>'); ?>
                                                <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="numero">N°</label>
                                                <input type="text" class="form-control" id="numero" name="numero" value="<?= (isset($pessoa) ? $pessoa->numero : set_value('numero')); ?>" aria-describedby="numeroHelp">
                                                <?= form_error('numero', '<div class="text-danger" id="numeroHelp">', '</div>'); ?>
                                                <small id="numero" class="form-text text-muted">Número</small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="complemento">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" value="<?= (isset($pessoa) ? $pessoa->complemento : set_value('complemento')); ?>" aria-describedby="complementoHelp">
                                                <small id="complemento" class="form-text text-muted">Complemento</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?= (isset($pessoa) ? $pessoa->bairro : set_value('bairro')); ?>" aria-describedby="bairroHelp">
                                            <?= form_error('bairro', '<div class="text-danger" id="bairroHelp">', '</div>'); ?>
                                            <small id="bairro" class="form-text text-muted">Bairro</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 ml-20">
                                            <div class="form-group">
                                                <label for="localidade">Cidade</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?= (isset($pessoa) ? $pessoa->localidade : set_value('localidade')); ?>" aria-describedby="localidadeHelp">
                                                <?= form_error('localidade', '<div class="text-danger" id="localidadeHelp">', '</div>'); ?>
                                                <small id="localidade" class="form-text text-muted">Cidade</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF</label>
                                                <input type="text" class="form-control" id="uf" name="uf" value="<?= (isset($pessoa) ? $pessoa->uf : set_value('uf')); ?>" aria-describedby="ufHelp">
                                                <?= form_error('uf', '<div class="text-danger" id="ufHelp">', '</div>'); ?>
                                                <small id="uf" class="form-text text-muted">Estado</small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="data_cadastro">Data de Cadastro</label>
                                                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= (isset($pessoa) ? $pessoa->data_cadastro : set_value('data_cadastro')); ?>" aria-describedby="dataCadastroHelp">
                                                <?= form_error('data_cadastro', '<div class="text-danger" id="data_cadastro">', '</div>'); ?>
                                                <small id="data_cadastro" class="form-text text-muted">Data de Cadastro</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="file" class="form-control" id="foto" name="foto" aria-describedby="fotoHelp" value="<?= set_value('foto'); ?>" required>
                                                <?= form_error('foto', '<div class="text-danger" id="foto">', '</div>'); ?>
                                                <small id="foto" class="form-text text-muted">Foto da Pessoa</small>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($pessoa)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $pessoa->id; ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <div class="form-group row">
                                    <div class="col-md-12 ml-20">
                                        <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                        <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-info">Voltar</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>