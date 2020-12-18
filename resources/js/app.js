/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../template/js/jquery.min.js');
require('../template/js/jquery-migrate.min.js');
require('../template/js/colors.js');
require('../template/js/popper.min.js');
require('../template/js/bootstrap.min.js');
require('../template/js/owl.carousel.min.js');
require('../template/js/jquery.stellar.min.js');
require('../template/js/finalcountdown.min.js');
require('../template/js/facnybox.min.js');
require('../template/js/jquery.magnific-popup.min.js');
require('../template/js/circle-progress.min.js');
require('../template/js/niceselect.js');
require('../template/js/cube-portfolio.min.js');
require('../template/js/slicknav.min.js');
require('../template/js/easing.min.js');
require('../template/js/waypoints.min.js');
require('../template/js/jquery.counterup.min.js');
require('../template/js/jquery.scrollUp.min.js');
require('../template/js/main.js');

// headerpanel

require('../templatepanel/plugins/jquery/jquery.min.js');
require('../templatepanel/plugins/jquery-ui/jquery-ui.min.js');
require('../templatepanel/plugins/bootstrap/js/bootstrap.bundle.min.js');
//require('../templatepanel/plugins/moment/moment.min.js');
// require('../templatepanel/plugins/chart.js/Chart.min.js');WARNING moment.JS
require('../templatepanel/plugins/sparklines/sparkline.js');
require('../templatepanel/plugins/jqvmap/jquery.vmap.min.js');
require('../templatepanel/plugins/jqvmap/maps/jquery.vmap.usa.js');
require('../templatepanel/plugins/jquery-knob/jquery.knob.min.js');
//require('../templatepanel/plugins/daterangepicker/daterangepicker.js');
//require('../templatepanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');
require('../templatepanel/plugins/summernote/summernote-bs4.min.js');
require('../templatepanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');
require('../templatepanel/dist/js/adminlte.js');
require('../templatepanel/dist/js/pages/dashboard.js');
require('../templatepanel/dist/js/demo.js');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
