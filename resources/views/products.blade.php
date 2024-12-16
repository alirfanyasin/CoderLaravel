@extends('layouts.template')

@section('section')
  <a href="/products/create">Tambah Product</a>
  <table border="1" cellpadding="20" cellspacing="0">
    <thead>
      <tr>
        <th>Nama</th>
        <th>image</th>
        <th>stock</th>
        <th>price</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($datas as $data)
        <tr>
          <td>{{ $data->name }}</td>
          <td>
            <img src="{{ $data->image }}" width="300px" alt="Image Product">
          </td>
          <td>{{ $data->stock }}</td>
          <td>Rp. {{ $data->price }}</td>
          <td>
            <a href="/products/{{ $data->id }}/edit">Edit</a>
            <form action="/products/{{ $data->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button>Delete</button>
            </form>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
@endsection
