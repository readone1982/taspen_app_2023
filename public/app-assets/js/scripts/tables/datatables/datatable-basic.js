/*=========================================================================================
    File Name: datatables-basic.js
    Description: Basic Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function() {

/****************************************
*       js of zero configuration        *
****************************************/

$('.zero-configuration').DataTable({
    responsive: true
});

/********************************************
 *        js of Order by the grouping        *
 ********************************************/

$('.table-payment').DataTable({
    "responsive": true,
    // "columnDefs": [{
    //     "visible": false,
    //     "targets": 6
    // }],
    "order": [
        [6, 'desc']
    ],
    "displayLength": 25,
    "drawCallback": function(settings) {
        var api = this.api();
        var rows = api.rows({
            page: 'current'
        }).nodes();
        var last = null;

        api.column(6, {
            page: 'current'
        }).data().each(function(group, i) {
            if (last !== group) {
                $(rows).eq(i).before(
                    '<tr class="group"><td colspan="8">' + group + '</td></tr>'
                );

                last = group;
            }
        });
    }
});

$('.table-payment tbody').on('click', 'tr.group', function() {
    var currentOrder = table.order()[0];
    if (currentOrder[0] === 6 && currentOrder[1] === 'desc') {
        table.order([6, 'asc']).draw();
    }
    else {
        table.order([6, 'desc']).draw();
    }
});

/**************************************
*       js of default ordering        *
**************************************/

$('.default-ordering').DataTable( {
    "order": [[ 3, "desc" ]]
} );

/************************************
*       js of multi ordering        *
************************************/

$('.multi-ordering').DataTable( {
    columnDefs: [ {
        targets: [ 0 ],
        orderData: [ 0, 1 ]
    }, {
        targets: [ 1 ],
        orderData: [ 1, 0 ]
    }, {
        targets: [ 4 ],
        orderData: [ 4, 0 ]
    } ]
} );

/*************************************
*       js of complex headers        *
*************************************/

$('.complex-headers').DataTable();

/*************************************
*       js of dom positioning        *
*************************************/

$('.dom-positioning').DataTable( {
    "dom": '<"top"i>rt<"bottom"flp><"clear">'
} );

/************************************
*       js of alt pagination        *
************************************/

$('.alt-pagination').DataTable( {
    "pagingType": "full_numbers"
} );

/*************************************
*       js of scroll vertical        *
*************************************/

$('.scroll-vertical').DataTable( {
    "scrollY":        "200px",
    "scrollCollapse": true,
    "paging":         false
} );

/************************************
*       js of dynamic height        *
************************************/

$('.dynamic-height').DataTable( {
    scrollY:        '50vh',
    scrollCollapse: true,
    paging:         false
} );

/***************************************
*       js of scroll horizontal        *
***************************************/

$('.scroll-horizontal').DataTable( {
    "scrollX": true
} );

/**************************************************
*       js of scroll horizontal & vertical        *
**************************************************/

$('.scroll-horizontal-vertical').DataTable( {
    "scrollY": 200,
    "scrollX": true
} );

/**********************************************
*       Language - Comma decimal place        *
**********************************************/

$('.comma-decimal-place').DataTable( {
    "language": {
        "decimal": ",",
        "thousands": "."
    }
} );


var groupingTable = $('.row-grouping').DataTable({
    responsive: true,
    rowReorder: true,
    "columnDefs": [
        { "visible": false, "targets": 5 },
    ],
    // "order": [[ 2, 'desc' ]],
    "displayLength": 25,
    "drawCallback": function ( settings ) {
        var api = this.api();
        var rows = api.rows( {page:'current'} ).nodes();
        var last=null;

        api.column(5, {page:'current'} ).data().each( function ( group, i ) {
            if ( last !== group ) {
                $(rows).eq( i ).before(
                    '<tr class="group"><td colspan="9">'+group+'</td></tr>'
                );

                last = group;
            }
        } );
    }
} );

$('.row-grouping tbody').on( 'click', 'tr.group', function () {
    if (typeof table !== 'undefined' && table.order()[0]) {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 5 && currentOrder[1] === 'asc' ) {
            table.order( [ 5, 'desc' ] ).draw();
        }
        else {
            table.order( [ 5, 'asc' ] ).draw();
        }
    }
});


});
