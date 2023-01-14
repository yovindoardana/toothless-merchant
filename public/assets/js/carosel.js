$('.owl-carousel').owlCarousel({
    loop:true,
    margin: 300,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
        $(document).ready(function() {
            blackKit.initDatePicker();
            blackKit.initSliders();

            $('#tableProduct').DataTable({
                paging: true,
                ordering: true
            });
        });

        const showPricelist = (code) => {
            var settings = {
                "url": "http://127.0.0.1:8000/api/game",
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(settings).done(function(response) {
                // console.log(response);
                $("#priceColumn").empty()
                let select = ``
                // console.log(response.game.data);
                $.map(response.game.data, (v, i) => {
                    if (v.status == 'available') {
                        select += `<option class="text-dark" value="${v.code}">${v.name} - Rp. ${v.price.basic}</option>`
                    }
                    // console.log(v.game)
                })
                $("#priceColumn").append(select)
            });
        }