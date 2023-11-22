@extends('cms.layout')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Finance</h5>
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Finance</a></li>
            </ol>
            <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
                aria-controls="offcanvasExample1">+ Add Task</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="card h-auto">
                        <div class="card-header">
                            <h4 class="heading mb-0">Add New Account </h4>
                        </div>
                        <div class="card-body">
                            <form class="finance-hr">
                                <div class="form-group mb-3">
                                    <label class="text-secondary font-w500"> Account Title<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Account Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label> Amount<span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-text">$</div>
                                        <input type="text" class="form-control" placeholder="Initial Balance">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-secondary"> Account No<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Account Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-secondary">Branch Code<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Branch Code">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-secondary">Branch Name<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Branch Name">
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects manage-client">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Finance</h4>
                                </div>
                                <table id="empoloyees-tbl1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Account Title</th>
                                            <th>Amount</th>
                                            <th>Account No</th>
                                            <th>Branch Code</th>
                                            <th>Branch Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Saving</a>
                                            </td>
                                            <td><span>500 $</span></td>
                                            <td>
                                                <span>1234500000000</span>
                                            </td>
                                            <td>
                                                <span>1234</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Uk</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Salary </a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Recurring deposit</a>
                                            </td>
                                            <td><span>6000 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of India</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Saving</a>
                                            </td>
                                            <td><span>500 $</span></td>
                                            <td>
                                                <span>1234500000000</span>
                                            </td>
                                            <td>
                                                <span>1234</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Uk</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Salary </a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Salary </a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Recurring deposit</a>
                                            </td>
                                            <td><span>6000 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of India</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Recurring deposit</a>
                                            </td>
                                            <td><span>6000 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of India</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Salary </a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">Fixed deposit</a>
                                            </td>
                                            <td><span>700 $</span></td>
                                            <td>
                                                <span>678900000000</span>
                                            </td>
                                            <td>
                                                <span>5678</span>
                                            </td>
                                            <td>
                                                <span>Bank Of Lundon</span>
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
