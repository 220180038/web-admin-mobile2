<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
    
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Proker
                            <a href='/datapro' class="btn btn-primary float-end">Kembali</a>
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ url('proker/create') }}" method="POST">
                            @csrf
    
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" />
                                @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Tanggal</label>
                                <input type="date" name="jadwal" value="{{ old('jadwal') }}" />
                            </div>
                            <div class="mb-3">
                                <label>ID Bidang</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Tempat</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" />
                            </div>
                            <div class="mb-3">
                                <label>PJ</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="is_active" class="is_active" {{ old('is_active') == true ? 'checked' : '' }}>
                                @error('is_active') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>