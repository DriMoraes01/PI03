<?php $this->load->view('layout/sidebar'); ?>

<?php $this->load->view('layout/navbar'); ?>


<div class="main-content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">                    
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Animais</h6>
                                <h3 class="fw-700 text-center" style="color: Black;"><?= $totAnimais; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-star" style="background-color: Crimson;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Voluntários</h6>
                                <h3 class="fw-700 text-center" style="color: Black;"><?= $totVoluntarios; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user" style="background-color: MediumBlue;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color: Black;">Doações</h6>
                                <h3 class="fw-700 text-center" style="color: Black;">R$<?php echo $totDoacoes->valor_doacoes; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign" style="background-color: DarkMagenta;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Adoções</h6>
                                <h3 class="fw-700 text-center" style="color: Black;"><?= $totAdocoes; ?></h3>
                            </div>
                            <div class=" col-auto">
                                <i class="fas fa-sun" style="background-color: LimeGreen;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Resgates de Animais</h6>
                                <h3 class="fw-700 text-center" style="color: Black;"><?= $totResgates; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-truck" style="background-color: OrangeRed;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card" style="background-color: White;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Usuários</h6>
                                <h3 class="fw-700 text-center" style="color: Black;"><?= $totUsers; ?></h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="background-color: DarkRed;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>