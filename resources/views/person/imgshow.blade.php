<!DOCTYPE html>
<html>
<head>
    <title>Paper</title>
    <style>
        .img-container {
            text-align: center;
            display: block;

        }
        .borderStyle{
            border: 5px solid black;
            padding: 0px;
            margin: 0px;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

@foreach($img as $i)
    <div class="img-container borderStyle">
        <button onclick="printImg()" class="btn btn-outline-success" style="float: left;margin: 15px;">Print</button>
        <!--<img class="img-fluid" src="data:image/jpeg;base64,{{base64_encode($i->doc)}}"   class="rounded" /> -->
        <img class="img-fluid" src="{{ asset('storage/uploads/'.$i->doc .'') }}"   class="rounded" />
    </div>
@endforeach
<script>
    function printImg() {
        var win = window.open('');
        win.document.write('<img src="' + "{{ asset('storage/uploads/'.$i->doc .'') }}" + '" onload="window.print();window.close()" />');
        win.focus();
    }
</script>
</body>
</html>









