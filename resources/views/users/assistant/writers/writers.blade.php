<div class="col-12">
    <div class="card">

        <div class="card-body">
            <div class="btn-group">
                <button data-bs-toggle="modal" data-bs-target="#addWriterModal" class="btn btn-info m-2">Yeni Yazar Ekle
                    +</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="user-select: none;">Yazar Adı</th>
                            <th style="user-select: none;">Yaşı</th>
                            <th style="user-select: none;">Düzenle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($writers as $val)
                            <tr>
                                <td style="user-select: none; cursor: pointer;">{{ $val->writer_name }}</td>
                                <td style="user-select: none; cursor: pointer;">{{ $val->writer_birthyear }}</td>
                                <td>
                                    <a href="{{ route('assistant.writer', $val->id) }}"
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

<div class="modal" id="addWriterkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Yazar Ekle</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="addWriterForm" method="post" action="{{ route('assistant.addWriter') }}">
                    @csrf

                    <div class="form-group">
                        <label>Yazarın Adı
                            @error('writer_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="writer_name" placeholder="Yazarın adı giriniz"
                            value="{{ old('writer_name') }}" />
                    </div>
                    <div class="form-group">
                        <label>Yazarın Yaşı
                            @error('writer_birthyear')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="writer_birthyear" placeholder="Yazarın doğum yılını giriniz"
                            value="{{ old('writer_birthyear') }}" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kapat</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" onclick="$('#addWriterForm').submit();">
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
            $("#addWriterModal").modal("show");
        @endif
    }
</script>
