require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();
require('./includes');

Vue.component('layout-app', require('./components/Layouts/LayoutApp.vue'));
import { router } from './routes.js';

const app = new Vue({
    el: '#app',
    router,
    data(){
        return {
            table: '',
        }
    },
    created(){
        Event.$on('init-datatable', (tableid) => {
            this.datatableThis(tableid);
        });
        Event.$on('destroy-datatable', () => {
            this.destroyThis();
        });
        Event.$on('sweet-alert-message', (message) => {
            this.sweetAlertMessage(message);
        });
        this.initComponents();
    },
    methods:{
        datatableThis(tableid){
            this.table = $('#' + tableid).DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                "order": [[ 0, "asc" ]]
            });
        },
        destroyThis(){
            this.table.destroy();
        },
        initComponents()
        {
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                    if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                },100);
            });
        },
        sweetAlertMessage(message)
        {
            swal('Mise à jour', message, "success");
        }
    }
});
