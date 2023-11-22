@extends('cms.layout')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Generated Report</h5>
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Report</a></li>
            </ol>
            <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
                aria-controls="offcanvasExample1">+ Add Task</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects manage-client">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Generated Report</h4>
                                </div>
                                <table id="reports-tbl" class="table">
                                    <thead>
                                        <tr>
                                            <th>Invoice #</th>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Due Date</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Amount Open</th>
                                            <th>Adjustment</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00002</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>17 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Feb 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00005</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>20 Feb 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00004</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00003</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Feb 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00002</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00005</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00004</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00003</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00002</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00005</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00004</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00003</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00002</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00005</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00001</a>
                                            </td>
                                            <td><span>Ricky Antony</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00004</a>
                                            </td>
                                            <td><span>Jack John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="text-primary">INV-00003</a>
                                            </td>
                                            <td><span>Harry John</span></td>
                                            <td>
                                                <span>14 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span>20 Jan 2023</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">105 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">5 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">120 $</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary">0.00</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
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
