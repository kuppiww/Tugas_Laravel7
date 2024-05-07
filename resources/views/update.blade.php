<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .container {
        padding: auto;
        width: 40%;
        background-color: #87CEEB;
    }

    .btn {
        margin-left: 40%;
    }
</style>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Update Produk</h2>
        <form action="{{ route('listproduk.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" value="{{ $product->gambar }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $product->stok }}">
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" value="{{ $product->berat }}">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select class="form-select" id="kondisi" name="kondisi">
                    <option value="Baru" {{ $product->kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                    <option value="Bekas" {{ $product->kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $product->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>