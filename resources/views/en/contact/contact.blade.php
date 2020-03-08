@extends('layouts.default', ['title' => 'contact us'])

@section('content')

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <form method='post' action="{{route('contact.store')}}" id="form-contact">

                        @csrf


                            <div class="col">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Name">
                                <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  value="{{ old('email') }}" placeholder="Email">
                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="col">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" placeholder="Type here ..." required>{{ old('message') }}</textarea>
                                <span class="invalid-feedback">{{ $errors->first('message') }}</span>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-primary">Send</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@stop
