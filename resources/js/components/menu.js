$(function() {

    if($('#my-menu')) {
        let $menu = $('#my-menu').mmenu({
            navbar: {
                title: 'Меню'
            },
            'slidingSubmenus': false,
            'extensions': [
                'theme-dark',
                'pagedim-black'
            ],
            'iconbar': {
                'add': true,
                'bottom': [
                    '<a href="#" class="social-media__link"><svg class="social-media__image"><use xlink:href="sprite/sprite.svg#sprite-vk"></use></svg></a>',
                    '<a href="#" class="social-media__link"><svg class="social-media__image"><use xlink:href="sprite/sprite.svg#sprite-facebook-footer"></use></svg></a>',
                    '<a href="#" class="social-media__link"><svg class="social-media__image"><use xlink:href="sprite/sprite.svg#sprite-twitter-1"></use></svg></a>',
                    '<a href="#" class="social-media__link"><svg class="social-media__image"><use xlink:href="sprite/sprite.svg#sprite-youtube"></use></svg></a>'
                ]
            }
        });

        let $menuOpenButton = $('#mmenu_open');
        let API = $menu.data('mmenu');

        $menuOpenButton.click(function () {
            API.open();
        });

        $('.close-mmenu').click(function () {
            API.close();
        });
    }
});