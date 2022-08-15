<x-admin.template-admin :title="$judul" :menu-pertama="$menuUtama" :menu-kedua="$menuKedua">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Riwayat Sensor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adm.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Riwayat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <button class="btn btn-sm btn-primary">Add</button>
                        </div>
                        <div class="card-body">
                            <table id="tabel1" class="table table-bordered" style="width: 100%">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col" class="text-center">Riwayat</th>
                                    <th scope="col" class="text-center">Dibuat</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <x-admin.js-layout />
    <script>
        // $(document).ready(function () {
        //     $('#tabel1').DataTable({
        //         'responsive': true
        //     });
        // });
        $(document).ready(function () {
            let base_url = "{{route('adm.riwayat')}}";
            $('#tabel1').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    type: 'GET',
                    url: base_url,
                    async: true,
                },
                language: {
                    processing: "Loading",
                },
                columns: [
                    {
                        data: 'index',
                        class: 'text-center',
                        defaultContent: '',
                        orderable: false,
                        searchable: false,
                        width: '5%',
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1; //auto increment
                        }
                    },
                    {data: 'name', class: 'text-center'},
                    {data: 'created_at', class: 'text-center'},
                    {data: 'action', class: 'text-center', orderable: false},
                ],
                "bDestroy": true
            });
        });
    </script>
</x-admin.template-admin>
