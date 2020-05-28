
$().ready(function () {
    $().ready(function () {
        $('.c-slider').slick({
            prevArrow: $('.el-arrow-prev'),
            nextArrow: $('.el-arrow-next'),
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }
                ,
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });

    $().ready(function () {
        var location = window.location.href;
        var cur_url = '/' + location.split('/').pop(); //Получаем адрес страниц  

        $('.js-menu li').each(function () {
            var link = $(this).find('a').attr('href');

            if (cur_url == link) {
                $(this).addClass('isCurrent');
            }
        });
    });


    $(".js-btn").click(function () {
        alert('her!');
        $('#exampleModal').arcticmodal();
    });

});


const bodyLocker = (function () {
    let locker = {};
    const lockerClass = 'no-scroll';
    const lockerTarget = $('body');

    locker.isLock = false;
    locker.enable = function () { //
        lockerTarget.addClass(lockerClass);
        locker.isLock = true;
    };
    locker.disable = function () {
        lockerTarget.removeClass(lockerClass);
        locker.isLock = false;
    };
    locker.toggle = function () {
        if (locker.isLock) {
            locker.disable();
        } else {
            locker.enable();
        }
    };
    return locker;
})();


const mainNav = (function () {
    const stateClasses = {
        mobileTogler: 'isActive',
        mobileNav: 'isMobileActive',
    };
    const model = {
        menuIsOpened: false,
    };
    const modelSelectors = {
        menuToggler: '.js-menu-btn',
        navContainer: '.js-navigation',
    };
    var header = $('.js-header');

    $(window).scroll(function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 70) {
            header.addClass('isScroll');
        }
        else {
            header.removeClass('isScroll');
        }
        scrollPrev = scrolled;
    });

    const toggleMenu = (newState) => {
        let switchTo = newState ? newState : (model.menuIsOpened ? 'close' : 'expand');
        switch (switchTo) {
            case 'expand':
                model.menuToggler.forEach(el => { el.classList.add(stateClasses.mobileTogler) });
                model.nav.classList.add(stateClasses.mobileNav);
                model.menuIsOpened = true;
                bodyLocker.enable();
                break;
            case 'close':
                model.menuToggler.forEach(el => { el.classList.remove(stateClasses.mobileTogler) });
                model.nav.classList.remove(stateClasses.mobileNav);
                model.menuIsOpened = false;
                bodyLocker.disable();
                break;
            default:
                toggleMenu('close');
        }
    };

    const init = () => {
        model.nav = document.querySelector(modelSelectors.navContainer);
        model.menuToggler = document.querySelectorAll(modelSelectors.menuToggler);
        console.log(model.menuToggler);
        model.menuToggler.forEach(el => {
            el.addEventListener('click', function (evt) {
                console.log(evt);

                toggleMenu();
            });
        });
        window.addEventListener('resize', function () {
            toggleMenu('close');
        });
    };
    return {
        init: init
    };
})();
mainNav.init();

function tableSearch() {
    var phrase = document.getElementById('table-search');
    var table = document.getElementById('js-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}


const accordeon = document.querySelector('.js-accordeon');

const descr = document.querySelectorAll('.c-accordeon__block-description');

if (accordeon) {
    accordeon.onclick = function (e) {
        let target = e.target;
        

        const openedBlock = document.querySelector('.c-accordeon__block-description:not(.hide)');

        if (
            target.className == 'c-accordeon__block-header' ||
            target.className == 'c-accordeon__block-description'

        ) {
            hideAllDescription();
            alert('her!');

        }


        if (target.className == 'c-accordeon__block-header') {
            if (target.nextElementSibling != openedBlock) {
                target.nextElementSibling.classList.remove('hide');
            }
        }
    }
}


























