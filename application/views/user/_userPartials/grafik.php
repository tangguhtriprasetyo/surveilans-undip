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
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutData        = {
  labels: [
  'Tidak Ada Kecemasan', 
  'Kecemasan Ringan',
  'Kecemasan Sedang', 
  'Kecemasan Berat',
  ],
  datasets: [
  {
    data: [
      <?php 
      $satu = $this->db->query('SELECT * FROM kecemasan WHERE skor <= 14');
      $dua = $this->db->query('SELECT * FROM kecemasan WHERE skor BETWEEN  15 AND  21');
      $tiga = $this->db->query('SELECT * FROM kecemasan WHERE skor BETWEEN 22 AND 28');
      $empat = $this->db->query('SELECT * FROM kecemasan WHERE skor > 28');
      ?>
      <?php echo $satu->num_rows(); ?>,
      <?php echo $dua->num_rows(); ?>,
      <?php echo $tiga->num_rows(); ?>,
      <?php echo $empat->num_rows(); ?>
    ],
    backgroundColor : ['#00a65a', '#00c0ef', '#f39c12', '#f56954'],
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

