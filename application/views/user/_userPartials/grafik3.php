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
    var donutChartCanvas = $('#donutChart3').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Masker Bedah', 
      'Masker N95',
      'Face Shield', 
      'Goggle', 
      'Sarung Tangan Medis', 
      'Hazmat',  
      'Caps', 
      'Shoe Cover',
      ],
      datasets: [
      {
        data: [
            <?php 
                $bedah=0;
                $n95=0;
                $faceshield=0;
                $goggle=0;
                $sarungtangan=0;
                $hazmat=0;
                $boot=0;
                $caps=0;
                $cover=0;
                $query = $this->db->query('SELECT * FROM apd')->result_array();
                foreach ($query as $row)
                    {
                       $bedah +=$row['bedah'];
                       $n95 +=$row['n95'];
                       $faceshield +=$row['faceshield'];
                       $goggle +=$row['goggle'];
                       $sarungtangan +=$row['sarungtangan'];
                       $hazmat +=$row['hazmat'];
                       $caps +=$row['caps'];
                       $cover +=$row['cover'];
                    }
                                    ?>
                        <?php echo $bedah; ?>,
                        <?php echo $n95; ?>,
                        <?php echo $faceshield; ?>,
                        <?php echo $goggle; ?>,
                        <?php echo $sarungtangan; ?>,
                        <?php echo $hazmat; ?>,
                        <?php echo $boot; ?>,
                        <?php echo $caps; ?>,
                        <?php echo $cover; ?>
                        ],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#00ff00', '#ff4500'],
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