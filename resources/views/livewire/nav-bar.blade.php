<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @guest
                <li class="nav-item"><a href="/login" wire:navigate class="nav-link">로그인</a></li>
                <li class="nav-item"><a href="/register" wire:navigate class="nav-link">유저등록</a></li>
            @endguest
            @auth
            <li class="nav-item"><a href="/customers" wire:navigate class="nav-link">고객목록</a></li>
            <li class="nav-item"><button wire:click="logout" class="btn btn-secondary">로그아웃</button></li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>