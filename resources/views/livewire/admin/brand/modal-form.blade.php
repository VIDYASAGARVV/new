
    <div wire:ignore.self class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Brands</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="storeBrand">

            <div class="modal-body">
              <div class="mb-3">
                <label type="text" >Brand Name</label>
                <input type="text" wire:model.defer="name" class="form-control" >
                 @error('name') <small class="alert alert-danger">{{$message}}</small>                  
                 @enderror 

              </div>
              <div class="mb-3">
                <label type="text" >Brand Slug</label>
                <input type="text" wire:model.defer="slug" class="form-control" >
                @error('slug') <small class="alert alert-danger">{{$message}}</small>                  
                 @enderror 
              </div>
              <div class="mb-3">
                <label type="text" >Status</label> <br>
                <input type="checkbox" wire:model.defer="status"  /> Checked=Hidden, Un-Checked= Visible

                @error('status') <small class="alert alert-danger">{{$message}}</small>                  
                 @enderror 
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save </button>
            </div>
        </form>
          </div>
        </div>
      </div>
    