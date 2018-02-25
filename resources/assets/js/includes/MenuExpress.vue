<template>
    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 v-if="$route.name == 'Home'" class="breadcrumbs-title">Home</h5>
                    <h5 v-if="$route.name == 'People Management'" class="breadcrumbs-title">People Management</h5>
                    <ol class="breadcrumbs">
                        <router-link tag="li" to="/"><a :class="[$route.name == 'Home' ? 'active':'']">Home</a></router-link>
                        <router-link tag="li" to="/people-management"><a :class="[$route.name == 'People Management' ? 'active':'']" v-if="$route.name == 'People Management'"><span>{{ $route.name }}</span></a></router-link>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

