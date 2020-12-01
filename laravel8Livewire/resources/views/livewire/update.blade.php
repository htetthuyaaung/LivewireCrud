<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <input type="hidden" name="id" wire:model="ids"/>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                @error('firstname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
             <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                  @error('lastname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
             <div class="form-group">
                <label for="firstname">Email</label>
                <input type="text" name="email" class="form-control" wire:model="email" />
                  @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
             <div class="form-group">
                <label for="firstname">Phone</label>
                <input type="text" name="phone" class="form-control" wire:model="phone" />
                  @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
      </div>
    </div>
  </div>
</div>