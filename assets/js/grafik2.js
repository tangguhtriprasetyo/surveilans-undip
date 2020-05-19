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
      'Sehat', 
      'Terindikasi Gejala Ringan',
      'Terindikasi Gejala Sedang', 
      'Terindikasi Gejala Berat', 
      ],
      datasets: [
      {
        data: [700,500,400,600,],
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