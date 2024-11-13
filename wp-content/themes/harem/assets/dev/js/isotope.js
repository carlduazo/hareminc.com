import $ from 'jquery';

$(document).ready(function () {
    // Initialize Isotope
    var $isotopeGrid = $('.isotope-row.js').isotope({
        itemSelector: '.isotope-item.js',
        layoutMode: 'fitRows'
    });


    $('.isotope-filter label#all_data').trigger('click');

    // Bind click event on category filter labels
    $(document).on('click', '.isotope-filter label', function() {
        var filterValue = $(this).attr('data-filter');
        console.log('Filter value:', filterValue); // Debugging line

        // If "all" filter is selected, show all items
        if (filterValue === '*') {
            $isotopeGrid.isotope({ filter: '*' });
        } else {
            // Filter based on the selected category
            $isotopeGrid.isotope({ filter: filterValue });
        }
    });
});