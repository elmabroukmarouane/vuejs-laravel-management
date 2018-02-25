<template>
    <div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <includes-preload-page></includes-preload-page>

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <includes-header></includes-header>

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
                <includes-menu-gauche></includes-menu-gauche>
                <!-- START CONTENT -->
                <section id="content">
                    <includes-menu-express></includes-menu-express>
                    <!--start container-->
                    <div class="container">
                        <div class="section">
                            <router-view></router-view>
                        </div>
                    </div>
                    <!--end container-->
                </section>
                <!-- END CONTENT -->
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END MAIN -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <includes-footer></includes-footer>

        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

