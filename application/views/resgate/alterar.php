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

            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($resgates as $resgate) : ?>
                        <div class="card">
                            <div class="card-header"><?= (isset($resgate) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($resgate->ultima_alteracao)) : ''); ?></div>
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST">
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label>Tipo de Animal</label>
                                            <input type="text" class="form-control" id="animal" name="animal" value="<?= (isset($resgate) ? $resgate->animal : set_value('animal')); ?>">
                                            <?= form_error('animal', '<div class="text-danger">', '</div>'); ?>
                                            <small id="animal" class="form-text text-muted">Informe o tipo de animal</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label>Data de Resgate</label>
                                            <input type="text" class="form-control" id="data_resgate" name="data_resgate" value="<?= (isset($resgate) ? formata_data_banco_sem_hora($resgate->data_resgate) : set_value('data_resgate')); ?>" readonly>
                                            <?= form_error('data_resgate', '<div class="text-danger">', '</div>'); ?>
                                            <small id="data_resgate" class="form-text text-muted">Informe a data de resgate</small>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label>Sexo</label> </br>
                                            <select name="sexo" id="sexo" value="<?= (isset($resgate) ? $resgate->sexo : set_value('sexo')); ?>">
                                                <option value="Macho">Macho</option>
                                                <option value="Fêmea">Fêmea</option>
                                            </select>
                                            <small></small>
                                            <?= form_error('sexo', '<div class="text-danger">', '</div>'); ?>
                                            <small id="sexo" class="form-text text-muted">Informe o sexo do animal</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 mb-20">
                                            <label for="cep">CEP:</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?= (isset($resgate) ? $resgate->cep : set_value('cep')); ?>" onblur="pesquisacep(this.value)">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                                </div>
                                                <?= form_error('cep', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                            <small id="cep" class="form-text text-muted">Informe o CEP</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="logradouro">Logradouro:</label>
                                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?= (isset($resgate) ? $resgate->logradouro : set_value('logradouro')); ?>">
                                                <?= form_error('logradouro', '<div class="text-danger">', '</div>'); ?>
                                                <small id="logradouro" class="form-text text-muted">Rua, Avenida</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="numero">N°:</label>
                                                <input type="text" class="form-control" id="numero" name="numero" value="<?= (isset($resgate) ? $resgate->numero : set_value('numero')); ?>">
                                                <?= form_error('numero', '<div class="text-danger">', '</div>'); ?>
                                                <small id="numero" class="form-text text-muted">Informe o número</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?= (isset($resgate) ? $resgate->bairro : set_value('bairro')); ?>">
                                            <?= form_error('bairro', '<div class="text-danger">', '</div>'); ?>
                                            <small id="bairro" class="form-text text-muted">Informe o bairro</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="localidade">Cidade:</label>
                                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?= (isset($resgate) ? $resgate->localidade : set_value('localidade')); ?>">
                                                <?= form_error('localidade', '<div class="text-danger">', '</div>'); ?>
                                                <small id="localidade" class="form-text text-muted">Cidade</small>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="uf">UF:</label>
                                                <input type="text" class="form-control" id="uf" name="uf" value="<?= (isset($resgate) ? $resgate->uf : set_value('uf')); ?>">
                                                <?= form_error('uf', '<div class="text-danger">', '</div>'); ?>
                                                <small id="uf" class="form-text text-muted">Estado</small>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="observacao">Observação</label>
                                                <input type="text" class="form-control" id="observacao" name="observacao" value="<?= (isset($resgate) ? $resgate->observacao : set_value('observacao')); ?>">
                                                <?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                                <small id="observacao" class="form-text text-muted">Observação</small>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($resgate)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $resgate->id; ?>">
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
            <!--<div class="row">
                <div class="col-md-12">
                    <?php foreach ($resgates as $resgate) : ?>
                        <div class="card">
                            <div class="card-header" aria-live="polite">
                                <?= isset($resgate) ? '<i class="ik ik-calendar ik-2x" aria-hidden="true"></i> Data da última alteração: ' . date("d/m/Y H:i:s", strtotime($resgate->ultima_alteracao)) : ''; ?>
                            </div> -->
            <!--
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST" aria-labelledby="form-title-<?= $resgate->id; ?>">
                                    <h2 id="form-title-<?= $resgate->id; ?>" class="sr-only">Formulário de Resgate de Animal</h2>
                                    <div class="form-group row">
                                        <div class="col-md-2 mb-20">
                                            <label for="animal-<?= $resgate->id; ?>">Tipo de Animal</label>
                                            <input type="text" class="form-control" id="animal-<?= $resgate->id; ?>" name="animal" value="<?= isset($resgate) ? $resgate->animal : set_value('animal'); ?>" aria-describedby="animalHelp-<?= $resgate->id; ?>">
                                            <?= form_error('animal', '<div class="text-danger" id="animalHelp-' . $resgate->id . '">', '</div>'); ?>
                                            <small id="nome" class="form-text text-muted">Informe o nome do animal</small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="data_resgate-<?= $resgate->id; ?>">Data de Resgate</label>
                                            <input type="text" class="form-control" id="data_resgate-<?= $resgate->id; ?>" name="data_resgate" value="<?= isset($resgate) ? formata_data_banco_sem_hora($resgate->data_resgate) : set_value('data_resgate'); ?>" readonly aria-describedby="dataResgateHelp-<?= $resgate->id; ?>">
                                            <?= form_error('data_resgate', '<div class="text-danger" id="dataResgateHelp-' . $resgate->id . '">', '</div>'); ?>
                                            <small id="data_resgate" class="form-text text-muted">Informe a Data de Resgate</small>
                                        </div>
                                        <div class="col-md-3 mb-20">
                                            <label for="sexo-<?= $resgate->id; ?>">Sexo</label> <br>
                                            <select name="sexo" id="sexo-<?= $resgate->id; ?>" class="form-control" aria-describedby="sexoHelp-<?= $resgate->id; ?>">
                                                <option value="Macho" <?= isset($resgate) && $resgate->sexo == 'Macho' ? 'selected' : ''; ?>>Macho</option>
                                                <option value="Fêmea" <?= isset($resgate) && $resgate->sexo == 'Fêmea' ? 'selected' : ''; ?>>Fêmea</option>
                                            </select>
                                            <small id="sexo" class="form-text text-muted">Informe o Sexo do Animal</small>
                                            <?= form_error('sexo', '<div class="text-danger" id="sexoHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 mb-20">
                                            <label for="cep-<?= $resgate->id; ?>">CEP:</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="cep-<?= $resgate->id; ?>" name="cep" maxlength="9" value="<?= isset($resgate) ? $resgate->cep : set_value('cep'); ?>" onblur="pesquisacep(this.value)" aria-describedby="cepHelp-<?= $resgate->id; ?>">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                                                </div>
                                                <?= form_error('cep', '<div class="text-danger" id="cep-' . $resgate->id . '">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="logradouro-<?= $resgate->id; ?>">Logradouro:</label>
                                            <input type="text" class="form-control" id="logradouro-<?= $resgate->id; ?>" name="logradouro" value="<?= isset($resgate) ? $resgate->logradouro : set_value('logradouro'); ?>" aria-describedby="logradouroHelp-<?= $resgate->id; ?>">
                                            <?= form_error('logradouro', '<div class="text-danger" id="logradouroHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="numero-<?= $resgate->id; ?>">N°:</label>
                                            <input type="text" class="form-control" id="numero-<?= $resgate->id; ?>" name="numero" value="<?= isset($resgate) ? $resgate->numero : set_value('numero'); ?>" aria-describedby="numeroHelp-<?= $resgate->id; ?>">
                                            <?= form_error('numero', '<div class="text-danger" id="numeroHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-3 ml-20">
                                            <label for="bairro-<?= $resgate->id; ?>">Bairro</label>
                                            <input type="text" class="form-control" id="bairro-<?= $resgate->id; ?>" name="bairro" value="<?= isset($resgate) ? $resgate->bairro : set_value('bairro'); ?>" aria-describedby="bairroHelp-<?= $resgate->id; ?>">
                                            <?= form_error('bairro', '<div class="text-danger" id="bairroHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="localidade-<?= $resgate->id; ?>">Cidade:</label>
                                            <input type="text" class="form-control" id="localidade-<?= $resgate->id; ?>" name="localidade" value="<?= isset($resgate) ? $resgate->localidade : set_value('localidade'); ?>" aria-describedby="localidadeHelp-<?= $resgate->id; ?>">
                                            <?= form_error('localidade', '<div class="text-danger" id="localidadeHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="uf-<?= $resgate->id; ?>">UF:</label>
                                            <input type="text" class="form-control" id="uf-<?= $resgate->id; ?>" name="uf" value="<?= isset($resgate) ? $resgate->uf : set_value('uf'); ?>" aria-describedby="ufHelp-<?= $resgate->id; ?>">
                                            <?= form_error('uf', '<div class="text-danger" id="ufHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="observacao-<?= $resgate->id; ?>">Observação</label>
                                            <input type="text" class="form-control" id="observacao-<?= $resgate->id; ?>" name="observacao" value="<?= isset($resgate) ? $resgate->observacao : set_value('observacao'); ?>" aria-describedby="observacaoHelp-<?= $resgate->id; ?>">
                                            <?= form_error('observacao', '<div class="text-danger" id="observacaoHelp-' . $resgate->id . '">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <?php if (isset($resgate)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $resgate->id; ?>">
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
        </div>