@extends('backend.layouts.app')

@section('meta_title', __('Participation Table'))

@section('page_name', __('Participation Table'))

@section('page_description', __('This is the participation table page displaying all records.'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Participation') }}</a></li>
@endsection

@section('content')
    <!-- Add Bootstrap CSS for styling and responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 20px;
        }

        .table th, .table td {
            text-align: center;
        }

        .btn-maroon {
            background-color: #800000;
            color: #fff;
            border-color: #800000;
        }

        .btn-maroon:hover {
            background-color: #600000;
            border-color: #600000;
        }

        /* Adjusting table cells for better view on mobile */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 14px;
                padding: 10px;
            }

            .btn-sm {
                font-size: 12px;
                padding: 5px 10px;
            }
        }
    </style>

    <div class="container table-container">
        <h3 class="my-4">Participation Table</h3>

        <!-- Adding table-responsive for responsiveness -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Age group</th>
                        <th>Video Category</th>
                        <th>Video</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participations as $participation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $participation->name }}</td>
                            <td>{{ $participation->email }}</td>
                            <td>{{ $participation->number }}</td>
                            <td>{{ $participation->age }}</td>
                            <td>{{ $participation->category }}</td>
                     <td>
    <video width="90" controls>
        <source src="{{ asset($participation->video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</td>

                            <td>{{ $participation->message }}</td>
                            <td>
                                <!-- Delete Button Triggering Modal -->
                                <button type="button" class="btn btn-maroon btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $participation->id }}">
                                    Delete
                                </button>

                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="deleteModal{{ $participation->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $participation->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content rounded-0">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $participation->id }}">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this item? This action cannot be undone.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('participations.delete', $participation->id) }}" method="POST">
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
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $participations->links('pagination::bootstrap-5') }}
    </div>

    <!-- Add Bootstrap JS for any interactive components -->
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
