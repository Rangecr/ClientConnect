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
                                            class="d-none d-lg-inline me-2 text-gray-600 small">IZZAT
                                            SAIFULLAH</span><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16"
                                            class="bi bi-person" style="font-size: 20px;">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z">
                                            </path>
                                        </svg></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile.html"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                            href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
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
                                <p>Are you sure you want to delete this customer and all of their data?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                <form id="delete" action="{{ route('customer.delete') }}" method="POST">
                                    @csrf
                                    <input type="text" name="ids[]" value="{{ $customer->id }}" hidden>
                                    <button class="btn btn-primary" type="submit"
                                        style="background: var(--bs-danger);border-width: 0px;">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session()->has('alert'))
                    @if (session('alert') === 'success-log')
                        <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close"
                                type="button" aria-label="Close" data-bs-dismiss="alert"></button><span><strong>Log
                                    added successfully!</strong></span></div>
                    @endif
                @endif
                @if (session()->has('alert'))
                    @if (session('alert') === 'success-ticket')
                        <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close"
                                type="button" aria-label="Close"
                                data-bs-dismiss="alert"></button><span><strong>Ticket
                                    added successfully!</strong></span></div>
                    @endif
                @endif
                @if (session()->has('alert'))
                    @if (session('alert') === 'delete')
                        <div class="alert alert-success alert-dismissible" role="alert"
                            style="color: var(--bs-danger-text-emphasis);border-color: var(--bs-danger-border-subtle);background: var(--bs-danger-bg-subtle);">
                            <button class="btn-close" type="button" aria-label="Close"
                                data-bs-dismiss="alert"></button><span><strong>Log Deleted
                                    Deleted!</strong></span>
                        </div>
                    @endif
                @endif
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-ticket">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Ticket</h4><button class="btn-close" type="button"
                                    aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('ticket.add') }}" method="post" id="ticket-form">
                                    @csrf
                                    <input type="text" name="page" value="customer" hidden>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Requester</p>
                                            <p>{{ $customer->name }}</p>
                                            <input name="cust_id" value="{{ $customer->id }}" hidden
                                                class="form-control" type="text"
                                                style="width: 300px;border-radius: 5px;">
                                            </select>
                                        </div>
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Assign To</p><select name="user_id"
                                                class="form-select select2" required=""
                                                style="width: 201.2px;border-radius: 5px;">
                                                <optgroup label="Support">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Priority</p><select name="priority"
                                                class="form-select select2" required=""
                                                style="width: 201.2px;border-radius: 5px;">
                                                <optgroup label="Set Priority">
                                                    <option value="Low" selected="">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 12px;">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Title</p><input name="title"
                                                class="form-control" type="text"
                                                style="width: 300px;border-radius: 5px;" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Description&nbsp;</p>
                                            <textarea name="description" class="form-control" style="width: 300px;border-radius: 5px;" required=""></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button"
                                    data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                    type="submit" style="background: rgb(0,0,0);" form="ticket-form">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-log">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Log</h4><button class="btn-close" type="button"
                                    aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('log.add') }}" id="log-form" method="post">
                                    @csrf
                                    <input type="text" name="page" value="customer" hidden>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Customer</p>

                                            <p>{{ $customer->name }}</p>
                                            <input type="text" name="cust_id" value="{{ $customer->id }}" hidden>
                                        </div>
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Interaction</p><select name="type"
                                                class="form-select select2" required=""
                                                style="width: 201.2px;border-radius: 5px;">
                                                <optgroup label="Type of Interaction">
                                                    <option value="Email" selected="">Email</option>
                                                    <option value="Call">Call</option>
                                                    <option value="Meeting">Meeting</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Notes</p>
                                            <textarea name="notes" class="form-control" style="width: 300px;border-radius: 5px;" required=""></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button"
                                    data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                    type="submit" style="background: rgb(0,0,0);" form="log-form">Add</button></div>
                        </div>
                    </div>
                </div>
                @foreach ($customer->logs as $log)
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-cust-log-{{ $log->id }}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Log</h4><button class="btn-close" type="button"
                                        aria-label="Close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <p
                                                style="color: var(--bs-emphasis-color);font-weight: bold;margin-bottom: 0px;">
                                                Name</p>
                                            <p>{{ $customer->name }}</p>
                                        </div>
                                        <div class="col">
                                            <p
                                                style="color: var(--bs-emphasis-color);font-weight: bold;margin-bottom: 0px;">
                                                Type of Interaction</p>
                                            <p>{{ $log->type }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p
                                                style="color: var(--bs-emphasis-color);font-weight: bold;margin-bottom: 0px;">
                                                Date Created</p>
                                            <p>{{ $log->created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p
                                                style="color: var(--bs-emphasis-color);font-weight: bold;margin-bottom: 0px;">
                                                Notes</p>
                                            <p>{{ $log->notes }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light" type="button"
                                        data-bs-dismiss="modal">Close</button>

                                    <form action="{{ route('log.delete') }}" method="post">
                                        @csrf
                                        <input type="text" name="id" value="{{ $log->id }}" hidden>
                                        <input type="text" name="page" value="customer" hidden>
                                        <input type="text" name="cust_id" value="{{ $log->cust_id }}" hidden>
                                        <button class="btn btn-primary" type="submit"
                                            style="background: var(--bs-red);border-width: 0px;">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Customer</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xxl-6">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0) !important;">
                                        Customer's Info</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-weight: bold;margin-bottom: 0px;">Name</p>
                                            <p>{{ $customer->name }}</p>
                                        </div>
                                        <div class="col">
                                            <p style="font-weight: bold;margin-bottom: 0px;">Email</p>
                                            <p>{{ $customer->email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-weight: bold;margin-bottom: 0px;">Phone Number</p>
                                            <p>{{ $customer->p_numb }}</p>
                                        </div>
                                        <div class="col">
                                            <p style="font-weight: bold;margin-bottom: 0px;">Address</p>
                                            <p>{{ $customer->address }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="font-weight: bold;margin-bottom: 0px;">Notes</p>
                                            <p>{{ $customer->notes }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary" type="button"
                                                style="background: var(--bs-danger);border-width: 0px;"
                                                data-bs-toggle="modal" data-bs-target="#modal-delete">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xxl-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="text-primary fw-bold m-0"
                                                        style="color: rgb(0,0,0)!important;">Customer's Ticket</h6>
                                                </div>
                                                <div class="col" style="text-align: right;"><a
                                                        class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                                        role="button" style="background: rgb(0,0,0);"
                                                        data-bs-toggle="modal" data-bs-target="#modal-ticket"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="1em"
                                                            height="1em" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icon-tabler-ticket fa-sm text-white-50"
                                                            style="font-size: 20px;">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M15 5l0 2"></path>
                                                            <path d="M15 11l0 2"></path>
                                                            <path d="M15 17l0 2"></path>
                                                            <path
                                                                d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2">
                                                            </path>
                                                        </svg>&nbsp;Add Ticket</a></div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto;max-height: 247.2px;">
                                            @if ($customer->tickets->isEmpty())
                                                <p>No Tickets Found</p>
                                            @else
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Priority</th>
                                                                <th>Status</th>
                                                                <th>Created At</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($customer->tickets as $ticket)
                                                                <tr>
                                                                    <td>{{ $ticket->title }}</td>
                                                                    @if ($ticket->priority === 'Low')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-success);border-width: 0px;">Low</button>
                                                                        </td>
                                                                    @elseif ($ticket->priority === 'Medium')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">Medium</button>
                                                                        </td>
                                                                    @elseif ($ticket->priority === 'High')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-danger);border-width: 0px;">High</button>
                                                                        </td>
                                                                    @endif

                                                                    @if ($ticket->status === 'Open')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-form-invalid-color);border-width: 0px;">Open</button>
                                                                        </td>
                                                                    @elseif ($ticket->status === 'On progress')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">In
                                                                                Progress</button></td>
                                                                    @elseif ($ticket->status === 'Resolved')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-blue);border-width: 0px;">Resolved</button>
                                                                        </td>
                                                                    @elseif ($ticket->status === 'Closed')
                                                                        <td><button class="btn btn-primary"
                                                                                type="button"
                                                                                style="font-size: 12px;font-weight: bold;background: var(--bs-dark);border-width: 0px;">Closed</button>
                                                                        </td>
                                                                    @endif

                                                                    <td>{{ $ticket->created_at }}</td>
                                                                    <td><button class="btn btn-primary btn-view-ticket"
                                                                            type="button"
                                                                            style="background: rgba(78,115,223,0);color: rgb(0,0,0);border-width: 0px;font-style: italic;">View
                                                                            Details</button></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="text-primary fw-bold m-0"
                                                        style="color: rgb(0,0,0)!important;">Customer's Log</h6>
                                                </div>
                                                <div class="col" style="text-align: right;"><a
                                                        class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                                        role="button" style="background: rgb(0,0,0);"
                                                        data-bs-toggle="modal" data-bs-target="#modal-log"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512"
                                                            width="1em" height="1em" fill="currentColor"
                                                            class="fa-sm text-white-50" style="font-size: 16px;">
                                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                                            <path
                                                                d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z">
                                                            </path>
                                                        </svg>&nbsp;Add Log</a></div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="max-height: 251px;overflow: auto;">

                                            @if ($customer->logs->isEmpty())
                                                <p>No Logs Found</p>
                                            @else
                                                @foreach ($customer->logs as $log)
                                                    @if ($log->type === 'Email')
                                                        <div class="row row-mail row-email"
                                                            style="margin-bottom: 10px;" data-bs-toggle="modal"
                                                            data-bs-target="#modal-cust-log-{{ $log->id }}"
                                                            type="button">
                                                            <div class="col-xl-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                    height="1em" viewBox="0 0 24 24" fill="none"
                                                                    style="font-size: 44px;color: var(--bs-form-invalid-color);">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <div class="col">
                                                                <p
                                                                    style="margin-bottom: 0px;font-weight: bold;color: var(--bs-emphasis-color);">
                                                                    {{ $customer->name }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 14px;">
                                                                    {{ $customer->email }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 12px;">
                                                                    {{ $log->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    @elseif ($log->type === 'Call')
                                                        <div class="row row-call" style="margin-bottom: 10px;"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-cust-log-{{ $log->id }}"
                                                            type="button">
                                                            <div class="col-xl-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                    height="1em" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="icon icon-tabler icon-tabler-phone-call"
                                                                    style="font-size: 44px;color: var(--bs-form-valid-border-color);">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                                    </path>
                                                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                                                </svg></div>
                                                            <div class="col">
                                                                <p
                                                                    style="margin-bottom: 0px;font-weight: bold;color: var(--bs-emphasis-color);">
                                                                    {{ $customer->name }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 14px;">
                                                                    {{ $customer->p_numb }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 12px;">
                                                                    {{ $log->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    @elseif ($log->type === 'Meeting')
                                                        <div class="row row-meeting" style="margin-bottom: 10px;"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-cust-log-{{ $log->id }}"
                                                            type="button">
                                                            <div class="col-xl-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                    height="1em" viewBox="0 0 24 24" fill="none"
                                                                    style="font-size: 44px;color: var(--bs-primary);">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M20.1702 3L20.1663 3.00453C21.7458 3.09084 23 4.39896 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6C1 4.34315 2.34315 3 4 3H20.1702ZM10.4764 5H16.4764L13.089 9H7.08899L10.4764 5ZM5.08899 9L8.47644 5H4C3.44772 5 3 5.44772 3 6V9H5.08899ZM3 11V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V11H3ZM21 9V6C21 5.44771 20.5523 5 20 5H18.4764L15.089 9H21Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <div class="col">
                                                                <p
                                                                    style="margin-bottom: 0px;font-weight: bold;color: var(--bs-emphasis-color);">
                                                                    {{ $customer->name }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 14px;">
                                                                    {{ $customer->email }}</p>
                                                                <p style="margin-bottom: 0px;font-size: 12px;">
                                                                    {{ $log->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
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
