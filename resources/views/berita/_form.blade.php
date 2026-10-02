@php($berita ??= null)

<div class="mb-3">
    <label for="judul" class="form-label fw-semibold">Judul</label>
    <input type="text" name="judul" id="judul" class="form-control"
           value="{{ old('judul', $berita?->judul) }}" placeholder="Judul berita...">
    @error('judul') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label for="kategori" class="form-label fw-semibold">Kategori</label>
        <select name="kategori" id="kategori" class="form-select">
            <option value="">-- Pilih Kategori --</option>
            @foreach (App\Models\Berita::KATEGORI as $k)
                <option value="{{ $k }}" @selected(old('kategori', $berita?->kategori) == $k)>{{ $k }}</option>
            @endforeach
        </select>
        @error('kategori') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control"
               value="{{ old('tanggal', ($berita?->tanggal ?? now())->format('Y-m-d')) }}">
        @error('tanggal') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="penulis" class="form-label fw-semibold">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control"
               value="{{ old('penulis', $berita?->penulis ?? 'Admin') }}">
        @error('penulis') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>
</div>

<div class="mb-3">
    <label for="gambar" class="form-label fw-semibold">Gambar</label>
    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
    @if ($berita?->gambar)
        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
    @endif
    @error('gambar') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="isi" class="form-label fw-semibold">Isi Berita</label>
    <textarea name="isi" id="isi" rows="8" class="form-control"
              placeholder="Tulis isi berita di sini...">{{ old('isi', $berita?->isi) }}</textarea>
    @error('isi') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="tags" class="form-label fw-semibold">Tags</label>
    <input type="text" name="tags" id="tags" class="form-control"
           value="{{ old('tags', $berita?->tags) }}" placeholder="Pisahkan dengan koma, contoh: desa,jalatrang,voli">
    @error('tags') <div class="text-danger small">{{ $message }}</div> @enderror
</div>
