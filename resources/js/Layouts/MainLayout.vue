<script setup>
import NavBar from '../Components/NavBar';
import Sidebar from '../Components/SideBar';
</script>


<template>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <NavBar></NavBar>
        <!-- /.navbar -->

        <Sidebar></Sidebar>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper mt-2">
            <!-- Main content -->
            <section class="content">
                <slot></slot>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->
</template>
