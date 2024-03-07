let availableKeywords = [
    '<a href="/price-list/non-print" target="_blank"><img src="asset/images/price-list/detail/nonprint/cover.png" alt="stadium-version-nonprint"><span class="d-grid text-center">Stadium Non Print</span></a>',
    '<a href="/price-list/half-print" target="_blank"><img src="asset/images/price-list/detail/halfprint/cover.png" alt="stadium-version-halfprint"><span class="d-grid text-center">Stadium Half Print</span></a>',
    '<a href="/price-list/full-print" target="_blank"><img src="asset/images/price-list/detail/fullprint/cover.png" alt="stadium-version-fullprint"><span class="d-grid text-center">Stadium Full Print</span></a>',
    '<a href="/price-list/pro" target="_blank"><img src="asset/images/price-list/detail/pro/cover.png" alt="pro-version"><span class="d-grid text-center">Pro Version</span></a>',
    '<a href="/price-list/pro-plus" target="_blank"><img src="asset/images/price-list/detail/proplus/cover.png" alt="pro-plus-/-pro+-version"><span class="d-grid text-center">Pro+ Version</span></a>',
    '<a href="/price-list/jacket-anthem" target="_blank"><img src="asset/images/price-list/detail/jacket-anthem/cover.png" alt="jacket/-jaket-anthem-pro"><span class="d-grid text-center">Jacket Anthem</span></a>',
];

const resultsHarga = document.querySelector('.result-harga');
const inputHarga = document.getElementById('input-harga');

inputHarga.addEventListener('click', function() {
    display(availableKeywords);
});

document.addEventListener('click', function(event) {
    if (!event.target.closest('.input-box')) {
        inputHarga.value = '';
        resultsHarga.innerHTML = '';
    }
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        inputHarga.value = '';
        resultsHarga.innerHTML = '';
    }
});

inputHarga.onkeyup = function(){
    let result = [];
    let input = inputHarga.value;
    if(input.length){
        let formattedInput = input.toLowerCase().replace(/\s+/g, '-');
        result = availableKeywords.filter((keyword)=>{
            let altMatch = keyword.match(/alt="([^"]+)"/);
            if (altMatch) {
                // Replace spaces with hyphens in the alt attribute value
                let formattedAlt = altMatch[1].toLowerCase().replace(/\s+/g, '-');
                return formattedAlt.includes(formattedInput);
            }
            return false;
        });
    }
    display(result);

    if(!result.length){
        resultsHarga.innerHTML = '';
    }
}

function display(result){
    const content = result.map((list)=>{
        return "<li onclick=selectInput(this)>" + list + "</li>"
    });
    resultsHarga.innerHTML = "<ul>" +content.join('') +"</ul>";
}

function selectInput(list){
    let altMatch = list.innerHTML.match(/alt="([^"]+)"/);
    if (altMatch) {
        let altValue = altMatch[1].replace(/-/g, ' '); // Replace hyphens with spaces
        inputHarga.value = altValue;
        resultsHarga.innerHTML = '';
    }
}