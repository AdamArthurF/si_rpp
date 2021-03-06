@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ubah guru</h1>
@stop

@section('content')
    <p>Ubah guru</p>

    {{-- With label, invalid feedback disabled and form group class --}}
    <form action="{{ route('guru.update', $guru->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <x-adminlte-input name="nik" label="NIK" placeholder="NIK guru" fgroup-class="col-md-6"
                value="{{ $guru->nik }}" />
            <x-adminlte-input name="nama" label="Nama" placeholder="Nama guru" fgroup-class="col-md-6"
                value="{{ $guru->nama }}" />
            {{-- With prepend slot, label and data-placeholder config --}}
            <!-- <x-adminlte-select2 name="id_guru" label="Guru" label-class="text-lightblue" igroup-size="lg" data-placeholder="Select an option...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                    <option />
                    </x-adminlte-select2> -->
        </div>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
    </form>
@endsection
