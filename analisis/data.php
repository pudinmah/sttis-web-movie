<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chart-content {
            width: 700px;
        }
    </style>
     <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
    
<body onload=getDataPenonton() id ="live_data">
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
                    borderWidth: 2,
                    borderColor: 'rgb(255, 99, 132 )',
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

</body>
</html>