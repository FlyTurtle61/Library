<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<h1>Ajax ile işlemler</h1>

<input id="name" placeholder="Kategori ismi giriniz..">
<button onclick="ekle();">Tabloya ajax ile veri ekle</button>

<script>
    function ekle() {
        var name = $("#name").val();

        $.ajax({
            url: "{{route("kategori.ekle")}}",
            data: {
                kategori: name,
                _token: "{{csrf_token()}}"
            },
            success: function (data) {
                if (data.result) {
                    loadTable(data.kategori_id, name);
                }
            },
            type: "post"
        });
    }

    function loadTable(id, name) {
        var tbl = document.getElementById("catTbl");
        var satir = document.createElement("tr");
        var sutun1 = document.createElement("td");
        var sutun2 = document.createElement("td");

        sutun1.textContent = id;
        sutun2.textContent = name;

        satir.append(sutun1);
        satir.append(sutun2);
        tbl.append(satir);


    }
</script>

<table>
    <thead>
    <tr>
        <td>kategori id</td>
        <td>kategori adı</td>
    </tr>
    </thead>

    <tbody id="catTbl">
    @foreach($kategoriler as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
