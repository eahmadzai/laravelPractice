@extends('cms.layout')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Task</h5>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Home </a>
                </li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Task</a></li>
            </ol>
            <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
                aria-controls="offcanvasExample1">+ Add Task</a>
        </div>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Tasks Summary</h5>
                <div class="d-flex align-items-center">
                    <div class="icon-box  icon-box-sm task-tab me-2">
                        <a href="task-summary.html">
                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50032 3H2.66699V8.83333H8.50032V3Z" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.6668 3H11.8335V8.83333H17.6668V3Z" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.6668 12.1667H11.8335V18H17.6668V12.1667Z" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.50032 12.1667H2.66699V18H8.50032V12.1667Z" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2">+ Add Task</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row task">
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-primary count">8</h2>
                                            <span>Not Started</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-purple count">7</h2>
                                            <span>In Progress</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-warning count">13</h2>
                                            <span>Testing</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-danger count">11</h2>
                                            <span>Awaiting</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-success count">21</h2>
                                            <span>Complete</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-4 col-6">
                                    <div class="task-summary">
                                        <div class="d-flex align-items-baseline">
                                            <h2 class="text-danger count">16</h2>
                                            <span>pending</span>
                                        </div>
                                        <p>Tasks assigne</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects task-table">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Task</h4>
                                </div>
                                <table id="empoloyeestbl2" class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="checkAll" required>
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Assigned To</th>
                                            <th>Tags</th>
                                            <th class="text-end">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox3"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox3"></label>
                                                </div>
                                            </td>
                                            <td><span>03</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>Create Frontend WordPress</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox4"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox4"></label>
                                                </div>
                                            </td>
                                            <td><span>04</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>HTML To React Convert </h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox5"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox5"></label>
                                                </div>
                                            </td>
                                            <td><span>05</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>HTML template Issue Complete</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox6"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox6"></label>
                                                </div>
                                            </td>
                                            <td><span>06</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>Complete Admin Dashboard Project</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="progress">In Progress</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="Low">Low</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox7"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox7"></label>
                                                </div>
                                            </td>
                                            <td><span>07</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>Create Frontend WordPress</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox8"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox8"></label>
                                                </div>
                                            </td>
                                            <td><span>08</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>HTML To React Convert </h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox9"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox9"></label>
                                                </div>
                                            </td>
                                            <td><span>09</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>HTML template Issue Complete</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox10"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox10"></label>
                                                </div>
                                            </td>
                                            <td><span>10</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>Complete Admin Dashboard Project</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="progress">In Progress</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="Low">Low</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox11"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox11"></label>
                                                </div>
                                            </td>
                                            <td><span>11</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>Create Frontend WordPress</h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="testing">Testing</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox12"
                                                        required>
                                                    <label class="form-check-label" for="customCheckBox12"></label>
                                                </div>
                                            </td>
                                            <td><span>12</span></td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>HTML To React Convert </h6>
                                                        <span>INV-100023456</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select class="default-select status-select">
                                                    <option value="testing">Testing</option>
                                                    <option value="complete">Complete</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>06 Feb 2023</span></td>
                                            <td>
                                                <span>19 Feb 2023</span>
                                            </td>
                                            <td>
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic555.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                    <img src="{{ url('cms') }}/images/contacts/pic666.jpg"
                                                        class="avatar rounded-circle" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                                <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                            </td>
                                            <td class="text-end">
                                                <select class="default-select status-select">
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
