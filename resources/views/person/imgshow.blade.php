@foreach($img as $i)
<div class="container">
   <div class="" style="border: #1b1e21 ; border-style: dashed">
       <img src="data:image/jpeg;base64,{{base64_encode($i->doc)}}"  class="img-thumnail" />
   </div>
</div>


@endforeach

