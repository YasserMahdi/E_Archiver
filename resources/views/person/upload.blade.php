@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <br><br><br>

                        <section >
                            <form action="/uploadimg" METHOD="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="filename">اسم الوثيقة</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Example input">
                                </div>
                                <div class="form-group">
                                    <label for="id"> معرف الموظف</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="id" placeholder="Example input">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" name="file"  id="image" value="image" class="form-control-file" >
                                </div>
                                <button type="submit" class="btn btn-primary" name="insert"  id="insert" value="insert">Submit</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
