@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Menu</h2>

    <a href="/menu/create" class="btn btn-danger mb-3">
        Tambah Menu
    </a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        @foreach($menu as $m)
        <tr>
            <td>{{ $m->nama_menu }}</td>
            <td>Rp {{ $m->harga }}</td>
            <td>
                <a href="/menu/{{ $m->id }}/edit"
                   class="btn btn-warning">Edit</a>

                <form action="/menu/{{ $m->id }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection