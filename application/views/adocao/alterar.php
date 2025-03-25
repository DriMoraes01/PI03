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

            <!-- <div class="row">
                <div class="col-md-12">
                    <//?php foreach ($adocoes as $adocao) : ?>
                        <div class="card">
                            <div class="card-header"><//?= (isset($adocao) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($adocao->ultima_alteracao)) : ''); ?></div>
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST">
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label>Nome do Adotante</label>
                                            <input type="text" class="form-control" id="nome_adotante" name="nome_adotante" value="<?= (isset($adocao) ? $adocao->nome_adotante : set_value('nome_adotante')); ?>">
                                            <//?= form_error('nome_adotante', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= (isset($adocao) ? $adocao->cpf : set_value('cpf')); ?>">
                                            <//?= form_error('cpf', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>Data de Adoção</label>
                                            <input type="date" class="form-control" id="data_adocao" name="data_adocao" value="<?= (isset($adocao) ? $adocao->data_adocao : set_value('data_adocao')); ?>">
                                            <//?= form_error('data_adocao', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= (isset($adocao) ? $adocao->email : set_value('email')); ?>">
                                            <//?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>Celular</label>
                                            <input type="text" class="form-control" id="celular" name="celular" value="<?= (isset($adocao) ? $adocao->celular : set_value('celular')); ?>">
                                            <//?= form_error('celular', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label>Tipo de Animal</label>
                                            <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?= (isset($adocao) ? $adocao->tipo_animal : set_value('tipo_animal')); ?>">
                                            <//?= form_error('tipo_animal', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>Nome do Animal</label>
                                            <input type="text" class="form-control" id="nome_animal" name="nome_animal" value="<?= (isset($adocao) ? $adocao->nome_animal : set_value('nome_animal')); ?>">
                                            <//?= form_error('nome_animal', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label>Sexo</label></br>
                                            <select name="sexo_animal" id="sexo_animal" value="<?= (isset($adocao) ? $adocao->sexo_animal : set_value('sexo_animal')); ?>">
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
                                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= (isset($adocao) ? $adocao->cep : set_value('cep')); ?>" onblur="pesquisacep(this.value)">
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
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= (isset($adocao) ? $adocao->logradouro : set_value('logradouro')); ?>">
                                                <//?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="numero">N°:</label>
                                                <input type="text" class="form-control" id="numero" name="numero" value="<?= (isset($adocao) ? $adocao->numero : set_value('numero')); ?>">
                                                <//?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?= (isset($adocao) ? $adocao->bairro : set_value('bairro')); ?>">
                                            <//?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="localidade">Cidade:</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?= (isset($adocao) ? $adocao->localidade : set_value('localidade')); ?>">
                                                <//?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF:</label>
                                                <input type="text" class="form-control" id="uf" name="uf" value="<?= (isset($adocao) ? $adocao->uf : set_value('uf')); ?>">
                                                <//?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="observacao">Observação</label>
                                                <input type="text" class="form-control" id="observacao" name="observacao" value="<?= (isset($adocao) ? $adocao->observacao : set_value('observacao')); ?>">
                                                <//?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>
                                    <//?php if (isset($adocao)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $adocao->id; ?>">
                                            </div>
                                        </div>
                                    <//?php endif; ?>
                                <//?php endforeach; ?>
                                <div class="form-group row">
                                    <div class="col-md-12 ml-20">
                                        <button type="submit" class="btn btn-primary mr-2">Salvar</button>
                                        <a href="<//?= base_url($this->router->fetch_class()); ?>" class="btn btn-info">Voltar</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($adocoes as $adocao) : ?>
                        <div class="card">
                            <!--<div class="card-header">
                                <?= (isset($adocao) ? '<i class="ik ik-calendar ik-2x" aria-hidden="true"></i><span class="sr-only">Data da última alteração:</span>&nbsp;' . date("d/m/Y H:i:s", strtotime($adocao->ultima_alteracao)) : ''); ?>
                            </div> -->
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST" aria-labelledby="form_heading">
                                    <fieldset>
                                        <legend id="form_heading" class="sr-only">Formulário de Adoção</legend>
                                        <div class="form-group row">
                                            <div class="col-md-2 mb-20">
                                                <label for="nome_adotante">Nome do Adotante</label>
                                                <input type="text" class="form-control" id="nome_adotante" name="nome_adotante" value="<?= (isset($adocao) ? $adocao->nome_adotante : set_value('nome_adotante')); ?>" aria-describedby="nomeAdotanteError">
                                                <?= form_error('nome_adotante', '<div id="nomeAdotanteError" class="text-danger">', '</div>'); ?>
                                                <small id="nome_adotante" class="form-text text-muted">Nome Completo</small>
                                            </div>
                                            <div class="col-md-2 mb-20">
                                                <label for="cpf">CPF</label>
                                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= (isset($adocao) ? $adocao->cpf : set_value('cpf')); ?>" aria-describedby="cpfError">
                                                <?= form_error('cpf', '<div id="cpfError" class="text-danger">', '</div>'); ?>
                                                <small id="cpf" class="form-text text-muted">Número do CPF</small>
                                            </div>
                                            <div class="col-md-2 mb-20">
                                                <label for="data_adocao">Data de Adoção</label>
                                                <input type="date" class="form-control" id="data_adocao" name="data_adocao" value="<?= (isset($adocao) ? $adocao->data_adocao : set_value('data_adocao')); ?>" aria-describedby="dataAdocaoError">
                                                <?= form_error('data_adocao', '<div id="dataAdocaoError" class="text-danger">', '</div>'); ?>
                                                <small id="data_adocao" class="form-text text-muted">Data da Adoção</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2 mb-20">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= (isset($adocao) ? $adocao->email : set_value('email')); ?>" aria-describedby="emailError">
                                                <?= form_error('email', '<div id="emailError" class="text-danger">', '</div>'); ?>
                                                <small id="email" class="form-text text-muted">Endereço de e-mail</small>
                                            </div>
                                            <div class="col-md-2 mb-20">
                                                <label for="celular">Celular</label>
                                                <input type="text" class="form-control" id="celular" name="celular" value="<?= (isset($adocao) ? $adocao->celular : set_value('celular')); ?>" aria-describedby="celularError">
                                                <?= form_error('celular', '<div id="celularError" class="text-danger">', '</div>'); ?>
                                                <small id="celular" class="form-text text-muted">Celular</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2 mb-20">
                                                <label for="tipo_animal">Tipo de Animal</label>
                                                <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" value="<?= (isset($adocao) ? $adocao->tipo_animal : set_value('tipo_animal')); ?>" aria-describedby="tipoAnimalError">
                                                <?= form_error('tipo_animal', '<div id="tipoAnimalError" class="text-danger">', '</div>'); ?>
                                                <small id="tipo_animal" class="form-text text-muted">Tipo de Animal</small>
                                            </div>
                                            <div class="col-md-2 mb-20">
                                                <label for="nome_animal">Nome do Animal</label>
                                                <input type="text" class="form-control" id="nome_animal" name="nome_animal" value="<?= (isset($adocao) ? $adocao->nome_animal : set_value('nome_animal')); ?>" aria-describedby="nomeAnimalError">
                                                <?= form_error('nome_animal', '<div id="nomeAnimalError" class="text-danger">', '</div>'); ?>
                                                <small id="nome_animal" class="form-text text-muted">Nome do Animal</small>
                                            </div>
                                            <div class="col-md-3 mb-20">
                                                <label for="sexo_animal">Sexo</label>
                                                <select name="sexo_animal" id="sexo_animal" class="form-control" aria-describedby="sexoAnimalError">
                                                    <option value="Macho" <?= (isset($adocao) && $adocao->sexo_animal == 'Macho' ? 'selected' : ''); ?>>Macho</option>
                                                    <option value="Fêmea" <?= (isset($adocao) && $adocao->sexo_animal == 'Fêmea' ? 'selected' : ''); ?>>Fêmea</option>
                                                </select>
                                                <?= form_error('sexo_animal', '<div id="sexoAnimalError" class="text-danger">', '</div>'); ?>
                                                <small id="sexo_animal" class="form-text text-muted">Sexo do Animal</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 mb-20">
                                                <label for="cep">CEP:</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= (isset($adocao) ? $adocao->cep : set_value('cep')); ?>" aria-describedby="cepError" onblur="pesquisacep(this.value)">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                                    </div>
                                                    <?= form_error('cep', '<div id="cepError" class="text-danger">', '</div>'); ?> <br>
                                                </div>
                                                <small id="cep" class="form-text text-muted">CEP</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="logradouro">Logradouro:</label>
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= (isset($adocao) ? $adocao->logradouro : set_value('logradouro')); ?>" aria-describedby="logradouroError">
                                                <?= form_error('logradouro', '<div id="logradouroError" class="text-danger">', '</div>'); ?>
                                                <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="numero">N°:</label>
                                                <input type="text" class="form-control" id="numero" name="numero" value="<?= (isset($adocao) ? $adocao->numero : set_value('numero')); ?>" aria-describedby="numeroError">
                                                <?= form_error('numero', '<div id="numeroError" class="text-danger">', '</div>'); ?>
                                                <small id="numero" class="form-text text-muted">Número</small>
                                            </div>
                                            <div class="col-md-3 ml-20">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= (isset($adocao) ? $adocao->bairro : set_value('bairro')); ?>" aria-describedby="bairroError">
                                                <?= form_error('bairro', '<div id="bairroError" class="text-danger">', '</div>'); ?>
                                                <small id="bairro" class="form-text text-muted">Bairro</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="localidade">Cidade:</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?= (isset($adocao) ? $adocao->localidade : set_value('localidade')); ?>" aria-describedby="localidadeError">
                                                <?= form_error('localidade', '<div id="localidadeError" class="text-danger">', '</div>'); ?>
                                                <small id="localidade" class="form-text text-muted">Cidade</small>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="uf">UF:</label>
                                                <input type="text" class="form-control" id="uf" name="uf" value="<?= (isset($adocao) ? $adocao->uf : set_value('uf')); ?>" aria-describedby="ufError">
                                                <?= form_error('uf', '<div id="ufError" class="text-danger">', '</div>'); ?>
                                                <small id="uf" class="form-text text-muted">Estado</small>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="observacao">Observação</label>
                                                <input type="text" class="form-control" id="observacao" name="observacao" value="<?= (isset($adocao) ? $adocao->observacao : set_value('observacao')); ?>" aria-describedby="observacaoError">
                                                <?= form_error('observacao', '<div id="observacaoError" class="text-danger">', '</div>'); ?>
                                                <small id="observacao" class="form-text text-muted">Observação</small>
                                            </div>
                                        </div>
                                        <?php if (isset($adocao)) : ?>
                                            <input type="hidden" class="form-control" name="id" value="<?= $adocao->id; ?>">
                                        <?php endif; ?>
                                    </fieldset>
                                <?php endforeach; ?>
                                <div class="form-group row">
                                    <div class="col-md-12 ml-20">
                                        <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                        <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-primary">Voltar</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>