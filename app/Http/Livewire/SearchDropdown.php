<?php

namespace App\Http\Livewire;

use App\Paket;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $dataSearch = Paket::where('nmpaket', 'like', $searchTerm)->where('wilayah_id', 3)->paginate(10);

        return view('livewire.search-dropdown', [
            'datapaket' => $this->search === null ? Paket::where('wilayah_id', 3)->paginate(10) : $dataSearch
        ]);
    }
}
