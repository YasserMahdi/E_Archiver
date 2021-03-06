@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span> الرئيسية</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <br><br><br>

                    <section style="margin-bottom: 50px">
                        <div class="container">
                            <button type="button" onclick="window.location.href='/personal'"
                                    class="btn btn-outline-danger btn-lg btn-block"> الاضابير الشخصية</button>
                        </div>
                        <div class="container">
                            <button type="button" onclick="window.location.href='/units'"
                                    class="btn btn-outline-danger btn-lg btn-block">اضابير الواحدت</button>
                        </div>
                        <div class="container">
                            <button type="button" onclick="window.location.href='/prog'"
                                    class="btn btn-outline-danger btn-lg btn-block">اضابير البرامج</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
