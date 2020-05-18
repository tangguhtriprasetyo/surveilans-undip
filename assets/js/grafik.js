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
  'Kecemasan Berat Sekali / Panik',
  ],
  datasets: [
  {
    data: [700,500,400,600,300],
    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
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