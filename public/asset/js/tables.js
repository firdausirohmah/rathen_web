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
        ],
        order: [[6, 'desc']]
    } );

    $('#view-quotation').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[5, 'desc']]
    } );

    $('#view-finance').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[0, 'desc']]
    } );
    $('#view-targetfinance').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    $('#view-rating').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[11, 'desc']]
    } );
} );
var id_invoice = 1;

$(document).ready(function() {
    
    $('#view-approval').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[4, 'desc']]
    } );
    $('#view-production').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[6, 'desc']]
    } );
    $('#view-progress').DataTable( {
        dom: '<"top"Bfi>rt<"bottom"lp>',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        order: [[4, 'desc']]
    } );
    
} );

function formatRupiah(input) {
    // Get the input value
    let value = input.value;

    // Remove non-numeric characters
    value = value.replace(/\D/g, '');

    // Format the value as Indonesian currency
    value = 'Rp ' + new Intl.NumberFormat('id-ID').format(value);

    // Set the formatted value back to the input element
    input.value = value;
}


function test(id){
    console.log(id, 'test');
    id_invoice = id; // Atur id_invoice dengan nilai yang diterima dari fungsi test
}

function calculatePelunasan() {
    console.log("ini adalah id ke "+id_invoice);
    var designInput = document.getElementById(('design_'+id_invoice)).value.replace(/\D/g, '');
    var dpInput = document.getElementById(('dp_'+id_invoice)).value.replace(/\D/g, '');
    var totalHarga = document.querySelector('input.input.txt[name="total_harga"][data="'+id_invoice+'"]').value;
    console.log(totalHarga, 'total harga');

    // Parse input values to integers
    designInput = designInput === '' ? 0 : parseInt(designInput);
    dpInput = dpInput === '' ? 0 : parseInt(dpInput);

    // Calculate pelunasan based on the inputs
    var pelunasan = totalHarga - designInput - dpInput;

    // Format pelunasan as Indonesian currency
    var formattedPelunasan = 'Rp ' + new Intl.NumberFormat('id-ID').format(pelunasan);

    // Update the biaya_pelunasan field with the formatted value for display
    document.getElementById(('pelunasan_'+id_invoice)).value = formattedPelunasan;
    document.getElementById(('pelunasan_'+id_invoice)).dataset.prevValue = formattedPelunasan;
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.getElementById(('submit_biaya_'+id_invoice)); // Menggunakan id_invoice saat ini
    console.log(form);
    // Add event listener for form submission
    form.addEventListener('submit', function(event) {
        console.log(id_invoice);
        event.preventDefault();
        // Get the input elements
        const designInput = document.getElementById(('design_'+id_invoice));
        const dpInput = document.getElementById(('dp_'+id_invoice));
        const pelunasanInput = document.getElementById(('pelunasan_'+id_invoice));

        // Remove currency symbol and thousands separator
        const designValue = parseInt(designInput.value.replace(/\D/g, ''));
        const dpValue = parseInt(dpInput.value.replace(/\D/g, ''));
        const pelunasanValue = parseInt(pelunasanInput.value.replace(/\D/g, ''));

        // Set the numeric values as input values for submission
        designInput.value = designValue || 0; // Set to 0 if NaN
        dpInput.value = dpValue || 0; // Set to 0 if NaN
        pelunasanInput.value = pelunasanValue || 0; // Set to 0 if NaN

        // Continue with the form submission
        console.log(designInput.value);
        console.log(dpInput.value);
        console.log(pelunasanInput.value);
        form.submit();
    });
});

function shipping_rate(id){
    console.log('ini id ke-'+id);
    var biaya_pengiriman = document.getElementById(('biaya_pengiriman_'+id));
    var pelunasan_before = document.getElementById(('pelunasan_before_'+id));
    var biaya_pelunasan = document.getElementById(('biaya_pelunasan_'+id));
    var pelunasan = document.getElementById(('pelunasan_'+id)); 
    var final_payment = (+biaya_pengiriman.value) + (+pelunasan_before.value);
    biaya_pelunasan.value = final_payment;
    pelunasan.value = final_payment;

    console.log(final_payment);

}
function final_payment(id){
    var biaya_pengiriman = document.getElementById(('biaya_pengiriman_'+id));
    var biaya_pelunasan = document.getElementById(('biaya_pelunasan_'+id));
    var final_payment = document.getElementById(('final_payment_'+id));
    var pelunasan = document.getElementById(('pelunasan_'+id)); 
    if(final_payment.checked){
        biaya_pengiriman.disabled = true;
        pelunasan.value = '0';
    }

}