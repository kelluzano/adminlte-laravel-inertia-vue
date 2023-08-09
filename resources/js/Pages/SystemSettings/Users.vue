<script setup>
import { Head } from "@inertiajs/vue3";
import MainLayout from '../../Layouts/MainLayout.vue';
</script>

<script>
export default {
    layout: MainLayout
}
</script>

<template>
    <Head title="Users" />
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users</h3>
                    </div>
                    <div class="card-body">
                        User List
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</template>
