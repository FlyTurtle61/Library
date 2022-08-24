<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" enctype="multipart/form-data" action="{{ route('assistant.updatePublisher') }}" method="post">
                            <input type="hidden" name='publisher_id' value="{{ $publisher->publisher_id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="publisher-adi-icon">Yayınevi ID
                                                @error("publisher_id")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="publisher_id" readonly value="{{ $publisher->publisher_id }}"
                                                    class="form-control" placeholder="Yazar ID giriniz" id="publisher-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Yayınevi Resmi
                                            </label>
                                            <div class="position-relative">
                                                    <img
                                                    src="{{ str_replace('public', '/storage', $publisher->publisher_img) }}" width="80"
                                                    height="100" class="img img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="publisher-name-icon">Yayınevi Adı
                                                @error("publisher_name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="publisher_name" type="text" value="{{ $publisher->publisher_name }}"
                                                    class="form-control" placeholder="Yayınevi adı giriniz"
                                                    id="publisher-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="phone-icon">Telefonu
                                                @error("phone")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="phone" type="text" value="{{ $publisher->phone }}"
                                                    class="form-control" placeholder="Yayınevinin telefon numarasını giriniz"
                                                    id="phone-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="publisher-email-icon">Yayınevi E-maili
                                                @error("email")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="email" type="email" value="{{ $publisher->email }}"
                                                    class="form-control" placeholder="Yayınevi emaili giriniz"
                                                    id="publisher-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="publisher-name-icon">Yayınevi Adresi
                                                @error("address")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="address" type="text" value="{{ $publisher->address }}"
                                                    class="form-control" placeholder="Yayınevi adresi giriniz"
                                                    id="publisher-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-house"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" container">
                                        <div class="d-flex row  col-12">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>
                                        </div>
                                        <div class="d-flex row  col-12">
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        <div class="d-flex row col-12">
                                            <button onclick="$('#deletePublisherForm').submit();" type="button" class="btn btn-danger me-1 mb-1">Sil</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<form method="post" action="{{ route('assistant.deletePublisher',$publisher->publisher_id) }}" id="deletePublisherForm">
    @method("delete")
    @csrf
</form>
