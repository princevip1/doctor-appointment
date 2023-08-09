@extends('theme.admin.layouts.app')

@section('content')
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            {{-- <div class="alert alert-primary" role="alert">
                Primary alert—At vero eos et accusamus praesentium!
            </div> --}}
            @if (Session::has('message'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
                <p class="alert alert-info">{{ Session::get('error') }}</p>
            @endif

            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="card-title">Speciality</h3>
                    <a class="modal-effect btn btn-sm btn-primary-light d-grid mb-3" data-bs-effect="effect-scale"
                        data-bs-toggle="modal" href="#modaldemo8">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Sl</th>
                                    <th class="wd-15p border-bottom-0">Speciality</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary-light" data-bs-effect="effect-scale"
                                                data-bs-toggle="modal" data-bs-target="#modaldemo8"
                                                onclick="editItem({{ $item }})">
                                                Edit
                                            </button>

                                            <a href="{{ route('speciality.delete', $item->id) }}">
                                                <button class="btn btn-sm btn-danger ">
                                                    delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Manage Speciality</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('speciality.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" class="form-control" id="_id" name="_id" />
                                <div class="col-xl-12 mb-3">
                                    <label for="speciality">Speciality</label>
                                    <input type="text" class="form-control" id="speciality" placeholder="Speciality"
                                        name="name" required />
                                </div>

                            </div>
                            <div class="mt-3 d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save changes</button>
                                <button class="btn btn-light ms-3" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function editItem(item) {
            $('#_id').val(item._id);
            $('#speciality').val(item.name);
        }
    </script>
@endsection
