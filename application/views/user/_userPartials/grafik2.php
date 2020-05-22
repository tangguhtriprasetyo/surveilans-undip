<script>
$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
    var donutData        = {
      labels: [ 
      'Tingkat Resiko Ringan',
      'Tingkat Resiko Sedang', 
      'Tingkat Resiko Berat', 
      ],
      datasets: [
      {
        data: [
      <?php 
      $satu = $this->db->query('SELECT * FROM deteksi WHERE skor <= 11');
      $dua = $this->db->query('SELECT * FROM deteksi WHERE skor BETWEEN  12 AND  23');
      $tiga = $this->db->query('SELECT * FROM deteksi WHERE skor > 23');
      ?>
      <?php echo $satu->num_rows(); ?>,
      <?php echo $dua->num_rows(); ?>,
      <?php echo $tiga->num_rows(); ?>
    ],
        backgroundColor : ['#00a65a', '#f39c12', '#f56954'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })
    
    });
</script>