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
                                <span><?php echo $sub_titulo; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Listar" href="<?php echo base_url($this->router->fetch_class()); ?>">Listar &nbsp;<?= $this->router->fetch_class(); ?></a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?php if (isset($pessoas)) : ?>
                <?php foreach ($pessoas as $pessoa) : ?>
                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?= (isset($pessoa) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . formata_data_banco_com_hora($pessoa->ultima_alteracao) : ''); ?></div>
                                <div class="card-body">
                                    <form class="forms-sample" name="form_core" method="POST">
                                        <div class="form-group row">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <img width="50" height="50" class="rounded-circle" src="<?= base_url($pessoa->foto) ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">                                            
                                                <div class="col-md-2 mb-20">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= isset($pessoa) ? $pessoa->cpf : ''; ?>" readonly="">
                                                </div>
                                                <div class="col-md-2 mb-20">
                                                    <label for="data_nascimento">Data de Nascimento</label>
                                                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= isset($pessoa) ? formata_data_banco_sem_hora($pessoa->data_nascimento) : ''; ?>" readonly="">
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="celular">Celular:</label>
                                                        <input type="text" class="form-control" id="celular" name="celular" value="<?= isset($pessoa) ? $pessoa->celular : ''; ?>" readonly="">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-20">
                                                    <label for="cep">CEP</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= isset($pessoa) ? $pessoa->cep : ''; ?>" readonly="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="logradouro">Logradouro</label>
                                                            <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= isset($pessoa) ? $pessoa->logradouro : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label for="numero">N°</label>
                                                            <input type="text" class="form-control" id="numero" name="numero" value="<?= isset($pessoa) ? $pessoa->numero : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="complemento">Complemento</label>
                                                            <input type="text" class="form-control" id="complemento" name="complemento" value="<?= isset($pessoa) ? $pessoa->complemento : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 ml-20">
                                                        <label>Bairro</label>
                                                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?= isset($pessoa) ? $pessoa->bairro : ''; ?>" readonly="">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3 ml-20">
                                                        <div class="form-group">
                                                            <label for="localidade">Cidade:</label>
                                                            <input type="text" class="form-control" id="localidade" name="localidade" value="<?= isset($pessoa) ? $pessoa->localidade : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label for="uf">UF:</label>
                                                            <input type="text" class="form-control" id="uf" name="uf" value="<?= isset($pessoa) ? $pessoa->uf : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>                                                
                                                    <div class="col-md-3 mb-20">
                                                        <label>Nome</label>
                                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($pessoa) ? $pessoa->nome : ''; ?>" style="text-transform: uppercase;" readonly="">
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label>Sexo</label>
                                                        <input type="text" class="form-control" name="sexo" id="sexo" value="<?= isset($pessoa) ? $pessoa->sexo : ''; ?>" readonly="">
                                                    </div>
                                                    <div class="form-group col-md-2 mb-20">
                                                        <label for="voluntario">É Voluntário</label> <br>
                                                        <?php if (($pessoa->voluntario == '0')) : ?>
                                                            <input type="text" class="form-control" name="voluntario" id="voluntario" value="<?= 'Não'; ?>" readonly="">
                                                        <?php else : ?>
                                                            <input type="text" class="form-control" name="voluntario" id="voluntario" value="<?= 'Sim'; ?>" readonly="">
                                                        <?php endif; ?>
                                                    </div>
                                                    <small></small>
                                                    <div class="col-md-4 mb-20">
                                                        <label>Email</label>
                                                        <input type="email" id="email" class="form-control" name="email" value="<?= isset($pessoa) ? $pessoa->email : ''; ?>" readonly="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="data_cadastro">Data de Cadastro:</label>
                                                            <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= isset($pessoa) ? formata_data_banco_sem_hora($pessoa->data_cadastro) : ''; ?>" readonly="">
                                                            <small></small>
                                                        </div>
                                                    </div>
                                                </div>                                                                  


                                        </div>
                                        <?php if (isset($pessoa)) : ?>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control" name="usuario_id" value="<?= $pessoa->id; ?>">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                  <button type="submit" class="btn btn-primary mr-2">Salvar</button> 
                                    <a href="<?= base_url('/pessoa'); ?>" class="btn btn-info">Voltar</a>
                                <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($pessoas as $pessoa) : ?>
                                <div class="card">
                                    <!--<div class="card-header">
                                        <?= isset($pessoa) ? '<i class="ik ik-calendar ik-2x" aria-hidden="true"></i>&nbsp;Data da última alteração: &nbsp;' . formata_data_banco_com_hora($pessoa->ultima_alteracao) : ''; ?>
                                    </div> -->
                                    <div class="card-body">
                                        <form class="forms-sample" name="form_core" method="POST" aria-labelledby="formTitle">
                                            <fieldset>
                                                <legend id="formTitle" class="sr-only">Detalhes da Pessoa</legend>
                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <img src="<?= base_url($pessoa->foto) ?>" alt="Foto de perfil de <?= htmlspecialchars($pessoa->nome) ?>" width="50" height="50" class="rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-2 mb-20">
                                                        <label for="cpf">CPF</label>
                                                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?= isset($pessoa) ? $pessoa->cpf : ''; ?>" readonly aria-describedby="cpfHelp">
                                                        <small id="cpfHelp" class="form-text text-muted">Número do CPF da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label for="data_nascimento">Data de Nascimento</label>
                                                        <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= isset($pessoa) ? formata_data_banco_sem_hora($pessoa->data_nascimento) : ''; ?>" readonly aria-describedby="dataNascimentoHelp">
                                                        <small id="dataNascimentoHelp" class="form-text text-muted">Data de nascimento da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-3 mb-20">
                                                        <label for="celular">Celular</label>
                                                        <input type="text" class="form-control" id="celular" name="celular" value="<?= isset($pessoa) ? $pessoa->celular : ''; ?>" readonly aria-describedby="celularHelp">
                                                        <small id="celularHelp" class="form-text text-muted">Número do celular da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-3 mb-20">
                                                        <label for="cep">CEP</label>
                                                        <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= isset($pessoa) ? $pessoa->cep : ''; ?>" readonly aria-describedby="cepHelp">
                                                        <small id="cepHelp" class="form-text text-muted">Código postal da pessoa.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4 mb-20">
                                                        <label for="logradouro">Logradouro</label>
                                                        <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= isset($pessoa) ? $pessoa->logradouro : ''; ?>" readonly aria-describedby="logradouroHelp">
                                                        <small id="logradouroHelp" class="form-text text-muted">Endereço da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-1 mb-20">
                                                        <label for="numero">N°</label>
                                                        <input type="text" class="form-control" id="numero" name="numero" value="<?= isset($pessoa) ? $pessoa->numero : ''; ?>" readonly aria-describedby="numeroHelp">
                                                        <small id="numeroHelp" class="form-text text-muted">Número do endereço.</small>
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label for="complemento">Complemento</label>
                                                        <input type="text" class="form-control" id="complemento" name="complemento" value="<?= isset($pessoa) ? $pessoa->complemento : ''; ?>" readonly aria-describedby="complementoHelp">
                                                        <small id="complementoHelp" class="form-text text-muted">Complemento do endereço.</small>
                                                    </div>
                                                    <div class="col-md-3 mb-20">
                                                        <label for="bairro">Bairro</label>
                                                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?= isset($pessoa) ? $pessoa->bairro : ''; ?>" readonly aria-describedby="bairroHelp">
                                                        <small id="bairroHelp" class="form-text text-muted">Bairro onde a pessoa reside.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3 mb-20">
                                                        <label for="localidade">Cidade</label>
                                                        <input type="text" class="form-control" id="localidade" name="localidade" value="<?= isset($pessoa) ? $pessoa->localidade : ''; ?>" readonly aria-describedby="localidadeHelp">
                                                        <small id="localidadeHelp" class="form-text text-muted">Cidade onde a pessoa reside.</small>
                                                    </div>
                                                    <div class="col-md-1 mb-20">
                                                        <label for="uf">UF</label>
                                                        <input type="text" class="form-control" id="uf" name="uf" value="<?= isset($pessoa) ? $pessoa->uf : ''; ?>" readonly aria-describedby="ufHelp">
                                                        <small id="ufHelp" class="form-text text-muted">Unidade Federativa (estado) onde a pessoa reside.</small>
                                                    </div>
                                                    <div class="col-md-3 mb-20">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($pessoa) ? $pessoa->nome : ''; ?>" style="text-transform: uppercase;" readonly aria-describedby="nomeHelp">
                                                        <small id="nomeHelp" class="form-text text-muted">Nome completo da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label for="sexo">Sexo</label>
                                                        <input type="text" class="form-control" id="sexo" name="sexo" value="<?= isset($pessoa) ? $pessoa->sexo : ''; ?>" readonly aria-describedby="sexoHelp">
                                                        <small id="sexoHelp" class="form-text text-muted">Sexo da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label for="voluntario">É Voluntário</label>
                                                        <input type="text" class="form-control" id="voluntario" name="voluntario" value="<?= $pessoa->voluntario == '0' ? 'Não' : 'Sim'; ?>" readonly aria-describedby="voluntarioHelp">
                                                        <small id="voluntarioHelp" class="form-text text-muted">Indica se a pessoa é voluntária.</small>
                                                    </div>
                                                    <div class="col-md-4 mb-20">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($pessoa) ? $pessoa->email : ''; ?>" readonly aria-describedby="emailHelp">
                                                        <small id="emailHelp" class="form-text text-muted">Endereço de e-mail da pessoa.</small>
                                                    </div>
                                                    <div class="col-md-2 mb-20">
                                                        <label for="data_cadastro">Data de Cadastro</label>
                                                        <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= isset($pessoa) ? formata_data_banco_sem_hora($pessoa->data_cadastro) : ''; ?>" readonly aria-describedby="dataCadastroHelp">
                                                        <small id="dataCadastroHelp" class="form-text text-muted">Data em que a pessoa foi cadastrada.</small>
                                                    </div>
                                                </div>
                                                <?php if (isset($pessoa)) : ?>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <input type="hidden" class="form-control" name="usuario_id" value="<?= $pessoa->id; ?>">
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </fieldset>
                                        </form>
                                        <a href="<?= base_url('/pessoa'); ?>" class="btn btn-info" aria-label="Voltar para a lista de pessoas">Voltar</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

        </div>
    </div>
</div>



</div>