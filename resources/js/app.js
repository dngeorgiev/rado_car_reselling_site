window.$ = window.jQuery = require('jquery');
// window.Popper = require('popper.js').default;
require('./bootstrap');
require('../../node_modules/bootstrap/dist/js/bootstrap')

window.FloatLabels = require('../../node_modules/float-labels.js/dist/float-labels.min.js');
require('../../node_modules/dropzone/dist/min/dropzone.min.js');
require('../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js');

$(document).ready(function () {
    var floatlabels = new FloatLabels('#online-evaluation-form', {
        style: 1
    });

    var floatlabels = new FloatLabels('#comment-form', {
        style: 1
    });

    var floatlabels = new FloatLabels('#contacts-form', {
        style: 1
    });

    $(".gallery-img").fancybox();

    $('.navbar-toggler').on('click', function () {
        let overlay = $('#overlay');
        overlay.toggleClass('show');
    });

    $(document).click(function (event) {
        let clickover = $(event.target);
        console.log('overlay has class show', !clickover.hasClass('show'))
        let _opened = $('.navbar-collapse').hasClass('show');
        console.log('menu is opened', _opened)
        if (_opened === true && !clickover.hasClass("show") === false) {
            $('.navbar-collapse').collapse('hide');
            $('#overlay').removeClass('show');
        }
    });
});
