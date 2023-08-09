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
                    <h3 class="card-title">Sms Gateway</h3>
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

                                            <a href="{{ route('smsGateway.delete', $item->id) }}">
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
                        <h6 class="modal-title">Manage Sms Gateway</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('smsGateway.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" class="form-control" id="_id" name="_id" />
                                <div class="col-xl-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name"
                                        name="name" required />
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="host">Host</label>
                                    <input type="text" class="form-control" id="host" placeholder="host"
                                        name="host" required />
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label for="api_key">Api Key</label>
                                    <input type="text" class="form-control" id="api_key" placeholder="api_key"
                                        name="api_key" required />
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="body">body</label>
                                    <input type="text" class="form-control" id="body" placeholder="body"
                                        name="body" required />
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="user_name">User name</label>
                                    <input type="text" class="form-control" id="user_name" placeholder="user_name"
                                        name="user_name" required />
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" placeholder="password"
                                        name="password" required />
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
            $('#name').val(item.name);
            $('#host').val(item.host);
            $('#api_key').val(item.api_key);
            $('#user_name').val(item.user_name);
            $('#password').val(item.password);
            $('#body').val(item.body);
        }
    </script>
@endsection
