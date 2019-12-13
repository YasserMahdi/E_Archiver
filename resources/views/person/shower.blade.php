<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Laravel 6 Datatables Tutorial <br/> HDTuto.com</h1>
        <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>

            <th width="100px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


</body>

<script type="text/javascript">
    console.log("/imggetter/" + window.location.pathname.split('/')[2]);
    function reply_click(clicked_id)
    {
        alert(clicked_id);
    } ;
    $(function () {

        var table = $('.data-table').DataTable({

            processing: true,
            serverSide: true,
            ajax: "/imggetter/" + window.location.pathname.split('/')[2],

            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

<div class="container" style="margin-bottom: 30px">
    <button type="button" onclick="window.location.href='/upload'"
            class="btn btn-outline-danger btn-lg btn-block"> رفع وثيقة </button>
</div>

</html>
