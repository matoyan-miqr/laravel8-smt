<?php

namespace App\Http\Livewire;

use App\Models\InvAbItem;
use Livewire\Component;

class Inventory extends Component
{
    public $invnr;
    public $andat;
    public $location_id;
    public $kp;
    public $gart;
    public $gtyp;
    public $gname;
    public $sn;
    public $notes;
    public $path_to_rg;
    public $ausdat;
    public $ausgrund;


    public function render()
    {
        return view('livewire.inventory.index');
    }
}
