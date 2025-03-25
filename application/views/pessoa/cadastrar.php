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
                            <form name="form_core" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label>CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>" placeholder="111.111.111-01">
                                        <?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome'); ?>" style="text-transform: uppercase;">
                                        <?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label>Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= set_value('data_nascimento'); ?>">
                                        <?= form_error('data_nascimento', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Prefiro não Dizer</option>
                                            </select>
                                            <small></small>
                                        </div>
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
                                    <div class="col-md-3 ">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="(99)99999-9999">
                                            <?= form_error('celular', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="uf">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label for="cep">CEP</label>
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
                                            <label for="logradouro">Logradouro</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                                            <?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                            <?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento">
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                            <?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="localidade">Cidade</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade">
                                            <?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF</label>
                                            <input type="text" class="form-control" id="uf" name="uf">
                                            <?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro">
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
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form name="form_core" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-2 mb-20">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= set_value('cpf'); ?>" placeholder="111.111.111-01" aria-describedby="cpfHelp">
                                        <?= form_error('cpf', '<div class="text-danger" id="cpf">', '</div>'); ?>
                                        <small id="cpf" class="form-text text-muted">Número do CPF</small>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome'); ?>" style="text-transform: uppercase;" aria-describedby="nomeHelp">
                                        <?= form_error('nome', '<div class="text-danger" id="nome">', '</div>'); ?>
                                        <small id="nome" class="form-text text-muted">Nome Completo</small>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= set_value('data_nascimento'); ?>" aria-describedby="dataNascimentoHelp">
                                        <?= form_error('data_nascimento', '<div class="text-danger" id="data_nascimento">', '</div>'); ?>
                                        <small id="data_nascimento" class="form-text text-muted">Data de nascimento</small>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="sexo">Sexo</label>
                                            <select name="sexo" id="sexo" class="form-control" aria-describedby="sexoHelp">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Prefiro não Dizer</option>
                                            </select>
                                            <small id="sexo" class="form-text text-muted">Sexo</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="voluntario">É Voluntário</label> <br>
                                        <select name="voluntario" id="voluntario" class="form-control" aria-describedby="voluntarioHelp">
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                        <small id="voluntario" class="form-text text-muted">Indicar se a pessoa é voluntária ou não</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="(99)99999-9999" aria-describedby="celularHelp">
                                            <?= form_error('celular', '<div class="text-danger" id="celular">', '</div>'); ?>
                                            <small id="celular" class="form-text text-muted">Número do celular</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                            <?= form_error('email', '<div class="text-danger" id="email">', '</div>'); ?>
                                            <small id="email" class="form-text text-muted">Endereço de e-mail</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cep">CEP</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="00000-000" id="cep" name="cep" maxlength="9" onblur="pesquisacep(this.value)" aria-describedby="cepHelp">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                            </div>
                                            <?= form_error('cep', '<div class="text-danger" id="cep">', '</div>'); ?>
                                        </div>
                                        <small id="cep" class="form-text text-muted">CEP</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro</label>
                                            <input type="text" class="form-control" id="logradouro" name="logradouro" aria-describedby="logradouroHelp">
                                            <?= form_error('logradouro', '<div class="text-danger" id="logradouro">', '</div>'); ?>
                                            <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="numero">N°</label>
                                            <input type="text" class="form-control" id="numero" name="numero" aria-describedby="numeroHelp">
                                            <?= form_error('numero', '<div class="text-danger" id="numero">', '</div>'); ?>
                                            <small id="numero" class="form-text text-muted">Número</small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento" aria-describedby="complementoHelp">
                                            <small id="complemento" class="form-text text-muted">Complemento</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ml-20">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" aria-describedby="bairroHelp">
                                            <?= form_error('bairro', '<div class="text-danger" id="bairro">', '</div>'); ?>
                                            <small id="bairro" class="form-text text-muted">Bairro</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="localidade">Cidade</label>
                                            <input type="text" class="form-control" id="localidade" name="localidade" aria-describedby="localidadeHelp">
                                            <?= form_error('localidade', '<div class="text-danger" id="localidade">', '</div>'); ?>
                                            <small id="localidade" class="form-text text-muted">Cidade</small>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="uf">UF</label>
                                            <input type="text" class="form-control" id="uf" name="uf" aria-describedby="ufHelp">
                                            <?= form_error('uf', '<div class="text-danger" id="uf">', '</div>'); ?>
                                            <small id="uf" class="form-text text-muted">Estado</small>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="data_cadastro">Data de Cadastro</label>
                                            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" aria-describedby="dataCadastroHelp">
                                            <?= form_error('data_cadastro', '<div class="text-danger" id="data_cadastro">', '</div>'); ?>
                                            <small id="data_cadastro" class="form-text text-muted">Data de Cadastro</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto" value=" <?= set_value('foto'); ?>" required aria-describedby="fotoHelp">
                                            <?= form_error('foto', '<div class="text-danger" id="fotoHelp">', '</div>'); ?>
                                            <small id="foto" class="form-text text-muted">Envie uma foto pessoal </small>
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
        </div>
    </div>