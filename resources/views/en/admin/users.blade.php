@extends('layouts.default', ['title' => 'users'])

@section('content')



<div class="main-content">

    @include('layouts.admin-topbar')


    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body py-5">
            
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Users</h3>
                                <p class="text-sm mb-0">
                                        This is the user management.
                                    </p>
                            </div>
                                <div class="col-4 text-right">
                                    <a href="create-user.html" class="btn btn-sm btn-primary">Add user</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                        </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="" alt="" style="max-width: 100px; border-radius: 25px">
                                        </span>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <a href="mailto:"><span class="__cf_email__" data-cfemail="ef8e8b828681af8e9d888081c18c8082">email</span></a>
                                    </td>
                                    <td>Admin</td>
                                    <td>25/09/2019 09:35</td>
                                    <td class="text-right">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="" alt="" style="max-width: 100px; border-radius: 25px">
                                        </span>
                                    </td>
                                    <td>Manager</td>
                                    <td>
                                        <a href=""><span class="__cf_email__" data-cfemail="6e0d1c0b0f1a011c2e0f1c090100400d0103">email</span></a>
                                    </td>
                                    <td>Manager</td>
                                    <td>25/09/2019 09:35</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="edit-user.html">Edit</a>
                                                <form action="">
                                                    <input type="hidden" name="_token" value="jWuL0JHlytWb7KEd4iCZXfiH5FS1Rd3TQfLqjY7k">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="button" class="dropdown-item" onclick="confirm('Are you sure you want to delete this user?') ? this.parentElement.submit() : ''">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="" alt="" style="max-width: 100px; border-radius: 25px">
                                        </span>
                                    </td>
                                    <td>Member</td>
                                    <td>
                                        <a href=""><span class="__cf_email__" data-cfemail="f79a929a959285b79685909899d994989a">email</span></a>
                                    </td>
                                    <td>Member</td>
                                    <td>25/09/2019 09:35</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="edit-user.html">Edit</a>
                                                <form action="">
                                                    <input type="hidden" name="_token" value="jWuL0JHlytWb7KEd4iCZXfiH5FS1Rd3TQfLqjY7k"> <input type="hidden" name="_method" value="delete">
                                                    <button type="button" class="dropdown-item" onclick="confirm('Are you sure you want to delete this user?') ? this.parentElement.submit() : ''">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
