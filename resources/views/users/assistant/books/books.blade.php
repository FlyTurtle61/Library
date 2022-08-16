<div class="col-12">
    <div class="card">

        <div class="card-body">
            <div class="btn-group">
                <button data-bs-toggle="modal" data-bs-target="#addBookModal" class="btn btn-info m-2">Yeni Kitap Ekle
                    +</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="user-select: none;">Kitap ID</th>
                            <th style="user-select: none;">Kitap Resmi</th>
                            <th style="user-select: none;">Kitap Adı</th>
                            <th style="user-select: none;">Yazar</th>
                            <th style="user-select: none;">Yayınevi</th>
                            <th style="user-select: none;">Kategori</th>
                            <th style="user-select: none;">Basım Yılı</th>
                            <th style="user-select: none;">Sayfa Sayısı</th>
                            <th style="user-select: none;">Cilt Sayısı</th>
                            <th style="user-select: none;">Düzenle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $val)
                            <tr>
                                <td style="user-select: none; cursor: pointer;">{{ $val->id }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->book_img }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->book_name }}</td>
                                <td style="user-select: none; cursor: pointer;"></td>
                                <td style="user-select: none; cursor: pointer;"></td>
                                <td style="user-select: none; cursor: pointer;"></td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->publication_year }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->page_number }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->volume_number }}</td>
                                <td>
                                    <a href="{{ route('assistant.book', $val->id) }}" class="btn btn-primary">Göster</a>
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

<div class="modal" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Kitap Ekle</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="addBookForm" method="post" action="{{ route('assistant.addBook') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kitabın Resmi
                            @error('book_img')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input type="file" class="form-control" name="book_img" placeholder="Kitap resmi yükleyiniz"
                            value="{{ old('book_img') }}" />
                    </div>
                    <div class="form-group">
                        <label>Kitabın Adı
                            @error('book_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="book_name" placeholder="Kitap adı giriniz"
                            value="{{ old('book_name') }}" />
                    </div>
{{--                     <div class="form-group">
                        <label>Kitabın Yazarı
                            @error('writer_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01" class="form-control" name="writer_name"
                                placeholder="Kitap türünü giriniz" value="{{ old('writer_name') }}">
                                <option selected>Yazar Adı Seçiniz</option>
                                @foreach ($writers as $val)
                                    <option value="">{{ $val->writer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kitabın Türü
                            @error('category_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01" class="form-control" name="category_name "
                                placeholder="Kitap türünü giriniz" value="{{ old('category_name') }}">
                                <option selected>Kitap türü Seçiniz</option>
                                @foreach ($categories as $val)
                                    <option value="">{{ $val->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Yayınevi
                            @error('publisher_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01" class="form-control" name="publisher_name"
                                placeholder="Kitap türünü giriniz" value="{{ old('publisher_name') }}">
                                <option selected>Yayınevi Seçiniz</option>
                                @foreach ($publishers as $val)
                                    <option value="">{{ $val->publisher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label>Kitabın Basım Yılı
                            @error('publication_year')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="publication_year" placeholder="Kitap basım yılını giriniz"
                            value="{{ old('publication_year') }}" />
                    </div>
                    <div class="form-group">
                        <label>Kitabın Cilt Sayısı
                            @error('volume_number')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="volume_number" placeholder="Kitap cilt numarasını giriniz"
                            value="{{ old('volume_number') }}" />
                    </div>
                    <div class="form-group">
                        <label>Kitabın Sayfa Sayısı
                            @error('page_number')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="page_number" placeholder="Kitabın sayfa sayısını giriniz"
                            value="{{ old('page_number') }}" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kapat</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" onclick="$('#addBookForm').submit();">
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
            $("#addBookModal").modal("show");
        @endif
    }
</script>


