@extends('layouts.main')
@section('title', 'List Tugas')

@section('content')
    <section class="section custom-section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Edit Tugas {{ $tugas->judul }}</h4>
                            <a class="btn btn-primary btn-sm" href="{{ route('tugas.index') }}">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tugas.update', $tugas->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $tugas->judul }}" placeholder="{{ __('Judul tugas') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kelas_id">Kelas</label>
                                    <select id="kelas_id" name="kelas_id" class="select2bs4 form-control @error('kelas_id') is-invalid @enderror">
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($kelas as $data )
                                            <option value="{{ $data->id }}"
                                            @if ($tugas->kelas_id == $data->id)
                                                selected
                                            @endif
                                        >{{ $data->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="{{ __('Dekripsi') }}">{{ $tugas->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto">File Materi</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="file" type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file">
                                            <label class="custom-file-label" for="file">{{ $tugas->file }}</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection