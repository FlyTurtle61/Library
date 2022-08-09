<div class="col-12">
    <div class="card">

        <div class="card-body">
            <div class="btn-group">
                <button data-bs-toggle="modal" data-bs-target="#addBookModal" class="btn btn-info m-2">Yeni Kitap Ekle +</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="user-select: none;">Kitap ID</th>
                            <th style="user-select: none;">Kitap Adı</th>
                            <th style="user-select: none;">Yazar Adı</th>
                            <th style="user-select: none;">Kitap Türü</th>
                            <th style="user-select: none;">Basım Yılı</th>
                            <th style="user-select: none;">Düzenle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $val)
                            <tr>
                                <td style="user-select: none; cursor: pointer;">{{ $val->id }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->book_name }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->yazar_adi }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->kitap_turu }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->basim_yili }}</td>
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
                        <label>Kitabın Adı
                            @error('book_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="book_name" placeholder="Kitap adı giriniz"
                            value="{{ old('book_name') }}" />
                    </div>
                    <div class="form-group">
                        <label>Kitabın Türü
                            @error('kitap_turu')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01" class="form-control" name="kitap_turu" placeholder="Kitap türünü giriniz"
                            value="{{ old('kitap_turu') }}">
                              <option selected>Kitap türü Seçiniz</option>
                              <option value="Dram">Dram</option>
                              <option value="Macera">Macera</option>
                              <option value="Aksiyon">Aksiyon</option>
                              <option value="Polisiye">Polisiye</option>
                              <option value="Korku">Korku</option>
                              <option value="Korku">Korku</option>
                              <option value="Fantastik">Fantastik</option>
                              <option value="Bilim Kurgu">Bilim Kurgu</option>
                            </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label>Yazarın Adı
                            @error('yazar_adi')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="yazar_adi" placeholder="Yazarın adını giriniz"
                            value="{{ old('yazar_adi') }}" />
                    </div>
                    <div class="form-group">
                        <label>Basım Yılı
                            @error('basim_yili')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="basim_yili" type="number" min="1900" max="2099" step="1" placeholder="Basım yılını giriniz" value="{{ old('basim_yili') }}" />
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
