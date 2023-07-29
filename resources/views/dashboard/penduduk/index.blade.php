@extends('template.panel')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penduduk</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <div class="content">
        <div class="col-md-12">
            <div class="card card-outline card-primary rounded-0 elevation-0">
                <div class="card-header items-center">
                    <div class="card-title ">
                        <a href="/dashboard/penduduk/tambah" class="btn btn-success btn-sm">Tambah Penduduk</a>
                    </div>

                    <div class="card-tools">
                        <form action="/dashboard/penduduk" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px; margin-top:0 !important">


                                <input type="search" name="search" class="form-control float-right" placeholder="Search"
                                    id="search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" id="tableBody">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No.HP</th>
                                <th>Pekerjaan</th>


                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($items as $item)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    {{ $item->nama }}

                                </td>
                                <td>
                                    <a href="{{url('dashboard/penduduk/edit')}}/{{$item->id}}">{{ $item->nik }}</a>
                                    </td>
                                <td>{{ $item->nohp }}</td>
                                <td>{{ $item->pekerjaan }}</td>


                            </tr>

                            @endforeach

                            
                        </tbody>
                        
                    </table>
                 
                     <div class="card-footer clearfix">
                        {{ $items->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    
                </div>
               
                 
           

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <!-- /.content -->
</div>


@endsection