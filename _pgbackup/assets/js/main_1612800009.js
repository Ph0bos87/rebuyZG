/*
Template Name: Rebuy Stars
*/

(function () {
    //===== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    }

    function fadeout() {
        document.querySelector('#loading-area').style.opacity = '0';
        document.querySelector('#loading-area').style.display = 'none';
    }

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }



        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');

    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            });
        });
    });

    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");
    var navbarCollapse = document.querySelector(".collapse");

    document.querySelectorAll(".page-scroll").forEach(e =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove('show')
        })
    );
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    })
    // WOW active
    new WOW().init();


    
})();

jQuery(document).ready(function () {
        var reqUrl = "https://kirota.hr/jackpots_all.php";
        var jackpotsJSON = false;
        var counters = {};
        var interval;

        var initOptions = {
            suffix: ' kn',
            separator: '.',
            decimal: ','
        };

        jQuery.getJSON(reqUrl, function (data) {
            jackpotsJSON = data;

            jQuery('.rb-jackpot').each(function (index) {
                var jackpot = this;
                var city = jQuery(jackpot).attr('data-city');
                var type = jQuery(jackpot).attr('data-type');
                var value = parseFloat(jackpotsJSON[city][type].replace(',', ''));

                jQuery(jackpot).find('.rb-jackpot__value').attr('id', city + type);

                counters[city + type] = new CountUp(city + type, 0, value, 2, 2, initOptions);

                if (!counters[city + type].error) {
                    counters[city + type].start();
                } else {
                    console.error(counters[city + type].error);
                }
            });
        });

        interval = setInterval(function () {

            jQuery.getJSON(reqUrl, function (data) {
                jackpotsJSON = data;

                jQuery('.rb-jackpot').each(function (index) {
                    var jackpot = this;
                    var city = jQuery(jackpot).attr('data-city');
                    var type = jQuery(jackpot).attr('data-type');
                    var value = parseFloat(jackpotsJSON[city][type].replace(',', ''));

                    counters[city + type].update(value);
                });
            });
        }, 15 * 1000);
    });