@extends('produks.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Producs Barang</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('produks.create') }}"> Create New producs</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama_produk</th>
        <th>keterangan</th>
        <th>harga</th>
        <th>jumlah</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($produk as $produks)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $produks->nama_produk }}</td>
        <td>{{ $produks->keterangan }}</td>
        <td>{{ $produks->harga }}</td>
        <td>{{ $produks->jumlah }}</td>
        <td>
            <form action="{{ route('produks.destroy',$produks->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('produks.show',$produks->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('produks.edit',$produks->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $produk->links() !!}
</div>

@endsection