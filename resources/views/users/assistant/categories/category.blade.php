<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('assistant.updateCategory') }}" method="post">
                            <input type="hidden" name='category_id' value="{{ $category->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-adi-icon">Kategori ID
                                                @error("id")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="id" value="{{ $category->id }}"
                                                    class="form-control" placeholder="Yazar ID giriniz" id="writer-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-name-icon">Kategori Resmi
                                                @error("category_img")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="category_img" type="file" value="{{ $category->category_img }}"
                                                    class="form-control" placeholder="Kategori resmi seçiniz"
                                                    id="writer-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-file-arrow-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="kitap-turu-icon">Kitap Türü
                                                @error('kitap_turu')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <div class="input-group mb-3">
                                                    <select class="form-select form-control" id="inputGroupSelect01"
                                                        class="form-control" name="category_name"
                                                        placeholder="Kitap türünü giriniz">
                                                        <option selected value="{{ $category->category_name }}">
                                                            {{ $category->category_name }}</option>
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
                                            <button onclick="$('#deleteCategoryForm').submit();" type="button" class="btn btn-danger me-1 mb-1">Sil</button>
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

<form method="post" action="{{ route('assistant.deleteCategory',$category->id) }}" id="deleteCategoryForm">
    @method("delete")
    @csrf
</form>

{{-- @foreach ($category as $value )
<option value="$value->category_name">{{ $value->category_name }}</option>

@endforeach --}}
