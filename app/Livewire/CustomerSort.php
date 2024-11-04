<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerSort extends Component
{

    public $sortOption = 'Date (Latest to Oldest)'; // Default sorting option

    protected $queryString = ['sortOption'];

    public function render()
    {
        $customers = $this->getSortedCustomers();

        return view('livewire.customer-sort', [
            'customers' => $customers,
        ]);
    }

    public function setSortOption($value)
    {
        $this->sortOption = $value;
    }

    private function getSortedCustomers()
    {
        switch ($this->sortOption) {
            case 'Date (Latest to Oldest)':
                return Customer::orderBy('created_at', 'desc')->get();
            case 'Date (Oldest to Latest)':
                return Customer::orderBy('created_at', 'asc')->get();
            case 'Name | Alphabetically (A to Z)':
                return Customer::orderBy('name', 'asc')->get();
            case 'Name | Alphabetically (Z to A)':
                return Customer::orderBy('name', 'desc')->get();
            default:
                return Customer::all();
        }
    }
}
