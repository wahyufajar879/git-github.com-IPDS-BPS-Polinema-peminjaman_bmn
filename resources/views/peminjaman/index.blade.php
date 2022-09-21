@extends('master.dahsboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Peminjaman</h2>
            </div>
            <div class="pull-right">
                @can('peminjaman-create')
                <a class="btn btn-success" href="{{ route('peminjaman.create') }}"> Create New Peminjaman</a>
                @endcan
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
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($peminjamen as $peminjaman)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $peminjaman->name }}</td>
	        <td>{{ $peminjaman->detail }}</td>
	        <td>
                <form action="{{ route('peminjaman.destroy',$peminjaman->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('peminjaman.show',$peminjaman->id) }}">Show</a>
                    @can('peminjaman-edit')
                    <a class="btn btn-primary" href="{{ route('peminjaman.edit',$peminjaman->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('peminjaman-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
@endforeach
    </table>





<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
