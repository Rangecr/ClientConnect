<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerSort extends Component
{

    public $sortOption = 'Date (Latest to Oldest)';

    public $searchTerm = '';

    protected $queryString = ['sortOption'];

    public function render()
    {
        //dd($this->searchTerm);
        $customers = $this->getSortedCustomers();

        return view('livewire.customer-sort', compact('customers'));
    }

    public function setSortOption($value)
    {
        $this->sortOption = $value;
    }

    private function getSortedCustomers()
    {

        $query = Customer::query();

        if (!empty($this->searchTerm)) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        switch ($this->sortOption) {
            case 'Date (Latest to Oldest)':
                $query->orderBy('created_at', 'desc');
                break;
            case 'Date (Oldest to Latest)':
                $query->orderBy('created_at', 'asc');
                break;
            case 'Name | Alphabetically (A to Z)':
                $query->orderBy('name', 'asc');
                break;
            case 'Name | Alphabetically (Z to A)':
                $query->orderBy('name', 'desc');
                break;
        }

        return $query->get();
    }
}
