<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class TicketSort extends Component
{

    public $sortOption = 'Date (Latest to Oldest)';

    public $searchTerm = '';

    protected $queryString = ['sortOption'];

    public function render()
    {
        //dd($this->searchTerm);
        $tickets = $this->getSortedTickets();

        return view('livewire.ticket-sort', compact('tickets'));
    }

    public function setSortOption($value)
    {
        $this->sortOption = $value;
    }

    private function getSortedTickets()
    {

        $query = Ticket::query();

        if (!empty($this->searchTerm)) {
            $query->where('title', 'like', '%' . $this->searchTerm . '%');
        }

        switch ($this->sortOption) {
            case 'Date (Latest to Oldest)':
                $query->orderBy('created_at', 'desc');
                break;
            case 'Date (Oldest to Latest)':
                $query->orderBy('created_at', 'asc');
                break;
            case 'Title | Alphabetically (A to Z)':
                $query->orderBy('title', 'asc');
                break;
            case 'Title | Alphabetically (Z to A)':
                $query->orderBy('title', 'desc');
                break;
        }

        return $query->get();
    }


}
