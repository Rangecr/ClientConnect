<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0)!important;">Customers Info
        </p>
        <p style="margin-bottom: 0px;">Filtered by: {{ $sortOption }}</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button" style="background: rgb(0,0,0);">Filter By</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" wire:click="setSortOption('Date (Latest to Oldest)')">Date (Latest to Oldest)</a>
                        <a class="dropdown-item" href="#" wire:click="setSortOption('Date (Oldest to Latest)')">Date (Oldest to Latest)</a>
                        <a class="dropdown-item" href="#" wire:click="setSortOption('Name | Alphabetically (A to Z)')">Name | Alphabetically (A to Z)</a>
                        <a class="dropdown-item" href="#" wire:click="setSortOption('Name | Alphabetically (Z to A)')">Name | Alphabetically (Z to A)</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input
                            type="search" class="form-control form-control-sm" aria-controls="dataTable"
                            placeholder="Search"></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <form id="delete" action="{{ route('customer.delete') }}" method="POST">
                        @csrf
                        @foreach ($customers as $customer)
                            <tr>
                                <td style="text-align: center;"><input name="ids[]" value="{{ $customer->id }}"
                                        type="checkbox"></td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->p_numb }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td style="font-style: italic;text-decoration:  underline;"><a
                                        href="{{ route('customer.customer', ['customer' => $customer->id]) }}"
                                        class="btn btn-primary btn-view-cust"
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
