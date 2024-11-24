<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input wire:model="name" type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input wire:model="email" type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input wire:model="phone" type="text" name="phone" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>