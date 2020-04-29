<div class="d-inline-flex">

    <a class="btn btn-primary m-2" href="{{route('mails.show' , ['mail'=>$id])}}">Show</a>

    <a class="btn btn-secondary m-2" href="{{route('mails.edit' , ['mail'=>$id])}}">Edit</a>

    <a class="btn btn-danger btn-custom m-2" href="{{route('mails.destroy' , ['mail'=>$id])}}">Delete</a>



</div>
