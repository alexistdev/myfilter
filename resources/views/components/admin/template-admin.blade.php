<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

    <!-- Start: Header -->
    <x-admin.header-layout />
    <!-- End: Header -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Start: Navbar -->
    <x-admin.navbar-layout />
    <!-- End: Navbar -->

    <!-- Start: Sidebar -->
    <x-admin.sidebar-layout :menu-utama="$menuPertama" :menu-kedua="$menuKedua"/>

    <!-- End: Sidebar -->

    <!-- Start: Konten -->
    <div class="content-wrapper">
        {{$slot}}
    </div>
    <!-- End: Konten -->

    <!-- Start: Footer -->
    <x-admin.footer-layout />
    <!-- End: Footer -->
</div>
<!-- ./wrapper -->


</body>
</html>
