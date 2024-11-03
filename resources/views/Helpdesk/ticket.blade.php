<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark"
            style="background: rgb(0,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="#">
                    <div class="sidebar-brand-icon rotate-n-15" style="transform: rotate(0deg);"><i
                            class="icon ion-connection-bars"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ClIENTcONNECT <br>CRM</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index.index') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em"
                                fill="currentColor" style="font-size: 25px;margin-right: 10px;">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                            </svg><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('customer.customers') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em"
                                fill="currentColor" style="font-size: 25px;margin-right: 10px;">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z">
                                </path>
                            </svg><span>Customers</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('log.logs') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-receipt"
                                style="font-size: 25px;margin-right: 10px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                </path>
                            </svg><span>Logs</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('helpdesk.helpdesk') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1em"
                                viewBox="0 0 24 24" width="1em" fill="currentColor"
                                style="font-size: 25px;margin-right: 10px;">
                                <g>
                                    <rect fill="none" height="24" width="24"></rect>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M21,12.22C21,6.73,16.74,3,12,3c-4.69,0-9,3.65-9,9.28C2.4,12.62,2,13.26,2,14v2c0,1.1,0.9,2,2,2h1v-6.1 c0-3.87,3.13-7,7-7s7,3.13,7,7V19h-8v2h8c1.1,0,2-0.9,2-2v-1.22c0.59-0.31,1-0.92,1-1.64v-2.3C22,13.14,21.59,12.53,21,12.22z">
                                        </path>
                                        <circle cx="9" cy="13" r="1"></circle>
                                        <circle cx="15" cy="13" r="1"></circle>
                                        <path
                                            d="M18,11.03C17.52,8.18,15.04,6,12.05,6c-3.03,0-6.29,2.51-6.03,6.45c2.47-1.01,4.33-3.21,4.86-5.89 C12.19,9.19,14.88,11,18,11.03z">
                                        </path>
                                    </g>
                                </g>
                            </svg><span>Helpdesk</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar"
                    style="background: rgb(0,0,0) !important;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">{{ $user->name }}</span><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16"
                                            class="bi bi-person" style="font-size: 20px;">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z">
                                            </path>
                                        </svg></a>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item"
                                            href="{{ route('user.profile', ['user' => $user->id]) }}"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('user.logout') }}" method="post">
                                            @csrf
                                            <button class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</button>

                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete</h4><button class="btn-close" type="button"
                                    aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this ticket?</p>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button"
                                    data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('ticket.delete') }}" method="POST">
                                    @csrf
                                    <input type="text" name="ids[]" value="{{ $ticket->id }}" hidden>
                                    <button class="btn btn-primary" type="submit"
                                        style="background: var(--bs-danger);border-width: 0px;">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session()->has('alert'))
                    @if (session('alert') === 'update')
                        <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close"
                                type="button" aria-label="Close"
                                data-bs-dismiss="alert"></button><span><strong>Ticket
                                    status updated</strong></span></div>
                    @endif
                @endif
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xxl-6">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0) !important;">Ticket
                                        Info</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">
                                                Requester</h5>
                                            <p>{{ $ticket->customer->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">Title
                                            </h5>
                                            <p>{{ $ticket->title }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">
                                                Assigned To</h5>
                                            <p>{{ $ticket->user->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">Status
                                            </h5>
                                            @if ($ticket->status === 'Open')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-form-invalid-color);border-width: 0px;">Open</button>
                                            @elseif ($ticket->status === 'In Progress')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">In
                                                    Progress</button>
                                            @elseif ($ticket->status === 'Resolved')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-blue);border-width: 0px;">Resolved</button>
                                            @elseif ($ticket->status === 'Closed')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-dark);border-width: 0px;">Closed</button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">
                                                Priority</h5>
                                            @if ($ticket->priority === 'Low')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-success);border-width: 0px;">Low</button>
                                            @elseif ($ticket->priority === 'Medium')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">Medium</button>
                                            @elseif ($ticket->priority === 'High')
                                                <button class="btn btn-primary" type="button"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-danger);border-width: 0px;">High</button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px;">Created
                                                At</h5>
                                            <p>{{ $ticket->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xxl-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="text-primary fw-bold m-0" style="color: rgb(0,0,0)!important;">
                                                Description&nbsp;</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $ticket->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="text-primary fw-bold m-0" style="color: rgb(0,0,0)!important;">
                                                Update Status</h6>
                                        </div>
                                        <div class="card-body">

                                            <form style="display: inline" action="{{ route('ticket.update', ['ticket' => $ticket->id]) }}"
                                                method="get">
                                                <input type="text" name="status" value="Open" hidden>
                                                <button class="btn btn-primary" type="submit"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-form-invalid-color);border-width: 0px;margin-right: 10px;margin-bottom: 10px;">Open</button>
                                            </form>

                                            <form style="display: inline" action="{{ route('ticket.update', ['ticket' => $ticket->id]) }}"
                                                method="get">
                                                <input type="text" name="status" value="In Progress" hidden>
                                                <button class="btn btn-primary" type="submit"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-warning);border-width: 0px;margin-right: 10px;margin-bottom: 10px;">In
                                                    Progress</button>
                                            </form>

                                            <form style="display: inline" action="{{ route('ticket.update', ['ticket' => $ticket->id]) }}"
                                                method="get">
                                                <input type="text" name="status" value="Resolved" hidden>
                                                <button class="btn btn-primary" type="submit"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-blue);border-width: 0px;margin-right: 10px;margin-bottom: 10px;">Resolved</button>
                                            </form>

                                            <form style="display: inline" action="{{ route('ticket.update', ['ticket' => $ticket->id]) }}"
                                                method="get">
                                                <input type="text" name="status" value="Closed" hidden>
                                                <button class="btn btn-primary" type="submit"
                                                    style="font-size: 14px;font-weight: bold;background: var(--bs-dark);border-width: 0px;margin-bottom: 10px;margin-right: 10px;">Closed</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button"
                                style="background: var(--bs-danger);border-width: 0px;" data-bs-toggle="modal"
                                data-bs-target="#modal-delete">Delete Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Zyn Edge Sdn Bhd 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
