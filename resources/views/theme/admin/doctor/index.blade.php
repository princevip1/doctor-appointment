@extends('theme.admin.layouts.app')

@section('content')
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
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
                    <h3 class="card-title">Doctor</h3>
                    <a class="modal-effect btn btn-sm btn-primary-light d-grid mb-3" data-bs-effect="effect-scale"
                        data-bs-toggle="modal" href="#modaldemo8">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Sl</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
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

                                            <a href="{{ route('doctor.delete', $item->id) }}">
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
        <div class="modal fade " id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Manage Doctor</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data"
                            id="manage-doctor">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" class="form-control" id="_id" name="_id" />


                                <div class="col-lg-12">
                                    <div class="col-lg-4 col-sm-12 mb-4 mb-lg-0">
                                        <input type="file" name="image" class="dropify" data-bs-height="180" />
                                    </div>
                                </div>


                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Select Speciality</label>
                                    <select name="speciality" id="speciality" class="form-control form-select"
                                        aria-placeholder="Select Speciality">
                                        <option value="">Select Speciality</option>
                                        @foreach ($specialities as $item)
                                            <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                        @endforeach


                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Select Division</label>
                                    <select name="division" id="division" class="form-control form-select"
                                        data-bs-placeholder="Select division">
                                        <option value="">Select Division</option>
                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name"
                                        name="name" required />
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control mb-4" name="description" id="description" placeholder="Description" required=""
                                        rows="5"></textarea>
                                </div>


                                <div class="col-xl-12 mb-3">
                                    <label for="chember">Chember</label>
                                    <textarea class="form-control mb-4" name="chember" id="chember" placeholder="Chember Details" required=""
                                        rows="3"></textarea>
                                </div>







                                <div class="col-xl-12 mb-3">
                                    <label for="about">About</label>
                                    <textarea class="form-control mb-4" name="about" id="about" placeholder="About" required="" rows="3"></textarea>
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
    <script src="/admin_assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="/admin_assets/plugins/fileuploads/js/file-upload.js"></script>


    <script>
        function editItem(item) {
            $('#_id').val(item._id);
            $('#name').val(item.name);
            $('#description').val(item.description);
            $('#chember').val(item.chember);
            $('#about').val(item.about);
            $('#speciality').val(item.speciality);
            $('#division').val(item.division);
        }
    </script>
@endsection
