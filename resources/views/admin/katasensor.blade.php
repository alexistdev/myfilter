<x-admin.template-admin :title="$judul" :menu-pertama="$menuUtama" :menu-kedua="$menuKedua">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Master Data Sensor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adm.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Kata-kata Sensor</li>
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
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambah">Add</button>
                        </div>
                        <div class="card-body">
                            <table id="tabel1" class="table table-bordered" style="width: 100%">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col" class="text-center">Kata-kata</th>
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
    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('adm.katasensor.save')}}" method="post">
                    @csrf
                <div class="modal-body">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="namaKata"
                                   id="namaKata" @class(["form-label","errorLabel",($errors->edit->has('name'))? "text-danger":""]) >Nama
                                Kata</label>
                            <input type="text" name="name" maxlength="125"
                                   @class(["form-control","errorInput",($errors->edit->has('name'))? "is-invalid":""]) value="{{old('name')}}"
                                   id="namaKata">
                            @if($errors->edit->has('name'))
                                <span
                                    class="text-danger errorMessage">{{$errors->edit->first('name')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
    <x-admin.js-layout />
    <script>
        // $(document).ready(function () {
        //     $('#tabel1').DataTable({
        //         'responsive': true
        //     });
        // });
        $(document).ready(function () {
            let base_url = "{{route('adm.katasensor')}}";
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
