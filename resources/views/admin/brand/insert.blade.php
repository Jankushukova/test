
<!-- Modal -->
<div class="modal fade" id="brandInsertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.brand')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>
</div>
