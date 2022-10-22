<header class="d-flex flex-column">
    <div class="d-flex flex-wrap justify-content-center  py-3  mb-5  border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Техника</a></li>
            <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
        </ul>
    </div>
</header>
<div class="d-flex flex-wrap justify-content-center bg-white py-3 border-bottom fixed-top">
    <a href="/" class="d-flex align-items-center  mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Simple header</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{route('cranes')}}" class="nav-link">Техника</a></li>
        <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
    </ul>
</div>
