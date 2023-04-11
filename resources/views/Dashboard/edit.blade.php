<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
        <form class="data" action="/Update/{{ $dataTicket->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        
            <div class="form-group mb-3">
                <label for="data-name">name</label>
                <input type="text" name="data-name" class="form-control" id="data-name" value="{{ $dataTicket->name }}">
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Bisnis Unit</label>
                <select class="form-control" name="bisnisunit" id="bisnisunit" aria-label="Default Select Example">
                    <option selected>{{ $dataTicket->bisnisunit }}</option>
                    <option value="SJB">SJB</option>
                    <option value="LBG">LBG</option>
                </select>
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Divisi</label>
                <select name="divisi" id="divisi" aria-label="Default Select Example">
                    <option selected>{{ $dataTicket->divisi }}</option>
                    <option value="ICT">ICT</option>
                    <option value="FNA">FNA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data-alamatip">Alamat IP</label>
                <input type="text" name="data-alamatip" value="{{ $dataTicket->alamatip }}">
            </div>
            <div class="form-group">
                <label for="data-extention">Extention</label>
                <input type="text" name="data-extention" value="{{ $dataTicket->extention }}">
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Bisnis Unit</label>
                <select name="jenis" id="jenis" aria-label="Default Select Example">
                    <option selected>{{ $dataTicket->jenis }}</option>
                    <option value="request">REQUEST</option>
                    <option value="complain">COMPLAIN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data-kategori">Kategori</label>
                <input type="text" name="data-kategori" value="{{ $dataTicket->kategori }}">
            </div>
            <div class="form-group">
                <label for="data-deskripsi">Deskripsi</label>
                <input type="text" name="data-deskripsi" value="{{ $dataTicket->deskripsi }}">
            </div>
            <div class="form-group">
                <button type="submit"> Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>