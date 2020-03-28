@extends('layouts.default', ['title' => 'jck-admin'])

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
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col">
                            <!-- Text editor -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header">
                                    <h3 class="mb-0">Text editor</h3>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <form>
                                        <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop