<div class="card offset-3 col-6">
    <div class="card-header">
        로그인
    </div>
    <div class="card-body">
        <form wire:submit="loginUser">
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
    <div class="card-footer text-body-secondary">
        새로운 계정 생성
        <button class="btn btn-success ms-1" wire:navigate href="/register">유저생성</button>
    </div>
</div>