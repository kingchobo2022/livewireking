<div class="card offset-3 col-6">
    <div class="card-header">
        고객 정보 수정
    </div>
    <div class="card-body">
        <form wire:submit="updateCustomer">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input wire:model="name" type="text" name="name" class="form-control">
                <div>
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input wire:model="email" type="email" name="email" class="form-control">
                <div>
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input wire:model="phone" type="text" name="phone" class="form-control">
                <div>
                    @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary">뒤로가기</button>
            <button type="submit" class="btn btn-primary">수정확인</button>
        </form>
    </div>
</div>