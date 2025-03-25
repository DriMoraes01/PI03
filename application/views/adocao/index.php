            <?php $this->load->view('layout/navbar'); ?>
            <div class="page-wrap">

                <?php $this->load->view('layout/sidebar'); ?>

                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="<?php echo $icone_view; ?>" style=" background-color: DarkOrange;"></i>
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
                                                <a title="Home" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <?php if ($message = $this->session->flashdata('sucesso')) : ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                                        <strong><?= $message ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="ik ik-x"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header d-block"><a data-toggle="tooltip" data-placement="right" title="Cadastrar <?= $this->router->fetch_class(); ?>" class="btn float-right text-white" style=" background-color: DarkOrange;" href="<?= base_url($this->router->fetch_class() . '/cadastrar/'); ?>">+ Novo</a></div>
                                    <!--
                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table data-table table-sm pl-20 pr-20">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Nome</th>
                                                       <th class="text-center">CPF</th> 
                                                        <th class="text-center">Tipo de Animal</th>
                                                        <th class="text-center">Nome do Animal</th>
                                                        <th class="text-center">Sexo do Animal</th>
                                                        <th class="text-center">Data da Adoção</th>
                                                        <th class="nosort text-center pr-100">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <//?php if (isset($adocoes)) : ?>
                                                        <//?php foreach ($adocoes as $adocao) : ?>
                                                            <tr>
                                                                <td class="text-center"><//?= mb_strtoupper($adocao->nome_adotante); ?></td>
                                                              <td class="text-center"><//?= $adocao->cpf; ?></td> 
                                                                <td class="text-center"><//?= $adocao->tipo_animal; ?></td>
                                                                <td class="text-center"><//?= mb_strtoupper($adocao->nome_animal); ?></td>
                                                                <td class="text-center"><//?= $adocao->sexo_animal; ?></td>
                                                                <td class="text-center"><//?=formata_data_banco_sem_hora($adocao->data_adocao); ?></td>
                                                                </td>
                                                                <//?= if ($this->ion_auth->is_admin()) : ?>
                                                                    <td class="nosort text-center pr-100">
                                                                        <div class="table-actions">
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Visualizar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/visualizar/' . $adocao->id; ?> " class="btn btn-icon btn-primary"><i class="ik ik-eye text-info"></i><a data-toggle="tooltip" data-placement="bottom" title="Editar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/alterar/' . $adocao->id; ?> " class="btn btn-icon btn-primary"><i class="ik ik-edit-2"></i></a></a>
                                                                            <button type="button" data-toggle="modal" data-target="#categoria-<?= $adocao->id; ?>" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></button>
                                                                        </div>
                                                                    </td>
                                                                <//?= else: ?>
                                                                    <td class="nosort text-center pr-100">
                                                                        <div class="table-actions">
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Editar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/alterar/' . $adocao->id; ?> " class="btn btn-icon btn-primary"><i class="ik ik-edit-2"></i></a></a>
                                                                            <button type="button" data-toggle="modal" data-target="#categoria-<?= $adocao->id; ?>" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" class="btn btn-icon btn-danger"><i class="ik ik-trash-2"></i></button>
                                                                        </div>
                                                                    </td>
                                                                <//?= endif; ?>                                                               
                                                            </tr>
                                                            <div class="modal fade" id="categoria-<//?= $adocao->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document" id="categoria-<?= $adocao->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterLabel"><i class="fas fa-exclamation-triangle text-danger"></i>&nbsp;Tem certeza que quer excluir?</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Para apagar o registro, clique em <strong>Sim, excluir</strong> </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button data-toggle="tooltip" data-placement="bottom" title="Cancelar Exclusão" type="button" class="btn btn-secondary" data-dismiss="modal">Não, voltar</button>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/del/' . $adocao->id; ?> " class="btn btn-danger">Sim, excluir</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <//?php endforeach; ?>
                                                    <//?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table data-table table-sm pl-20 pr-20" aria-describedby="table-description">
                                                <caption id="table-description">Tabela de adoções de animais com informações do adotante e do animal.</caption>
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col">Nome</th>
                                                        <!--<th class="text-center" scope="col">CPF</th>-->
                                                        <th class="text-center" scope="col">Tipo de Animal</th>
                                                        <th class="text-center" scope="col">Nome do Animal</th>
                                                        <th class="text-center" scope="col">Sexo do Animal</th>
                                                        <th class="text-center" scope="col">Data da Adoção</th>
                                                        <th class="nosort text-center pr-100" scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (isset($adocoes)) : ?>
                                                        <?php foreach ($adocoes as $adocao) : ?>
                                                            <tr>
                                                                <td class="text-center" role="cell"><?= mb_strtoupper($adocao->nome_adotante); ?></td>
                                                                <!--<td class="text-center" role="cell"><//?= $adocao->cpf; ?></td>-->
                                                                <td class="text-center" role="cell"><?= $adocao->tipo_animal; ?></td>
                                                                <td class="text-center" role="cell"><?= mb_strtoupper($adocao->nome_animal); ?></td>
                                                                <td class="text-center" role="cell"><?= $adocao->sexo_animal; ?></td>
                                                                <td class="text-center" role="cell"><?= formata_data_banco_sem_hora($adocao->data_adocao); ?></td>
                                                                <?php if ($this->ion_auth->is_admin()) : ?>
                                                                    <td class="nosort text-center pr-100" role="cell">
                                                                        <div class="table-actions">
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Visualizar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/visualizar/' . $adocao->id; ?>" class="btn btn-icon btn-primary" aria-label="Visualizar <?= $adocao->nome_animal; ?>">
                                                                                <i class="ik ik-eye text-info"></i>
                                                                            </a>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Editar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/alterar/' . $adocao->id; ?>" class="btn btn-icon btn-primary" aria-label="Editar <?= $adocao->nome_animal; ?>">
                                                                                <i class="ik ik-edit-2"></i>
                                                                            </a>
                                                                            <button type="button" data-toggle="modal" data-target="#categoria-<?= $adocao->id; ?>" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" class="btn btn-icon btn-danger" aria-label="Excluir <?= $adocao->nome_animal; ?>">
                                                                                <i class="ik ik-trash-2"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td class="nosort text-center pr-100" role="cell">
                                                                        <div class="table-actions">
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Editar <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/alterar/' . $adocao->id; ?>" class="btn btn-icon btn-primary" aria-label="Editar <?= $adocao->nome_animal; ?>">
                                                                                <i class="ik ik-edit-2"></i>
                                                                            </a>
                                                                            <button type="button" data-toggle="modal" data-target="#categoria-<?= $adocao->id; ?>" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" class="btn btn-icon btn-danger" aria-label="Excluir <?= $adocao->nome_animal; ?>">
                                                                                <i class="ik ik-trash-2"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            </tr>
                                                            <div class="modal fade" id="categoria-<?= $adocao->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-title-<?= $adocao->id; ?>" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modal-title-<?= $adocao->id; ?>"><i class="fas fa-exclamation-triangle text-danger"></i>&nbsp;Tem certeza que quer excluir?</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Para apagar o registro, clique em <strong>Sim, excluir</strong></p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button data-toggle="tooltip" data-placement="bottom" title="Cancelar Exclusão" type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Cancelar Exclusão">Não, voltar</button>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="Excluir <?= $this->router->fetch_class(); ?>" href="<?= base_url($this->router->fetch_class()) . '/del/' . $adocao->id; ?>" class="btn btn-danger" aria-label="Excluir <?= $adocao->nome_animal; ?>">Sim, excluir</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>