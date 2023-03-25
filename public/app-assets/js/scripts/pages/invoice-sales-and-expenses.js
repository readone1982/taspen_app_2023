/*=========================================================================================
    File Name: invoice-sales-and-expenses.js
    Description: Invoice yearly sales and expenses bar chart.
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
==========================================================================================*/

// invoice-sales-and-expenses
// ------------------------------

$(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line'
        ],


        // Charts setup
        function async (ec) {

            let invoice = [0,0,0,0,0,0,0,0,0,0,0,0]
            let payment = [0,0,0,0,0,0,0,0,0,0,0,0]
            let notpaid = [0,0,0,0,0,0,0,0,0,0,0,0]
            $.get(url_invoice).done(function( result ) {
                // console.log(result)
                result.data.forEach((item, index) => {
                    invoice[index] = item.total
                });
            });
            $.get(url_payment).done(function( result ) {
                // console.log(result)
                result.data.forEach((item, index) => {
                    payment[index] = item.total
                    notpaid[index] = parseInt(invoice[index]) - parseInt(item.total)
                });
            });

            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('sales-and-expenses'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 35,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: ['Tagihan', 'Pembayaran', 'Belum Bayar']
                },

                // Add custom colors
                color: ['#3BAFDA','#37BC9B', '#FE4D63'],

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],

                // Vertical axis
                yAxis: [{
                    type: 'value',
                    scale: true,
                    nameTextStyle: {
                        fontSize: 10
                    }
                }],

                // Add series
                series: [
                    {
                        name: 'Tagihan',
                        type: 'bar',
                        data: invoice,
                    },
                    {
                        name: 'Pembayaran',
                        type: 'bar',
                        data: payment,
                    },
                    {
                        name: 'Belum Bayar',
                        type: 'bar',
                        data: notpaid,
                    }
                ]
            };

            // Apply options
            // ------------------------------

            setTimeout(function() {
                myChart.setOption(chartOptions);
            }, 200);


            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});