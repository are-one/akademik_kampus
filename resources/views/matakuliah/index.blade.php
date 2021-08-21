@extends('layouts.app')
@section('title','Matakuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modul Matakuliah</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>Jumlah SKS</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/matakuliah/json',
        columns: [
            { data: 'kode_mk', name: 'kode_mk' },
            { data: 'nama_mk', name: 'nama_mk' },
            { data: 'jml_sks', name: 'jml_sks' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush