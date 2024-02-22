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

document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.getElementById('submit_biaya');

    // Add event listener for form submission
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        // Get the input elements
        const designInput = document.getElementById('design');
        const dpInput = document.getElementById('dp');
        const pelunasanInput = document.getElementById('pelunasan');

        // Remove currency symbol and thousands separator
        const designValue = parseInt(designInput.value.replace(/\D/g, ''));
        const dpValue = parseInt(dpInput.value.replace(/\D/g, ''));
        const pelunasanValue = parseInt(pelunasanInput.value.replace(/\D/g, ''));

        // Set the numeric values as input values for submission
        designInput.value = designValue || 0; // Set to 0 if NaN
        dpInput.value = dpValue || 0; // Set to 0 if NaN
        pelunasanInput.value = pelunasanValue || 0; // Set to 0 if NaN

        // Continue with the form submission
        return true;
    });
});

function calculatePelunasan(id) {
    console.log("ini adalah id ke "+id);
     var designInput = document.getElementById('design').value.replace(/\D/g, '');
    var dpInput = document.getElementById('dp').value.replace(/\D/g, '');
    var totalHarga = document.querySelector($`input.input.txt[name="total_harga"][data="{id}"]`).value;
    console.log(totalHarga, 'total harga');

    // Parse input values to integers
    designInput = designInput === '' ? 0 : parseInt(designInput);
    dpInput = dpInput === '' ? 0 : parseInt(dpInput);

    // Calculate pelunasan based on the inputs
    var pelunasan = totalHarga - designInput - dpInput;

    // Format pelunasan as Indonesian currency
    var formattedPelunasan = 'Rp ' + new Intl.NumberFormat('id-ID').format(pelunasan);

    // Update the biaya_pelunasan field with the formatted value for display
    document.getElementById('pelunasan').value = formattedPelunasan;
    document.getElementById('pelunasan').dataset.prevValue = formattedPelunasan;
   
}
