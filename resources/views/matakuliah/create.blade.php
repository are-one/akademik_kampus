@extends('layouts.app')
@section('title','Input Data Matakuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Matakuliah</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Kode Matakuliah</label>
                            <div class="col-md-3">
                                {{ Form::text('kode_mk',null,['class' => 'form-control', 'placeholder' => 'Kode Matakuliah']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama Matakuliah</label>
                            <div class="col-md-6">
                                {{ Form::text('nama_mk',null,['class' => 'form-control', 'placeholder' => 'Nama Matakuliah']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jumlah SKS</label>
                            <div class="col-md-2">
                                {{ Form::text('jml_sks',null,['class' => 'form-control', 'placeholder' => 'Jumlah SKS']) }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan Data',['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
