<div class="col-12">
    <div class="card">

        <div class="card-body">
            <div class="btn-group">
                <button data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-info m-2">Yeni Kullanıcı Ekle +</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Telefon</th>
                            <th>Adres</th>
                            <th>e-posta</th>
                            <th>Düzenle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $val)
                            <tr>
                                <td>{{ $val->first_name }}</td>
                                <td>{{ $val->last_name }}</td>
                                <td>{{ $val->phone }}</td>
                                <td>{{ $val->address }}</td>
                                <td>{{ $val->email }}</td>
                                <td>
                                    <a href="{{ route('admin.user', $val->id) }}" class="btn btn-primary">
                                        Göster
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Kullanıcı Ekle</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUserForm" method="post" action="{{ route('admin.addUser') }}">
                    @csrf

                    <div class="form-group">
                        <label>Adı
                            @error('first_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="first_name" placeholder="Adı giriniz"
                            value="{{ old('first_name') }}" />
                    </div>
                    <div class="form-group">
                        <label>Soyadı
                            @error('last_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="last_name" placeholder="Soyadı giriniz"
                            value="{{ old('last_name') }}" />
                    </div>
                    <div class="form-group">
                        <label>Telefon
                            @error('phone')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="phone" placeholder="Telefon numarasını başında 0 olmadan giriniz"
                            value="{{ old('phone') }}" />
                    </div>
                    <div class="form-group">
                        <label>Adresi
                            @error('address')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>
                        <input class="form-control" name="address" placeholder="Adresi giriniz"
                            value="{{ old('address') }}" />
                    </div>

                    <div class="form-group">
                        <label>E-Posta
                            @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </label>

                        <input class="form-control" name="email" placeholder="e-posta giriniz"
                            value="{{ old('email') }}" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kapat</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" onclick="$('#addUserForm').submit();">
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
            $("#addUserModal").modal("show");
        @endif
    }
</script>
