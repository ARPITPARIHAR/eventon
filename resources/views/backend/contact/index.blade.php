@extends('backend.layouts.app')

@section('meta_title', __('Contact Table'))

@section('page_name', __('Contact Table'))

@section('page_description', __('This is the contact table page displaying all records.'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Sample') }}</a></li>
@endsection

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .table-container {
            margin: 20px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .message-cell {
            max-width: 200px; /* Set max width for the cell */
            white-space: normal; /* Allow line breaks */
            overflow: hidden; /* Hide overflow */
            text-align: left; /* Align text to the left */
        }
        .btn-delete {
            background-color: #800000;
            color: #fff;
            border-color: #800000;
        }
    </style>

    <div class="container table-container">
        <h3 class="my-4">Contact Table</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($samples as $sample)
                    <tr>
                        <td>{{ $loop->iteration + ($samples->currentPage() - 1) * $samples->perPage() }}</td>
                        <td>{{ $sample->name }}</td>
                        <td>{{ $sample->email }}</td>
                        <td class="message-cell">
                            @php
                                $words = explode(' ', $sample->message);
                                $firstLine = implode(' ', array_slice($words, 0, 20));
                                $remaining = implode(' ', array_slice($words, 20));
                            @endphp
                            {{ $firstLine }}<br>
                            @if($remaining)
                                {{ $remaining }}
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $sample->id }}">
                                Delete
                            </button>
                            <div class="modal fade" id="deleteModal{{ $sample->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $sample->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content rounded-0">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $sample->id }}">Confirm Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this item? This action cannot be undone.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('contacts.delete', $sample->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $samples->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('modal')
    <!-- Place for modals if needed -->
@endsection

@section('scripts')
    <!-- Place for additional scripts if needed -->
@endsection

@section('styles')
    <!-- Place for additional styles if needed -->
@endsection
