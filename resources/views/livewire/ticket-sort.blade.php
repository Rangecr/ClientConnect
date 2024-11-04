<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0)!important;">Tickets Info</p>
        <p style="margin-bottom: 0px;">Filtered by: {{ $sortOption }}</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle"
                    aria-expanded="false" data-bs-toggle="dropdown" type="button"
                    style="background: rgb(0,0,0);">Filter By</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" wire:click="setSortOption('Date (Latest to Oldest)')">Date
                        (Latest to Oldest)</a>
                    <a class="dropdown-item" href="#"  wire:click="setSortOption('Date (Oldest to Latest)')">Date
                        (Oldest to Latest)</a>
                    <a class="dropdown-item" href="#"  wire:click="setSortOption('Title | Alphabetically (A to Z)')">Title |
                        Alphabetically (A to Z)</a>
                    <a class="dropdown-item" href="#"  wire:click="setSortOption('Title | Alphabetically (Z to A)')">Title
                            | Alphabetically (Z to A)</a>
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                        class="form-label"><input wire:model.lazy="searchTerm" type="search"
                            class="form-control form-control-sm" aria-controls="dataTable"
                            placeholder="Search"></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid"
            aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <td></td>
                        <th>Requester</th>
                        <th>Title</th>
                        <th>Assigned To</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <form id="delete" action="{{ route('ticket.delete') }}" method="POST">
                        @csrf
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td style="text-align: center;"><input type="checkbox"
                                        name="ids[]" value="{{ $ticket->id }}"></td>

                                <td>{{ $ticket->customer->name }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->user->name }}</td>

                                @if ($ticket->priority === 'Low')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-success);border-width: 0px;">Low</button>
                                    </td>
                                @elseif ($ticket->priority === 'Medium')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">Medium</button>
                                    </td>
                                @elseif ($ticket->priority === 'High')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-danger);border-width: 0px;">High</button>
                                    </td>
                                @endif

                                @if ($ticket->status === 'Open')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-form-invalid-color);border-width: 0px;">Open</button>
                                    </td>
                                @elseif ($ticket->status === 'In Progress')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">In
                                            Progress</button></td>
                                @elseif ($ticket->status === 'Resolved')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-blue);border-width: 0px;">Resolved</button>
                                    </td>
                                @elseif ($ticket->status === 'Closed')
                                    <td><button class="btn btn-primary" type="button"
                                            style="font-size: 10px;font-weight: bold;background: var(--bs-dark);border-width: 0px;">Closed</button>
                                    </td>
                                @endif

                                <td>{{ $ticket->created_at }}</td>
                                <td><a class="btn btn-primary"
                                        href="{{ route('helpdesk.ticket', ['ticket' => $ticket->id]) }}"
                                        style="background: rgba(78,115,223,0);color: rgb(0,0,0);border-width: 0px;font-style: italic;">View
                                        Details</a></td>
                            </tr>
                        @endforeach
                    </form>
                </tbody>
                <tfoot>
                    <tr></tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>