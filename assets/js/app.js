var priceSlider = document.querySelector('.priceRange');
var priceValue = document.querySelector('.priceRange');

noUiSlider.create(priceSlider, {
    start: [0, 50],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    },
    format: {
        to: function (value) {
            return '€' + value.toFixed(2);
        },
        from: function (value) {
            return value.replace('€', '');
        }
    }
});

priceSlider.noUiSlider.on('update', function (values, handle) {
    priceValue.innerText = values.join(' - ');
});


