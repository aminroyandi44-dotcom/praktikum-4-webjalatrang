<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function index(Request $request): View
    {
        $beritas = Berita::query()
            ->when($request->q, function ($query, $kata) {
                $query->where(function ($query) use ($kata) {
                    $query->where('judul', 'like', "%{$kata}%")
                        ->orWhere('tags', 'like', "%{$kata}%");
                });
            })
            ->when($request->kategori, function ($query, $kategori) {
                $query->where('kategori', $kategori);
            })
            ->latest('id')
            ->paginate(12)
            ->withQueryString();

        return view('berita.index', compact('beritas'));
    }

    public function create(): View
    {
        return view('berita.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validasi($request);
        $data = $this->simpanGambar($request, $data);

        Berita::create($data);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show(Berita $berita): View
    {
        $berita->increment('dilihat');

        $terkait = Berita::where('id', '!=', $berita->id)
            ->latest('id')
            ->take(5)
            ->get();

        return view('berita.show', compact('berita', 'terkait'));
    }

    public function edit(Berita $berita): View
    {
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita): RedirectResponse
    {
        $data = $this->validasi($request);
        $data = $this->simpanGambar($request, $data);

        $berita->update($data);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $berita): RedirectResponse
    {
        $berita->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }

    /**
     * @return array<string, mixed>
     */
    private function validasi(Request $request): array
    {
        return $request->validate([
            'judul' => 'required|max:255',
            'kategori' => ['required', Rule::in(Berita::KATEGORI)],
            'isi' => 'required|min:10',
            'penulis' => 'required|max:100',
            'tanggal' => 'required|date',
            'tags' => 'nullable|max:255',
            'gambar' => 'nullable|image|max:2048',
        ]);
    }

    /**
     * Pindahkan file gambar ke public/images/berita dan simpan nama filenya saja.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    private function simpanGambar(Request $request, array $data): array
    {
        unset($data['gambar']);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama = time().'-'.$file->hashName();
            $file->move(public_path('images/berita'), $nama);
            $data['gambar'] = $nama;
        }

        return $data;
    }
}
