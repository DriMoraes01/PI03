 <?php $this->load->view('layout/sidebar'); ?>
 <?php $this->load->view('layout/navbar'); ?>

 <div class="main-content">
     <div class="container-fluid">

         <div class="row clearfix">
             <div class="col-xl-6 col-md-12">
                 <div class="card comp-card" style="background-color: White;">
                     <div class="card-body">
                         <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Adoções por Mês</h6>
                         <canvas id="graficoAdocoes"></canvas>
                     </div>
                 </div>
             </div>

             <div class="col-xl-6 col-md-12">
                 <div class="card comp-card" style="background-color: White;">
                     <div class="card-body">
                         <h6 class="mb-25 text-center" style="font-family: 'Roboto', sans-serif; font-size: 18px; color:Black;">Doações por Mês</h6>
                         <canvas id="graficoDoacoes"></canvas>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script>
     var ctxAdocoes = document.getElementById('graficoAdocoes').getContext('2d');
     var graficoAdocoes = new Chart(ctxAdocoes, {
         type: 'bar',
         data: {
             labels: <?= json_encode(array_column($grafico_adocoes, 'mes')) ?>,
             datasets: [{
                 label: 'Adoções',
                 data: <?= json_encode(array_column($grafico_adocoes, 'total')) ?>,
                 backgroundColor: 'rgba(54, 162, 235, 0.5)',
                 borderColor: 'rgba(54, 162, 235, 1)',
                 borderWidth: 1
             }]
         }
     });

     var ctxDoacoes = document.getElementById('graficoDoacoes').getContext('2d');
     var graficoDoacoes = new Chart(ctxDoacoes, {
         type: 'line',
         data: {
             labels: <?= json_encode(array_column($grafico_doacoes, 'mes')) ?>,
             datasets: [{
                 label: 'Doações (R$)',
                 data: <?= json_encode(array_column($grafico_doacoes, 'total')) ?>,
                 backgroundColor: 'rgba(255, 99, 132, 0.5)',
                 borderColor: 'rgba(255, 99, 132, 1)',
                 borderWidth: 2
             }]
         }
     });
 </script>