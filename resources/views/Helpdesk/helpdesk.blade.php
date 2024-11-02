<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="page-top"><link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: rgb(0,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15" style="transform: rotate(0deg);"><i class="icon ion-connection-bars"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ClIENTcONNECT <br>CRM</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index.index') }}"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" style="font-size: 25px;margin-right: 10px;">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                            </svg><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('customer.customers') }}"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" style="font-size: 25px;margin-right: 10px;">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
                            </svg><span>Customers</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('log.logs') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-receipt" style="font-size: 25px;margin-right: 10px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2"></path>
                            </svg><span>Logs</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('helpdesk.helpdesk') }}"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" style="font-size: 25px;margin-right: 10px;">
                                <g>
                                    <rect fill="none" height="24" width="24"></rect>
                                </g>
                                <g>
                                    <g>
                                        <path d="M21,12.22C21,6.73,16.74,3,12,3c-4.69,0-9,3.65-9,9.28C2.4,12.62,2,13.26,2,14v2c0,1.1,0.9,2,2,2h1v-6.1 c0-3.87,3.13-7,7-7s7,3.13,7,7V19h-8v2h8c1.1,0,2-0.9,2-2v-1.22c0.59-0.31,1-0.92,1-1.64v-2.3C22,13.14,21.59,12.53,21,12.22z"></path>
                                        <circle cx="9" cy="13" r="1"></circle>
                                        <circle cx="15" cy="13" r="1"></circle>
                                        <path d="M18,11.03C17.52,8.18,15.04,6,12.05,6c-3.03,0-6.29,2.51-6.03,6.45c2.47-1.01,4.33-3.21,4.86-5.89 C12.19,9.19,14.88,11,18,11.03z"></path>
                                    </g>
                                </g>
                            </svg><span>Helpdesk</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar" style="background: rgb(0,0,0) !important;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">IZZAT SAIFULLAH</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person" style="font-size: 20px;">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                        </svg></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button><span><strong>Ticket added successfully!</strong></span></div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-ticket">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Ticket</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="ticket-form">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Requester</p><select class="form-select select2" required="" style="width: 201.2px;border-radius: 5px;">
                                                <optgroup label="Customers">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Assign To</p><select class="form-select select2" required="" style="width: 201.2px;border-radius: 5px;">
                                                <optgroup label="Support">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Priority</p><select class="form-select select2" required="" style="width: 201.2px;border-radius: 5px;">
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
                                            <p style="margin-bottom: 0px;">Title</p><input class="form-control" type="text" style="width: 300px;border-radius: 5px;" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Description&nbsp;</p><textarea class="form-control" style="width: 300px;border-radius: 5px;" required=""></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" style="background: rgb(0,0,0);" form="ticket-form">Add</button></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" style="background: rgb(0,0,0);" data-bs-toggle="modal" data-bs-target="#modal-ticket"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-ticket fa-sm text-white-50" style="font-size: 16px;">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 5l0 2"></path>
                                    <path d="M15 11l0 2"></path>
                                    <path d="M15 17l0 2"></path>
                                    <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path>
                                </svg>&nbsp;Add Ticket</a></div>
                        <div class="col" style="text-align: right;"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" style="background: rgb(0,0,0);" data-bs-toggle="modal" data-bs-target="#modal-report"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col">
                            <div class="card shadow border-left-primary py-2" style="border-left-color: rgb(0,0,0)!important;">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span style="color: rgb(0,0,0);">TOtal TICKETS</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span style="font-size: 30px;">$40,000</span></div>
                                        </div>
                                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-ticket fa-2x text-gray-300" style="font-size: 45px;color: rgb(0,0,0)!important;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 5l0 2"></path>
                                                <path d="M15 11l0 2"></path>
                                                <path d="M15 17l0 2"></path>
                                                <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow border-left-primary py-2" style="border-left-color: rgb(231,74,59)!important;">
                                <div class="card-body">
                                    <div class="row g-0 align-items-center">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span style="color: rgb(231,74,59);">TOtal open tickets</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span style="font-size: 30px;">$40,000</span></div>
                                        </div>
                                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-ticket fa-2x text-gray-300" style="font-size: 45px;color: rgb(231,74,59)!important;">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 5l0 2"></path>
                                                <path d="M15 11l0 2"></path>
                                                <path d="M15 17l0 2"></path>
                                                <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0)!important;">Tickets Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(0,0,0);">Filter By</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Date (Latest to Oldest)</a><a class="dropdown-item" href="#">Date (Oldest to Latest)</a><a class="dropdown-item" href="#">Name | Alphabetically (A to Z)</a><a class="dropdown-item" href="#"><span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">Name | Alphabetically (Z to A)</span></a><a class="dropdown-item" href="#">Priority (Low to High)</a><a class="dropdown-item" href="#"><span style="color: var(--bs-dropdown-link-hover-color); background-color: var(--bs-dropdown-link-hover-bg);">Priority (High to Low)</span></a><a class="dropdown-item" href="#">Assigned to You</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
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
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-success);border-width: 0px;">Low</button></td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-form-invalid-color);border-width: 0px;">Open</button></td>
                                            <td>$162,700</td>
                                            <td><button class="btn btn-primary" type="button" style="background: rgba(78,115,223,0);color: rgb(0,0,0);border-width: 0px;font-style: italic;">View Details</button></td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer(CEO)</td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">Medium</button></td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-warning);border-width: 0px;">In Progress</button></td>
                                            <td>$1,200,000</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-danger);border-width: 0px;">High</button></td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-blue);border-width: 0px;">Resolved</button></td>
                                            <td>$86,000</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>2012/10/13<br></td>
                                            <td><button class="btn btn-primary" type="button" style="font-size: 10px;font-weight: bold;background: var(--bs-dark);border-width: 0px;">Closed</button></td>
                                            <td>$132,000</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>2011/06/07<br></td>
                                            <td>Cell 5</td>
                                            <td>$206,850</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/12/02<br></td>
                                            <td>Cell 5</td>
                                            <td>$372,000</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Bruno Nash<br></td>
                                            <td>Software Engineer</td>
                                            <td>2011/05/03<br></td>
                                            <td>Cell 5</td>
                                            <td>$163,500</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>2011/12/12<br></td>
                                            <td>Cell 5</td>
                                            <td>$106,450</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>2011/12/06<br></td>
                                            <td>Cell 5</td>
                                            <td>$145,600</td>
                                            <td>Cell 7</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Cedric Kelly</td>
                                            <td>Senior JavaScript Developer</td>
                                            <td>2012/03/29<br></td>
                                            <td>Cell 5</td>
                                            <td>$433,060</td>
                                            <td>Cell 7</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-report">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Generate Report</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col">
                                        <p style="margin-bottom: 10px;">Start Date</p><input type="date" style="border-radius: 5px;">
                                    </div>
                                    <div class="col">
                                        <p style="margin-bottom: 10px;">End Date</p><input type="date" style="border-radius: 5px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p style="margin-bottom: 10px;">Status</p><select>
                                            <optgroup label="Status">
                                                <option value="Open" selected="">Open</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="In Progress">Resolved</option>
                                                <option value="Closed">Closed</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <p style="margin-bottom: 10px;">Priority</p><select>
                                            <optgroup label="Priority">
                                                <option value="Low" selected="">Low</option>
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button" style="background: rgb(183,0,0);border-width: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-pdf-fill" style="font-size: 20px;margin-right: 5px;">
                                        <path d="M5.523 10.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.035 21.035 0 0 0 .5-1.05 11.96 11.96 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.888 3.888 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 4.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"></path>
                                        <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.64 11.64 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.707 19.707 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"></path>
                                    </svg>PDF</button><button class="btn btn-primary" type="button" style="background: #008c5a;border-width: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-excel-fill" style="font-size: 20px;margin-right: 5px;">
                                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5.884 4.68 8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 1 1 .768-.64z"></path>
                                    </svg>Excel</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Zyn Edge Sdn Bhd 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a><script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>