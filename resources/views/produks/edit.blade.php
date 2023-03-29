@extends('produks.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit student</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('produks.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('produks.update',$produk->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control"
                    placeholder="Nama Produk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input class="form-control" name="keterangan" placeholder="Keterangan"
                    value="{{ $produk->keterangan }}">
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                <input class="form-control" name="harga" placeholder="Harga" value="{{ $produk->harga }}">
            </div>
            <div class="form-group">
                <strong>Jumlah:</strong>
                <input class="form-control" name="jumlah" placeholder="Harga" value="{{ $produk->jumlah }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>
@endsection