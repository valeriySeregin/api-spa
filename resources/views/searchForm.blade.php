<div class="container-lg">
    <form class="d-flex" action="{{ route('search') }}" method="GET">
        <input class="form-control me-2" type="search" placeholder="Введите название новости" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Найти</button>
        <a class="btn btn-outline-danger" href="{{ route('news.index') }}" role="button">Отменить</a>
    </form>
</div>
