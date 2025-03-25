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

            <?php if (isset($usuario)) : ?>
                <?php foreach ($usuario as $usuario) : ?>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?= (isset($usuario) ? '<i class="ik ik-calendar ik-2x"></i>&nbsp;Data da última alteração: &nbsp;' . formata_data_banco_com_hora($usuario->ultima_alteracao) : ''); ?></div>
                                <div class="card-body">
                                    <form class="forms-sample" name="form_core" method="POST">
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" name="first_name" value="<?= isset($usuario) ? $usuario->first_name : ''; ?>" readonly="">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Sobrenome</label>
                                                <input type="text" class="form-control" name="last_name" value="<?= isset($usuario) ?  $usuario->last_name : ''; ?>" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label>Usuário</label>
                                                <input type="text" class="form-control" name="username" value="<?= $usuario->username; ?>" readonly="">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>E-mail (Login)</label>
                                                <input type="email" class="form-control" name="email" value="<?= $usuario->email; ?>" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label>Perfil de Acesso</label>
                                                <input type="text" class="form-control" name="username" value="<?= ($perfil_usuario->id == 2 ? 'User' : 'Administrador'); ?>" readonly="">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Ativo</label>
                                                <input type="text" class="form-control" name="username" value="<?= ($usuario->active == 0 ? 'Não' : 'Sim'); ?>" readonly="">
                                            </div>
                                        </div>

                                        <?php if (isset($usuario)) : ?>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control" name="usuario_id" value="<?= $usuario->id; ?>">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                <button type="submit" class="btn btn-primary mr-2">Salvar</button> 
                                    <a href="<?= base_url('/home'); ?>" class="btn btn-info">Voltar</a>
                                <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header" aria-live="polite">
                                    <?= (isset($usuario) ? '<i class="ik ik-calendar ik-2x" aria-hidden="true"></i>&nbsp;<span>Data da última alteração: &nbsp;' . formata_data_banco_com_hora($usuario->ultima_alteracao) . '</span>' : ''); ?>
                                </div> -->
                                <div class="card-body">
                                    <form class="forms-sample" name="form_core" method="POST">
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label for="first_name">Nome</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= isset($usuario) ? $usuario->first_name : ''; ?>" readonly="" aria-readonly="true">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label for="last_name">Sobrenome</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= isset($usuario) ?  $usuario->last_name : ''; ?>" readonly="" aria-readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label for="username">Usuário</label>
                                                <input type="text" class="form-control" id="username" name="username" value="<?= $usuario->username; ?>" readonly="" aria-readonly="true">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label for="email">E-mail (Login)</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= $usuario->email; ?>" readonly="" aria-readonly="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-20">
                                                <label for="access_profile">Perfil de Acesso</label>
                                                <input type="text" class="form-control" id="access_profile" name="access_profile" value="<?= ($perfil_usuario->id == 2 ? 'User' : 'Administrador'); ?>" readonly="" aria-readonly="true">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label for="active_status">Ativo</label>
                                                <input type="text" class="form-control" id="active_status" name="active_status" value="<?= ($usuario->active == 0 ? 'Não' : 'Sim'); ?>" readonly="" aria-readonly="true">
                                            </div>
                                        </div>

                                        <?php if (isset($usuario)) : ?>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control" name="usuario_id" value="<?= $usuario->id; ?>">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- <button type="submit" class="btn btn-primary mr-2">Salvar</button> -->
                                        <a href="<?= base_url('usuarios/index'); ?>" class="btn btn-info" aria-label="Voltar para a página inicial">Voltar</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


        </div>
    </div>



</div>