/*=========================================================================================
    File Name: your-top-expenses.js
    Description: echarts your-top-expenses chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
==========================================================================================*/

// Doughnut chart
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
            'echarts/chart/pie',
            'echarts/chart/funnel'
        ],


        // Charts setup
        function (ec) {
            var pendapatan = {
                listrik: 0,
                air: 0,
                service: 0,
                sinking: 0
            }
            $.get(url_pendapatan).done(function( result ) {
                // console.log(result)
                result.data.forEach((item, index) => {
                    pendapatan.listrik = parseInt(item.total_listrik)
                    pendapatan.air = parseInt(item.total_air)
                    pendapatan.service = parseInt(item.total_service)
                    pendapatan.sinking = parseInt(item.total_sinking)
                })
            });

            // Initialize chart
            // ------------------------------
            var myChart2 = ec.init(document.getElementById('your-top-expenses'));

            // Chart Options
            // ------------------------------
            chartOptions2 = {

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['Listrik','Air','Service Charge','Sinking Fund']
                },

                // Add custom colors
                color: ['#FECEA8', '#E84A5F','#2A363B', '#99B898'],

                // Display toolbox
                toolbox: {
                    show: true,
                    orient: 'vertical',
                },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [
                    {
                        name: 'Pendapatan',
                        type: 'pie',
                        radius: ['50%', '70%'],
                        center: ['50%', '57.5%'],
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                },
                                labelLine: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    formatter: '{b}' + '\n\n' + '{c} ({d}%)',
                                    position: 'center',
                                    textStyle: {
                                        fontSize: '17',
                                        fontWeight: '500'
                                    }
                                }
                            }
                        },

                        data: [
                            {value: pendapatan.listrik, name: 'Listrik'},
                            {value: pendapatan.air, name: 'Air'},
                            {value: pendapatan.service, name: 'Service Charge'},
                            {value: pendapatan.sinking, name: 'Sinking Fund'}
                        ]
                    }
                ]
            };

            // Apply options
            // ------------------------------

            setTimeout(function() {
                myChart2.setOption(chartOptions2);
            }, 500);

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
                        myChart2.resize();
                    }, 200);
                }
            });
        }
    );
});