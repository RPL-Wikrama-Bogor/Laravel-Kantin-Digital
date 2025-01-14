@extends('layouts.admin')


@section('title', 'Kategori Satuan')

@section('content')
<div class="row">
    <div class="col-sm-12">
       <div class="card">
        
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
                <h4 class="card-title">{{ __('Daftar Satuan Barang') }}</h4>

             </div>
          <div class="header-action">
            <button class="btn btn-primary float-right shadow"
            data-toggle="modal" data-target="#modalTambah">
                 Tambah Satuan
            </button>  
                </div>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table id="datatable" class="table data-table table-striped table-bordered">
                   <thead>
                      <tr>
                         <th>No</th>
                         <th>Nama Satuan</th>
                         <th>Action</th>
                         
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($satuans as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ route('admin.satuan-barang.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.satuan-barang.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>    
                @endforeach
                     
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>

{{-- MODAL TAMBAH KATEGORI --}}
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 10px">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Satuan Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.satuan-barang.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <label for="name" class="col-md-3 col-form-label">Satuan Barang</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Simpan') }}
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection

