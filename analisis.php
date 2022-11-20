<?php include "header.php"; ?>
<div id="content-wrapper">
  <div class="container-fluid pb-0">
    <div class="top-mobile-search">
      <div class="row">
        <div class="col-md-12">
          <form class="mobile-search">
            <div class="input-group">
              <input type="text" placeholder="Search for..." class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="chart-content">
    <canvas id="myChart"></canvas>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.34.3/collect.min.js" integrity="sha512-PMQSST5BbDOTPTzFifLEy01C6GUYDzWVN/+s0aopu70S6m7NPGeistFqL3EIQc8fMMzbiXULAybnI/gFV0p9LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        function getDataPenonton() {
            $.ajax({
                type: 'GET',
                url: 'backend.php',
                data:{
                    functionName: 'getDataPenonton'
                },
                success: function(response){
                   let penonton = JSON.parse(response)
                //    console.log(penonton)

                   let video = collect(penonton).map(function(item){
                    return item.judul_video
                   }).all()

                   let jumlah_penonton = collect(penonton).map(function(item){
                    return item.jumlah_viewer
                   }).all()
       

            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                labels: video,
                datasets: [{
                    label: 'Analisis Jumlah Penonton',
                    data: jumlah_penonton,
                    borderWidth: 3,
                    borderColor: 'rgb(255, 255, 255 )',
                }]
                },
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
                }
            })
            
        }


  
</script>
    
    

  </div>
  <!-- /.container-fluid -->


  <!-- Sticky Footer -->

</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->


<?php include "footer.php"; ?>

</php>