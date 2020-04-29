<div class="d-inline-flex">

    <a class="btn btn-primary m-2" href="{{route('components.show' , ['component'=>$id])}}">Show</a>

    <a class="btn btn-secondary m-2" href="{{route('components.edit' , ['component'=>$id])}}">Edit</a>

    <a class="btn btn-danger btn-custom m-2" href="{{route('components.destroy' , ['component'=>$id])}}">Delete</a>



</div>
