$(document).ready(function() {
    //slider
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 16,
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    //pagination on browse page
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault(); 
        var page = $(this).attr('href').split('page=')[1];
        browse(page);
    });

    function browse(page)
    {
        $.ajax({
            url:"/browse/bmd?page="+page,
            success:function(data)
            {
                $('#medicine_data').html(data);
            }
        });
    }
});