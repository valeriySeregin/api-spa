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
        <form class="d-flex" action="{{ route('newsByDates') }}" method="GET">
            <div class="modal-body">
                <input class="form-control me-2" type="search" placeholder="Период с..." aria-label="Search" name="begin_date">
                <input class="form-control me-2" type="search" placeholder="Период по..." aria-label="Search" name="end_date">
                <input class="form-control me-2" type="search" placeholder="Имя автора" aria-label="Search" name="author">
            </div>
            <div class="modal-footer">
                <a class="btn btn-outline-danger" href="{{ route('news.index') }}" role="button">Отменить</a>
                <button type="sumbit" class="btn btn-primary">Применить</button>
            </div>
        </form>
    </div>
</div>
</div>
