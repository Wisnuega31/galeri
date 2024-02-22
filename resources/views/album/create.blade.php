@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Album') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('album.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="NamaAlbum" class="col-md-4 col-form-label text-md-end">{{ __('NamaAlbum') }}</label>

                            <div class="col-md-6">
                                <input id="NamaAlbum" type="text" class="form-control @error('name') is-invalid @enderror" name="NamaAlbum" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Deskripsi" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <input id="Deskripsi" type="text" class="form-control @error('alamat') is-invalid @enderror" name="Deskripsi" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="UserID" value="{{Auth::user()->id}}">

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection