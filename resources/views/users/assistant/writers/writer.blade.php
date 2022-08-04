<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('assistant.updateWriter') }}" method="post">
                            <input type="hidden" name='writer_id' value="{{ $writer->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
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
                                            <label for="writer-adi-icon">Yazar ID
                                                @error("writer_name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="writer_id" value="{{ $writer->writer_id }}"
                                                    class="form-control" placeholder="Yazar ID giriniz" id="writer-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
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
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('assistant.updateBook') }}" method="post">
                            <input type="hidden" name='book_id' value="{{ $book->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Kitap Adı
                                                @error("book_name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="book_name" type="text" value="{{ $book->book_name }}"
                                                    class="form-control" placeholder="Kitap adı giriniz"
                                                    id="book-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="yazar-adi-icon">Yazar Adı
                                                @error("yazar_adi")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="yazar_adi" value="{{ $book->yazar_adi }}"
                                                    class="form-control" placeholder="Yazar adı giriniz" id="yazar-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="yazar-adi-icon">Basım Yılı
                                                @error("basim_yili")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="basim_yili" value="{{ $book->basim_yili }}"
                                                    class="form-control" placeholder="Basım yılı giriniz" id="basim-yili-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="kitap-turu-icon">Kitap Türü
                                                @error("kitap_turu")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <div class="input-group mb-3">
                                                    <select class="form-select form-control" id="inputGroupSelect01" class="form-control" name="kitap_turu" placeholder="Kitap türünü giriniz">
                                                      <option selected value="{{ $book->kitap_turu }}">{{ $book->kitap_turu }}</option>
                                                      <option value="Dram">Dram</option>
                                                      <option value="Macera">Macera</option>
                                                      <option value="Aksiyon">Aksiyon</option>
                                                      <option value="Polisiye">Polisiye</option>
                                                      <option value="Korku">Korku</option>
                                                      <option value="Fantastik">Fantastik</option>
                                                      <option value="Bilim Kurgu">Bilim Kurgu</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-control-icon">
                                                    <i class="bi bi-list-ul"></i>
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
                                            <button onclick="$('#deleteBookForm').submit();" type="button" class="btn btn-danger me-1 mb-1">Sil</button>
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

<script>
    window.onload = function() {
        $("#role-id-icon").val('{{ $book->role }}');
    }
</script>

<form method="post" action="{{ route('assistant.deleteBook',$book->id) }}" id="deleteBookForm">
    @method("delete")
    @csrf
</form>
