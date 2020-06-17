<?php

namespace App\Http\Livewire\Paket;

use App\Paket;
use Livewire\Component;
use Livewire\WithPagination;

class PaketIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $dataSearch = Paket::where('nmpaket', 'like', $searchTerm)->where('wilayah_id', 3)->paginate(10);
        //dd($dataSearch);
        //$datapaket = Paket::paginate(10);
        return view('livewire.paket.paket-index', [
            'datapaket' => $this->search === null ? Paket::where('wilayah_id', 3)->paginate(10) : $dataSearch
        ]);
    }
}
