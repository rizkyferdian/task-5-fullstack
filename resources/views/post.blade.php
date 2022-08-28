@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <div class="container">
        <div class="card">
            <div class="card-header bg-sky-600">
                <h3>Data Post</h3>
            </div>
            <div class="card-body">
                <div class="mb-10">
                    <a href="{{ route('post.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-3 rounded ">
                        + Tambah Post
                    </a>
                </div>
                <table id="tablePost" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#tablePost').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('post.index') !!}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        width: '25%'
                    },

                ]
            });
        });
    </script>
@endsection
