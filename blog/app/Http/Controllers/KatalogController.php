<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Journal;
use App\Models\CD;
use App\Models\Newspaper;
use App\Models\FinalYearProject;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan kategori dan sort dari input
        $category = $request->input('category', 'books');
        $sort = $request->input('sort', 'asc');

        // Memilih model sesuai kategori yang dipilih
        switch ($category) {
            case 'books':
                $model = Book::class;
                break;
            case 'journals':
                $model = Journal::class;
                break;
            case 'cds':
                $model = CD::class;
                break;
            case 'newspapers':
                $model = Newspaper::class;
                break;
            case 'final_year_projects':
                $model = FinalYearProject::class;
                break;
            default:
                $model = Book::class;
                break;
        }

        // Mengambil data katalog dengan pengurutan sesuai pilihan
        $catalog = $model::orderBy('judul', $sort)->get();

        // Mengirim data katalog dan input yang dipilih ke view
        return view('catalog.index', [
            'catalog' => $catalog,
            'selectedCategory' => $category,
            'selectedSort' => $sort,
        ]);
    }
}
