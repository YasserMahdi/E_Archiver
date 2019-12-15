@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard

                        <button type="button" onclick="window.location.href='/prog'"
                                class="btn btn-outline-danger" style="float: right"> عودة لقائمة الاضابير </button>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <section>
                            <form action="addProg" method="POST">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="unit">اسم البرنامج</label>
                                    <input type="text" class="form-control" id="program" name="program" placeholder="program">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
