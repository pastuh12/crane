<header class="container-fluid bg-white border-bottom mb-4">
    <div class="row py-2 py-md-3 border-bottom">
        <div class="col col-md-4 d-flex flex-row align-items-center justify-content-center">
                <a href="/" class="d-flex align-items-between mb mb-md-0 me-1 text-dark text-decoration-none">
                    <img class="rounded logo" style="width:50px; height: 50px;" src="{{asset('./storage/svg/bmw-logo.svg')}}"
                        alt="">
                </a>
            <span class="fs-4">Аренда кранов</span>
        </div>
        <div class="d-none d-md-block col-md-6">
            <div style="width: fit-content">
                <span class="fs-5 list-group-item list-group-item-action border-0">Описание</span>
            </div>
        </div>
        <div class="d-none d-md-flex col-md-2 flex-row">
            <img src="" alt="">
            <div style="width: fit-content">
                <span class="fs-5 list-group-item list-group-item-action border-0">Адрес</span>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bg-white justify-content-around border-bottom py-1">
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('home') }}">Главная</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('cranes') }}" class="">Техника</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('about') }}" class="">О нас</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0" href="#"
                class="">Контакты</a></div>
    </div>
</header>


{{-- <div class="container-fluid bg-white border-bottom fixed-top">
    <div class="row py-2 py-md-3 border-bottom">
        <div class="col col-md-4 d-flex flex-row align-items-center justify-content-center">
                <a href="/" class="d-flex align-items-between mb mb-md-0 me-1 text-dark text-decoration-none">
                    <img class="rounded logo" style="width:50px; height: 50px;" src="{{asset('./storage/svg/bmw-logo.svg')}}"
                        alt="">
                </a>
            <span class="fs-4">Аренда кранов</span>
        </div>
        <div class="d-none d-md-block col-md-6">
            <div style="width: fit-content">
                <span class="fs-5 list-group-item list-group-item-action border-0">Описание</span>
            </div>
        </div>
        <div class="d-none d-md-flex col-md-2 flex-row">
            <img src="" alt="">
            <div style="width: fit-content">
                <span class="fs-5 list-group-item list-group-item-action border-0">Адрес</span>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row bg-white justify-content-around border-bottom py-1">
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('home') }}">Главная</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('cranes') }}" class="">Техника</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0"
                href="{{ route('about') }}" class="">О нас</a></div>
        <div><a class="text-dark text-decoration-none list-group-item list-group-item-action border-0" href="#"
                class="">Контакты</a></div>
    </div>
</div> --}}
