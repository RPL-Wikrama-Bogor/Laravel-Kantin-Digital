@extends('layouts.admin')


@section('title', 'Edit Kategori Makan')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">{{ __('Edit Kategori Makanan') }}</h4>

                </div>
                <div class="header-action">
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <form method="POST" action="{{ route('admin.penjual.update', $penjuals->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="email">Edit Penjual Makanan :</label>
                            <input id="nama_penjual" type="text"
                                class="form-control @error('nama_penjual') is-invalid @enderror" name="nama_penjual"
                                value="{{ $penjuals->nama_penjual }}" autocomplete="nama_penjual" autofocus>
                            @error('nama_penjual')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Edit Alamat :</label>
                            <input id="alamat" type="text"
                                class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{ $penjuals->alamat }}" autocomplete="alamat" autofocus>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                        <button type="submit" class="btn bg-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection


