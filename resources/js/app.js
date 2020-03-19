window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
require('./bootstrap');

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

    $(".gallery-img").fancybox();
});
