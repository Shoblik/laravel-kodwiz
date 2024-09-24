const homepage = {
    init: () => {
        $('.landingPageContent').css('opacity', 1);
    }
}

const header = {
    toggleNav: e => {
        $('#mainNav').toggleClass('showMenu');
    },

    closeNav: () => {
        $('#mainNav').removeClass('showMenu')
    }
};

const tutorials = {
    init: () => {
        // @todo fetch videos...
    }
}

