@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">رفع وثيقة جديدة</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <span> </span>
                        <br><br><br>

                        <section style="margin-bottom: 50px">
                            <form action="{{ url('/uploadimg') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                Title:
                                <br />
                                <input type="text" name="name" class="form-control" />
                                <br /><br />
                                Employee ID:
                                <input type="text" name="id"  class="form-control" />

                                <br />
                                <input type="file" name="image" />
                                <br /><br />
                                <input type="submit" value=" Save " class="btn btn-primary" />
                            </form>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
