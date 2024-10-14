@extends('frontend.layouts.app') <!-- Extend your main layout -->

@section('content')
<div class="container" style="background-color: white; margin-top: 0;">
    <h3 style="text-align: center; font-weight: bold;">My Submitted Forms</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($forms->isEmpty())
        <div class="alert alert-info text-center">
            You have not submitted any forms yet.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Age</th>
                        <th>Category</th>
                        <th>Video</th>
                        <th style="width: 150px;">Actions</th> <!-- Adjust width for action buttons -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <td>{{ $form->name }}</td>
                            <td>{{ $form->email }}</td>
                            <td>{{ $form->number }}</td>
                            <td>{{ $form->age }}</td>
                            <td>{{ $form->category }}</td>
                            <td>{{ $form->video }}</td>
                            <td>
                                <a href="{{ route('user.edit', $form) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('user.destroy', $form) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
