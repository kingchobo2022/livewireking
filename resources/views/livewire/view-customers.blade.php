<div class="card offset-3 col-6">
    <h5 class="card-header">고객 조회</h5>
    <div class="card-body">
        <h5 class="card-title">아이디 : {{ $customer->id }}</h5>
        <h5 class="card-title">이름 : {{ $customer->name }}</h5>
        <h5 class="card-title">이메일 : {{ $customer->email }}</h5>
        <h5 class="card-title">전화 : {{ $customer->phone }}</h5>
        <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
    </div>
</div>