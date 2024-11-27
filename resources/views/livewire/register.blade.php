<div class="card offset-3 col-6">
    <div class="card-header">
        유저 등록
    </div>
    <div class="card-body">
        <form wire:submit="storeUser">
            <div class="mb-3">
                <label class="form-label">이름</label>
                <input wire:model="name" type="text" class="form-control">
                <div>
                    @error('name')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">전화번호</label>
                <input wire:model="phone" type="text" class="form-control">
                <div>
                    @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">이메일</label>
                <input wire:model="email" type="email" class="form-control">
                <div>
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">암호</label>
                <input wire:model="password" type="password" class="form-control">
                <div>
                    @error('password')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">확인</button>
        </form>
    </div>
</div>