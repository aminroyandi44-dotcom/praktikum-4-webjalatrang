<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    public const KATEGORI = [
        'ekonomi',
        'keuangan',
        'kunjungan',
        'Olahraga',
        'pembangunan',
        'pemuda',
        'Pendidikan',
        'potensi',
        'Prestasi dan Apresiasi',
        'tidak memiliki kategori',
    ];

    protected $fillable = ['judul', 'slug', 'kategori', 'gambar', 'isi', 'tags', 'tanggal', 'dilihat', 'penulis'];

    protected $casts = [
        'tanggal' => 'date',
    ];

    protected static function booted(): void
    {
        static::creating(function (Berita $berita) {
            $berita->slug ??= static::slugUnik($berita->judul);
            $berita->tanggal ??= now();
        });
    }

    public static function slugUnik(?string $judul): string
    {
        $slug = $asli = Str::slug((string) $judul);
        $i = 2;

        while (static::where('slug', $slug)->exists()) {
            $slug = $asli.'-'.$i++;
        }

        return $slug;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getGambarUrlAttribute(): string
    {
        return asset($this->gambar ? 'images/berita/'.$this->gambar : 'images/no_image.jpg');
    }

    public function getDaftarTagAttribute(): array
    {
        return array_values(array_filter(array_map('trim', explode(',', (string) $this->tags))));
    }

    public function getRingkasanAttribute(): string
    {
        return Str::limit(trim(html_entity_decode(strip_tags($this->isi))), 90);
    }
}
