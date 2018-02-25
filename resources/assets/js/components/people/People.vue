<template>
    <!--DataTables example-->
    <div id="table-datatables">
        <div class="row">
            <div class="col s12 m12 l12">
                <table id="data-table-simple" class="display" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>Address</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>Address</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    <tr v-for="(person, index) in people" v-if="people.length > 0">
                        <td>{{ person.name }}</td>
                        <td >{{ person.birthdate | moment }}</td>
                        <td>{{ person.address }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                people: []
            }
        },
        mounted() {
            this.getData()
        },
        created(){
        },
        methods: {
            getData() {
                axios.get('people')
                    .then(response => {
                        this.people = response.data.people;
                        Vue.nextTick(function () {
                            Event.$emit('init-datatable', 'data-table-simple');
                        });
                    });
            },
            destroyDataTable() {
                Event.$emit('destroy-datatable');
            },
            moment: function () {
                return moment();
            }
        },
        filters: {
            moment: function (date) {
                return moment(date).format('DD/MM/YYYY');
            }
        }
    }
</script>

