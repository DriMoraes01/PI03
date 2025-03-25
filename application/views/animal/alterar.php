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
                    <?php foreach ($animais as $animal) : ?>
                        <div class="card">
                            <div class="card-header"><?= (isset($animal) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($animal->ultima_alteracao)) : ''); ?></div>
                            <div class="card-body">
                                <form class="forms-sample" id="form_core" name="form_core" method="POST" enctype="multipart/form-data">                                   
                                    <div class="form-group row">
                                        <div class="col-md-4 mb-20">
                                            <label for="nome">Nome do Animal</label>
                                            <input type="text" class="form-control" id="nome" name="nome" value="<?= (isset($animal) ? $animal->nome : set_value('nome')); ?>" style="text-transform: uppercase;">
                                            <?= form_error('nome', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="form-group pr-20">
                                            <label for="castrado">Castrado</label>
                                            <select name="castrado" id="castrado">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                                <?= form_error('castrado', '<div class="text-danger">', '</div>'); ?>
                                            </select>
                                            <small></small>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <div class="form-group">Data de Cadastro</label>
                                                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= (isset($animal) ? $animal->data_cadastro : set_value('data_cadastro')); ?>">
                                                <?= form_error('data_cadastro', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="cor">Cor</label>
                                                <input type="text" class="form-control" id="cor" name="cor" value="<?= (isset($animal) ? $animal->cor : set_value('cor')); ?>">
                                                <?= form_error('cor', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-20">
                                            <label for="raca">Raça</label>
                                            <input type="text" id="raca" class="form-control" name="raca" value="<?= (isset($animal) ? $animal->raca : set_value('raca')); ?>">
                                            <?= form_error('raca', '<div class="text-danger">', '</div>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="porte">Porte</label>
                                                <select name="porte" id="porte">
                                                    <option value="Pequeno">Pequeno</option>
                                                    <option value="Médio">Médio</option>
                                                    <option value="Grande">Grande</option>
                                                    <?= form_error('porte', '<div class="text-danger">', '</div>'); ?>
                                                </select>
                                                <small></small>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="sexo">Sexo</label>
                                                <select name="sexo" id="sexo">
                                                    <option value="Macho">Macho</option>
                                                    <option value="Fêmea">Fêmea</option>
                                                </select>
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="observacao">Observação:</label>
                                                <input type="text" class="form-control" id="observacao" name="observacao" value="<?= (isset($animal) ? $animal->observacao : set_value('observacao')); ?>">
                                                <?= form_error('observacao', '<div class="text-danger">', '</div>'); ?>
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="foto">Foto do Animal</label>
                                                <input type="file" class="form-control" id="foto" name="foto" value=" <?= set_value('foto'); ?>" required>
                                                <//?= form_error('foto', '<div class="text-danger">', '</div>'); ?> 
                                            </div>
                                        </div>
                                    </div>

                                    <?php if (isset($animal)) : ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input type="hidden" class="form-control" name="id" value="<?= $animal->id_animal; ?>">
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
                    <?php foreach ($animais as $animal) : ?>
                        <div class="card">
                          <div class="card-header">
                                <?= (isset($animal) ? '<i class="ik ik-calendar ik-2x" aria-hidden="true"></i>&nbsp;Data da última alteração: &nbsp;' . date("d/m/Y H:i:s", strtotime($animal->ultima_alteracao)) : ''); ?>
                            </div> 
                         
                        <div class="card-body">
                            <form class="forms-sample" id="form_core" name="form_core" method="POST" enctype="multipart/form-data" aria-describedby="formInstructions">
                                <p id="formInstructions" class="sr-only">Preencha os campos abaixo com as informações do animal.</p> <!-- Instruções ocultas para leitores de tela -->

                                <div class="form-group row">
                                    <div class="col-md-4 mb-20">
                                        <label for="nome">Nome do Animal</label>
                                        <input type="text" class="form-control" id="nome" name="nome" value="<?= (isset($animal) ? $animal->nome : set_value('nome')); ?>" style="text-transform: uppercase;" aria-required="true">
                                        <?= form_error('nome', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="nome" class="form-text text-muted">Nome do Animal</small>
                                    </div>
                                    <div class="form-group pr-20">
                                        <label for="castrado">Castrado</label>
                                        <select name="castrado" id="castrado" aria-required="true">
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                        <?= form_error('castrado', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="castrado" class="form-text text-muted">Informe se o animal é castrado</small>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label for="data_cadastro">Data de Cadastro</label>
                                        <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?= (isset($animal) ? $animal->data_cadastro : set_value('data_cadastro')); ?>" aria-required="true">
                                        <?= form_error('data_cadastro', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="data_cadastro" class="form-text text-muted">Data em que o animal foi cadastrado</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="cor">Cor</label>
                                        <input type="text" class="form-control" id="cor" name="cor" value="<?= (isset($animal) ? $animal->cor : set_value('cor')); ?>" aria-required="true">
                                        <?= form_error('cor', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="cor" class="form-text text-muted">Cor predominante do animal</small>
                                    </div>
                                    <div class="col-md-2 mb-20">
                                        <label for="raca">Raça</label>
                                        <input type="text" id="raca" class="form-control" name="raca" value="<?= (isset($animal) ? $animal->raca : set_value('raca')); ?>" aria-required="true">
                                        <?= form_error('raca', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="raca" class="form-text text-muted">Raça do animal</small>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="porte">Porte</label>
                                        <select name="porte" id="porte" aria-required="true">
                                            <option value="Pequeno">Pequeno</option>
                                            <option value="Médio">Médio</option>
                                            <option value="Grande">Grande</option>
                                        </select>
                                        <?= form_error('porte', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="porte" class="form-text text-muted">Tamanho do animal</small>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="sexo">Sexo</label>
                                        <select name="sexo" id="sexo" aria-required="true">
                                            <option value="Macho">Macho</option>
                                            <option value="Fêmea">Fêmea</option>
                                        </select>
                                        <?= form_error('sexo', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="sexo" class="form-text text-muted">Sexo do animal</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="observacao">Observação</label>
                                        <input type="text" class="form-control" id="observacao" name="observacao" value="<?= (isset($animal) ? $animal->observacao : set_value('observacao')); ?>">
                                        <?= form_error('observacao', '<div class="text-danger" role="alert">', '</div>'); ?>
                                        <small id="observacao" class="form-text text-muted">Observações sobre o animal</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="foto">Foto do Animal</label>
                                        <input type="file" class="form-control" id="foto" name="foto" aria-describedby="fotoHelp" aria-required="true">
                                        <small id="foto" class="form-text text-muted">Envie uma foto do animal</small>
                                    </div>
                                </div>

                                <?php if (isset($animal)) : ?>
                                    <input type="hidden" name="id" value="<?= $animal->id_animal; ?>">
                                <?php endif; ?>

                                <div class="form-group row">
                                    <div class="col-md-12 ml-20">
                                        <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                        <a href="<?= base_url($this->router->fetch_class()); ?>" class="btn btn-primary">Voltar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>