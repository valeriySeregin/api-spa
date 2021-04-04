<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Фильтры
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Фильтры новостей</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Введите начало периода" aria-label="Search" name="begin_date">
            <input class="form-control me-2" type="search" placeholder="Введите конец периода" aria-label="Search" name="end_date">
        </form>
    </div>
    <div class="modal-footer">
        <a class="btn btn-outline-danger" href="{{ route('news.index') }}" role="button">Отменить</a>
        <button type="sumbit" class="btn btn-primary">Применить</button>
    </div>
    </div>
</div>
</div>
