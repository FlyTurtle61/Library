<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" enctype="multipart/form-data" action="{{ route('assistant.updateWriter') }}" method="post">
                            <input type="hidden" name='writer_id' value="{{ $writer->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-adi-icon">Yazar ID
                                                @error("id")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="id" value="{{ $writer->id }}"
                                                    class="form-control" placeholder="Yazar ID giriniz" id="writer-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Yazar Resmi
                                                @error('book_img')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                    <img
                                                    src="{{ str_replace('public', '/storage', $writer->writer_img) }}" width="80"
                                                    height="100" class="img img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-name-icon">Yazar Adı
                                                @error("writer_name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="writer_name" type="text" value="{{ $writer->writer_name }}"
                                                    class="form-control" placeholder="Yazar adı giriniz"
                                                    id="writer-name-icon">
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
                                                <input name="phone" type="text" value="{{ $writer->phone }}"
                                                    class="form-control" placeholder="Yazarın telefon numarasını giriniz"
                                                    id="phone-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-email-icon">Yazar E-maili
                                                @error("email")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="email" type="email" value="{{ $writer->email }}"
                                                    class="form-control" placeholder="Yazar emaili giriniz"
                                                    id="writer-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-name-icon">Yazar Doğum Yılı
                                                @error("birth_year")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="birth_year" type="text" value="{{ $writer->birth_year }}"
                                                    class="form-control" placeholder="Yazar doğum yılını giriniz"
                                                    id="writer-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" container">
                                        <div class="d-flex row  col-12 m-2">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>
                                        </div>
                                        <div class="d-flex row  col-12 m-2">
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        <div class="d-flex row col-12 m-2">
                                            <button onclick="$('#deleteWriterForm').submit();" type="button" class="btn btn-danger me-1 mb-1">Sil</button>
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

<form method="post" action="{{ route('assistant.deleteWriter',$writer->id) }}" id="deleteWriterForm">
    @method("delete")
    @csrf
</form>
