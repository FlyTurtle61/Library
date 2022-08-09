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
                                                @error("image")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="image" type="file" value="{{ $category->image }}"
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
                                            <label for="writer-email-icon">Kategori Adı
                                                @error("name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="name" type="name" value="{{ $category->name }}"
                                                    class="form-control" placeholder="Yazar emaili giriniz"
                                                    id="writer-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
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
