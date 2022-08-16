<x-admin.template-admin :title="$judul" :menu-pertama="$menuUtama" :menu-kedua="$menuKedua">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adm.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Filter kalimat
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Note: Cukup ketikkan kalimat yang ingin di filter</p>
                                </div>
                            </div>
                            <div class="row">

                                    <div class="col-md-6">
                                        <form action="{{route('usr.filter')}}" method="post">
                                        <div class="row">
                                            @csrf
                                            <div class="col-md-12">
                                                <textarea name="filter" id="" class="form-control" cols="30"
                                                          rows="10">   </textarea>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <button class="btn btn-sm btn-primary">Submit</button>
                                            </div>


                                        </div>
                                        </form>
                                    </div>


                                <div class="col-md-6">
                                    <textarea name="" id="" class="form-control is-valid" cols="30" rows="10">
                                    {{$kataFilter}}
                                    </textarea>
                                    Hasil kata yang difilter :<span class="text-danger"> {{$katakotor}}</span><br/>
                                    @if($solusi !== "")
                                    Silahkan anda mengganti kata kasar tersebut dengan kata : <span class="text-success">{{$solusi}}</span>
                                    @endif
                                </div>

                            </div>

                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <x-admin.js-layout/>
</x-admin.template-admin>
