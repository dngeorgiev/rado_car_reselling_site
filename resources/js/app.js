window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
require('./bootstrap');

window.FloatLabels = require('../../node_modules/float-labels.js/dist/float-labels.min.js');
require('../../node_modules/dropzone/dist/min/dropzone.min.js');

$(document).ready(function () {
    var floatlabels = new FloatLabels('#online-evaluation-form', {
        style: 1
    });
});
