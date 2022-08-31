<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin ingin menghapus data???')">
    @csrf
    @method("delete")
    <button class="btn btn-danger "><i class="fa fa-trash"></i></button>
</form>