try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default;
    require('./bootstrap');

    // if (typeof (Popper) === 'undefined') {
    //     console.log('Popper.js is undefined');
    // } else {
    //     console.log('Popper.js is defined');
    // }
} catch (e) {
    console.log(e);
}
