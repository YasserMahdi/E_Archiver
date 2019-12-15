@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>رفع وثيقة جديدة</span>
                        <button type="button" onclick="window.location.href='/prog'"
                                class="btn btn-outline-danger" style="float: right"> عودة لقائمة الاضابير </button>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <span> </span>
                        <br><br><br>

                        <section style="margin-bottom: 50px">
                            <form action="{{ url('/uploadProgramPaper') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name"  name="name">
                                </div>
                                <div class="form-group">
                                    <label for="empid">ID</label>
                                    <input type="text" class="form-control" placeholder="Employeer ID" id="id" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];}?>" name="id">
                                </div>

                                <input type="file" name="image" id="image" class="form-control-file" />
                                <br /><br />

                                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary" />
                            </form>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
