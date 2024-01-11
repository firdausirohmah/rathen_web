// new DataTable('#view-order', {
//     columnDefs: [
//         {
//             target: 2,
//             visible: false,
//             searchable: false
//         },
//         {
//             target: 3,
//             visible: false
//         }
//     ]
// });

$(document).ready(function() {
    // new DataTable('#view-order', {
    //     dom: '<"top"i>rt<"bottom"flp><"clear">'
    // });
    // $('#view-order').DataTable();
    
    $('#view-invoice').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    // new DataTable('#view-order', {
    //     dom: '<"top"i>rt<"bottom"flp><"clear">'
    // });
    // $('#view-order').DataTable();
    
    $('#view-quotation').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );