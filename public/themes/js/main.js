(function(_0x725dx1) {
    'use strict';
    _0x725dx1(window)['on']('load', function() {
        _0x725dx1('[data-loader="circle-side"]')['fadeOut']();
        _0x725dx1('#preloader')['delay'](350)['fadeOut']('slow');
        _0x725dx1('body')['delay'](350);
        _0x725dx1('.hero_in h1,.hero_in form')['addClass']('animated');
        _0x725dx1('.hero_single, .hero_in')['addClass']('start_bg_zoom');
        _0x725dx1(window)['scroll']()
    });
    _0x725dx1(window)['on']('scroll', function() {
        if (_0x725dx1(this)['scrollTop']() > 1) {
            _0x725dx1('.header')['addClass']('sticky')
        } else {
            _0x725dx1('.header')['removeClass']('sticky')
        }
    });
    _0x725dx1('#sidebar')['theiaStickySidebar']({
        additionalMarginTop: 150
    });
    _0x725dx1('.fixed_title')['theiaStickySidebar']({
        additionalMarginTop: 180
    });
    var _0x725dx2 = _0x725dx1('nav#menu')['mmenu']({
        "\x65\x78\x74\x65\x6E\x73\x69\x6F\x6E\x73": ['pagedim-black'],
        counters: true,
        keyboardNavigation: {
            enable: true,
            enhance: true
        },
        navbar: {
            title: 'MENU'
        },
        navbars: [{
            position: 'bottom',
            content: ['<a href="#0">\xA9 2020 Panagea</a>']
        }]
    }, {
        clone: true,
        classNames: {
            fixedElements: {
                fixed: 'menu_fixed',
                sticky: 'sticky'
            }
        }
    });
    var _0x725dx3 = _0x725dx1('#hamburger');
    var _0x725dx4 = _0x725dx2['data']('mmenu');
    _0x725dx3['on']('click', function() {
        _0x725dx4['open']()
    });
    _0x725dx4['bind']('open:finish', function() {
        setTimeout(function() {
            _0x725dx3['addClass']('is-active')
        }, 100)
    });
    _0x725dx4['bind']('close:finish', function() {
        setTimeout(function() {
            _0x725dx3['removeClass']('is-active')
        }, 100)
    });
    var _0x725dx5 = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        callback: function(_0x725dx6) {},
        scrollContainer: null
    });
    _0x725dx5['init']();
    _0x725dx1('a[href^="#"].btn_explore')['on']('click', function(_0x725dx7) {
        _0x725dx7['preventDefault']();
        var _0x725dx8 = this['hash'];
        var _0x725dx9 = _0x725dx1(_0x725dx8);
        _0x725dx1('html, body')['stop']()['animate']({
            '\x73\x63\x72\x6F\x6C\x6C\x54\x6F\x70': _0x725dx9['offset']()['top']
        }, 800, 'swing', function() {
            window['location']['hash'] = _0x725dx8
        })
    });
    _0x725dx1('.video')['magnificPopup']({
        type: 'iframe'
    });
    _0x725dx1('.magnific-gallery')['each'](function() {
        _0x725dx1(this)['magnificPopup']({
            delegate: 'a',
            type: 'image',
            preloader: true,
            gallery: {
                enabled: true
            },
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                    this['st']['image']['markup'] = this['st']['image']['markup']['replace']('mfp-figure', 'mfp-figure mfp-with-anim');
                    this['st']['mainClass'] = this['st']['el']['attr']('data-effect')
                }
            },
            closeOnContentClick: true,
            midClick: true
        })
    });
    _0x725dx1('#sign-in')['magnificPopup']({
        type: 'inline',
        fixedContentPos: true,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        closeMarkup: '<button title="%title%" type="button" class="mfp-close"></button>',
        mainClass: 'my-mfp-zoom-in'
    });
    _0x725dx1('#modal')['magnificPopup']({
        type: 'inline',
        fixedContentPos: true,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        closeMarkup: '<button title="%title%" type="button" class="mfp-close"></button>',
        mainClass: 'my-mfp-zoom-in'
    });
    _0x725dx1('#password')['hidePassword']('focus', {
        toggle: {
            className: 'my-toggle'
        }
    });
    _0x725dx1('#forgot')['click'](function() {
        _0x725dx1('#forgot_pw')['fadeToggle']('fast')
    });

    function _0x725dxa(_0x725dx7) {
        _0x725dx1(_0x725dx7['target'])['prev']('.card-header')['find']('i.indicator')['toggleClass']('ti-minus ti-plus')
    }
    _0x725dx1('.accordion_2')['on']('hidden.bs.collapse shown.bs.collapse', _0x725dxa);

    function _0x725dxb(_0x725dx7) {
        _0x725dx1(_0x725dx7['target'])['prev']('.panel-heading')['find']('.indicator')['toggleClass']('ti-minus ti-plus')
    }
    _0x725dx1('.custom-search-input-2 select, .custom-select-form select')['niceSelect']();
    var _0x725dxc = Array['prototype']['slice']['call'](document['querySelectorAll']('.js-switch'));
    _0x725dxc['forEach'](function(_0x725dxd) {
        var _0x725dxe = new Switchery(_0x725dxd, {
            size: 'small'
        })
    });
    _0x725dx1('.wish_bt')['on']('click', function(_0x725dx7) {
        _0x725dx7['preventDefault']();
        _0x725dx1(this)['toggleClass']('liked')
    });
    _0x725dx1(window)['bind']('load resize', function() {
        var _0x725dxf = _0x725dx1(window)['width']();
        if (_0x725dx1(this)['width']() < 991) {
            _0x725dx1('.collapse#collapseFilters')['removeClass']('show')
        } else {
            _0x725dx1('.collapse#collapseFilters')['addClass']('show')
        }
    });
    _0x725dx1(window)['on']('scroll', function() {
        'use strict';
        if (_0x725dx1(this)['scrollTop']() != 0) {
            _0x725dx1('#toTop')['fadeIn']()
        } else {
            _0x725dx1('#toTop')['fadeOut']()
        }
    });
    _0x725dx1('#toTop')['on']('click', function() {
        _0x725dx1('body,html')['animate']({
            scrollTop: 0
        }, 500)
    });
    _0x725dx1('#carousel')['owlCarousel']({
        center: true,
        items: 2,
        loop: true,
        margin: 10,
        slideshow: true,
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    _0x725dx1('#reccomended')['owlCarousel']({
        center: true,
        items: 2,
        loop: true,
        slideshow: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin: 0,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            1000: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
    _0x725dx1('#reccomended_adventure')['owlCarousel']({
        center: false,
        items: 2,
        loop: true,
        slideshow: true,
        margin: 15,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            },
            1000: {
                items: 4
            },
            1400: {
                items: 5
            }
        }
    });
    _0x725dx1(window)['bind']('load resize', function() {
        var _0x725dxf = _0x725dx1(window)['width']();
        if (_0x725dxf <= 991) {
            _0x725dx1('.sticky_horizontal')['stick_in_parent']({
                bottoming: false,
                offset_top: 50
            })
        } else {
            _0x725dx1('.sticky_horizontal')['stick_in_parent']({
                bottoming: false,
                offset_top: 67
            })
        }
    });
    _0x725dx1('.opacity-mask')['each'](function() {
        _0x725dx1(this)['css']('background-color', _0x725dx1(this)['attr']('data-opacity-mask'))
    });
    _0x725dx1('.aside-panel-bt')['on']('click', function() {
        _0x725dx1('#panel_dates')['toggleClass']('show');
        _0x725dx1('.layer')['toggleClass']('layer-is-visible')
    });
    _0x725dx1('.content_more')['hide']();
    _0x725dx1('.show_hide')['on']('click', function() {
        var _0x725dx10 = _0x725dx1('.content_more')['is'](':visible') ? 'Read More' : 'Read Less';
        _0x725dx1(this)['text'](_0x725dx10);
        _0x725dx1(this)['prev']('.content_more')['slideToggle'](200)
    });
    var _0x725dx11 = _0x725dx1('.secondary_nav');
    _0x725dx11['find']('a')['on']('click', function(_0x725dx7) {
        _0x725dx7['preventDefault']();
        var _0x725dx8 = this['hash'];
        var _0x725dx9 = _0x725dx1(_0x725dx8);
        _0x725dx1('html, body')['animate']({
            '\x73\x63\x72\x6F\x6C\x6C\x54\x6F\x70': _0x725dx9['offset']()['top'] - 140
        }, 800, 'swing')
    });
    _0x725dx11['find']('ul li a')['on']('click', function() {
        _0x725dx11['find']('ul li a.active')['removeClass']('active');
        _0x725dx1(this)['addClass']('active')
    });
    _0x725dx1('#faq_box a[href^="#"]')['on']('click', function() {
        if (location['pathname']['replace'](/^\//, '') == this['pathname']['replace'](/^\//, '') || location['hostname'] == this['hostname']) {
            var _0x725dx8 = _0x725dx1(this['hash']);
            _0x725dx8 = _0x725dx8['length'] ? _0x725dx8 : _0x725dx1('[name=' + this['hash']['slice'](1) + ']');
            if (_0x725dx8['length']) {
                _0x725dx1('html,body')['animate']({
                    scrollTop: _0x725dx8['offset']()['top'] - 185
                }, 800);
                return false
            }
        }
    });
    _0x725dx1('ul#cat_nav li a')['on']('click', function() {
        _0x725dx1('ul#cat_nav li a.active')['removeClass']('active');
        _0x725dx1(this)['addClass']('active')
    });
    _0x725dx1('.btn_map, .btn_map_in')['on']('click', function() {
        var _0x725dx12 = _0x725dx1(this);
        _0x725dx12['text']() == _0x725dx12['data']('text-swap') ? _0x725dx12['text'](_0x725dx12['data']('text-original')) : _0x725dx12['text'](_0x725dx12['data']('text-swap'));
        _0x725dx1('html, body')['animate']({
            scrollTop: _0x725dx1('body')['offset']()['top'] + 385
        }, 600)
    });

    function _0x725dx13() {
        _0x725dx1('.panel-dropdown')['removeClass']('active')
    }
    _0x725dx1('.panel-dropdown a')['on']('click', function(_0x725dx7) {
        if (_0x725dx1(this)['parent']()['is']('.active')) {
            _0x725dx13()
        } else {
            _0x725dx13();
            _0x725dx1(this)['parent']()['addClass']('active')
        };
        _0x725dx7['preventDefault']()
    });
    var _0x725dx14 = false;
    _0x725dx1('.panel-dropdown')['hover'](function() {
        _0x725dx14 = true
    }, function() {
        _0x725dx14 = false
    });
    _0x725dx1('body')['mouseup'](function() {
        if (!_0x725dx14) {
            _0x725dx13()
        }
    });
    _0x725dx1('.dropdown-user')['hover'](function() {
        _0x725dx1(this)['find']('.dropdown-menu')['stop'](true, true)['delay'](50)['fadeIn'](300)
    }, function() {
        _0x725dx1(this)['find']('.dropdown-menu')['stop'](true, true)['delay'](50)['fadeOut'](300)
    });
    _0x725dx1('a.search_map')['on']('click', function() {
        _0x725dx1('.search_map_wp')['slideToggle']('fast')
    });
    _0x725dx1('input[type="range"]')['rangeslider']({
        polyfill: false,
        onInit: function() {
            this['output'] = _0x725dx1('.distance span')['html'](this['$element']['val']())
        },
        onSlide: function(_0x725dx15, _0x725dx16) {
            this['output']['html'](_0x725dx16)
        }
    });
    _0x725dx1(function() {
        _0x725dx1(window)['bind']('resize', function() {
            if (_0x725dx1(this)['width']() < 768) {
                _0x725dx1('.input-dates')['removeClass']('scroll-fix')
            } else {
                _0x725dx1('.input-dates')['addClass']('scroll-fix')
            }
        })['trigger']('resize')
    })
})(window['jQuery'])