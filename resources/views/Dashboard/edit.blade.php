<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <div>
        <form class="data" action="{{ url('update/'.$ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group mb-3">
                <label for="data-name">name</label>
                <input type="text" name="data-name" value="{{ $ticket->name }}">
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Bisnis Unit</label>
                <select name="bisnisunit" id="bisnisunit" aria-label="Default Select Example">
                    <option selected>{{ $ticket->bisnisunit }}</option>
                    <option value="SJB">SJB</option>
                    <option value="LBG">LBG</option>
                </select>
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Divisi</label>
                <select name="divisi" id="divisi" aria-label="Default Select Example">
                    <option selected>{{ $ticket->divisi }}</option>
                    <option value="ICT">ICT</option>
                    <option value="FNA">FNA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data-alamatip">Alamat IP</label>
                <input type="text" name="data-alamatip" value="{{ $ticket->alamatip }}">
            </div>
            <div class="form-group">
                <label for="data-extention">Extention</label>
                <input type="text" name="data-extention" value="{{ $ticket->extention }}">
            </div>
            <div class="form-group mb3">
                <label for="data-bisnisunit">Bisnis Unit</label>
                <select name="jenis" id="jenis" aria-label="Default Select Example">
                    <option selected>{{ $ticket->jenis }}</option>
                    <option value="request">REQUEST</option>
                    <option value="complain">COMPLAIN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data-kategori">Kategori</label>
                <input type="text" name="data-kategori" value="{{ $ticket->kategori }}">
            </div>
            <div class="form-group">
                <label for="data-deskripsi">Deskripsi</label>
                <input type="text" name="data-deskripsi" value="{{ $ticket->deskripsi }}">
            </div>
            <div class="form-group">
                <button type="submit"> Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>