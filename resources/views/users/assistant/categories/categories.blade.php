<div class="col-12">
    <div class="card">

        <div class="card-body">
            <div class="btn-group">
                <button data-bs-toggle="modal" data-bs-target="#addCategoryModal" class="btn btn-info m-2">Yeni Kategori Ekle
                    +</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="user-select: none;">Kategori ID</th>
                            <th style="user-select: none;">Kategori Resmi</th>
                            <th style="user-select: none;">Kategori Adı</th>
                            <th style="user-select: none;">Düzenle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $val)
                            <tr>
                                <td style="user-select: none; cursor: pointer;">{{ $val->id }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->category_img }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->category_name }}</td>
                                <td>
                                    <a href="{{ route('assistant.category', $val->id) }}"
                                        class="btn btn-primary">Göster</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Kategori Ekle</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="post" action="{{ route('assistant.addCategory') }}">
                    @csrf

                    <div class="form-group">
                        <label>Kategori Resmi
                            @error('category_img')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input type="file" class="form-control" name="category_img" placeholder="Fotoğraf yükleyiniz"
                            value="{{ old('category_img') }}" />
                    </div>
                    <div class="form-group">
                        <label>Kategori Adı
                            @error('category_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" type="text" name="category_name" placeholder="Kategori adı giriniz"
                            value="{{ old('category_name') }}" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kapat</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" onclick="$('#addCategoryForm').submit();">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kaydet</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {

        @if ($errors->any())
            $("#addCategoryModal").modal("show");
        @endif
    }
</script>
