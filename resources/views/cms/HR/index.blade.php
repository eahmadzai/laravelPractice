@extends('cms.layout')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Core HR</h5>
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
            <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
                aria-controls="offcanvasExample1">+ Add Task</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive active-projects style-1">
                                        <div class="tbl-caption">
                                            <h4 class="heading mb-0">Employees</h4>
                                            <div>
                                                <!-- <a href="javascript:void(0)" class="btn btn-primary btn-sm"data-bs-toggle="modal" data-bs-target="#offcanvasExample">+ Add Employee</a> -->
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas"
                                                    href="#offcanvasExample" role="button"
                                                    aria-controls="offcanvasExample">+ Add Employee</a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                    + Invite Employee
                                                </button>
                                            </div>
                                        </div>
                                        <table id="empoloyees-tbl" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Employee ID</th>
                                                    <th>Employee Name</th>
                                                    <th>Email Address</th>
                                                    <th>Contact Number</th>
                                                    <th>Gender</th>
                                                    <th>Location</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Moni Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success light border-0">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Joney Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger light border-0">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic3.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Peter Oliver</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success light border-0">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic3.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Elijah James</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success light border-0">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky James</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success light border-0">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>1001</span></td>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>James Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-primary">abc@gmail.com</span></td>
                                                    <td>
                                                        <span>+91 123 456 7890</span>
                                                    </td>
                                                    <td>
                                                        <span>Male</span>
                                                    </td>
                                                    <td>
                                                        <span>Delhi</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger light border-0">Active</span>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive active-projects style-1 attendance-tbl">
                                        <div class="tbl-caption">
                                            <h4 class="heading mb-0">Attendance</h4>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    + Mark Attendance
                                                </button>
                                            </div>
                                        </div>
                                        <table id="attendance-tbl" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th>
                                                        <span>1</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>2</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>3</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>4</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>5</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>6</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>7</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>8</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>9</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>10</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>11</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>12</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>13</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>14</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>15</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>16</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>17</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>18</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>19</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>20</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>21</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>22</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>23</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>24</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>25</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>26</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>27</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>28</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>29</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>30</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th>
                                                        <span>31</span>
                                                        <p>MO</p>
                                                    </th>
                                                    <th class="text-center">
                                                        <span>Total</span>
                                                        <p>MO</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Moni Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Joney Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic3.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Peter Oliver</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Elijah James</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic3.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky James</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic1.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic3.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>James Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="products">
                                                            <img src="{{ url('cms') }}/images/contacts/pic2.jpg"
                                                                class="avatar avatar-md" alt="">
                                                            <div>
                                                                <h6>Ricky Antony</h6>
                                                                <span>Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td><span class="text-danger"><i
                                                                class="fa-regular fa-xmark"></i></span></td>
                                                    <td><span class="text-success"><i
                                                                class="fa-solid fa-check"></i></span></td>
                                                    <td class="text-center"><span>28/31</span></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card h-auto">
                                <div class="card-header pb-0 border-0">
                                    <h4 class="heading mb-0">Attendance</h4>
                                    <select class="default-select status-select normal-select">
                                        <option value="Today">All Time</option>
                                        <option value="Week">Week</option>
                                        <option value="Month">Month</option>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <div id="projectChart" class="project-chart"></div>
                                    <div class="project-date">
                                        <div class="project-media">
                                            <p class="mb-0">
                                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="0.5" width="12" height="12" rx="3"
                                                        fill="var(--primary)" />
                                                </svg>
                                                Completed Projects
                                            </p>
                                            <span>125 Projects</span>
                                        </div>
                                        <div class="project-media">
                                            <p class="mb-0">
                                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="0.5" width="12" height="12" rx="3"
                                                        fill="#3AC977" />
                                                </svg>
                                                Progress Projects
                                            </p>
                                            <span>125 Projects</span>
                                        </div>
                                        <div class="project-media">
                                            <p class="mb-0">
                                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="0.5" width="12" height="12" rx="3"
                                                        fill="#FF5E5E" />
                                                </svg>
                                                Cancelled
                                            </p>
                                            <span>125 Projects</span>
                                        </div>
                                        <div class="project-media">
                                            <p class="mb-0">
                                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="0.5" width="12" height="12" rx="3"
                                                        fill="#FF9F00" />
                                                </svg>
                                                Yet to Start
                                            </p>
                                            <span>125 Projects</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="heading mb-0">Upcoming Holidays</h4>
                                </div>
                                <div class="card-body schedules-cal p-2">
                                    <input type="text" class="form-control d-none" id="datetimepicker1">
                                    <div class="events">
                                        <h6>events</h6>
                                        <div class="dz-scroll event-scroll">
                                            <div class="event-media">
                                                <div class="d-flex align-items-center">
                                                    <div class="event-box">
                                                        <h5 class="mb-0">20</h5>
                                                        <span>Mon</span>
                                                    </div>
                                                    <div class="event-data ms-2">
                                                        <h5 class="mb-0">Development planning</h5>
                                                        <span>w3it Technologies</span>
                                                    </div>
                                                </div>
                                                <span class="text-secondary">12:05 PM</span>
                                            </div>
                                            <div class="event-media">
                                                <div class="d-flex align-items-center">
                                                    <div class="event-box">
                                                        <h5 class="mb-0">20</h5>
                                                        <span>Mon</span>
                                                    </div>
                                                    <div class="event-data ms-2">
                                                        <h5 class="mb-0">Development planning</h5>
                                                        <span>w3it Technologies</span>
                                                    </div>
                                                </div>
                                                <span class="text-secondary">12:05 PM</span>
                                            </div>
                                            <div class="event-media">
                                                <div class="d-flex align-items-center">
                                                    <div class="event-box">
                                                        <h5 class="mb-0">20</h5>
                                                        <span>Mon</span>
                                                    </div>
                                                    <div class="event-data ms-2">
                                                        <h5 class="mb-0">Development planning</h5>
                                                        <span>w3it Technologies</span>
                                                    </div>
                                                </div>
                                                <span class="text-secondary">12:05 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
