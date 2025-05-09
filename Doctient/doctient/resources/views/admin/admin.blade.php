@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">

                               <table class = "table table-striped align-items-center w-100 no wrap">
                                <thead>
                                      <tr>
                                        <th>First_name</th>
                                        <th>Last_name</th>
                                        <th>Age</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Spouse</th>
                                        <th>Diagnosis</th>
                                        <th>Procedure</th>
                                        <th>History</th>
                                        <th>Prescription</th>
                                      </tr>
                                </thead>
                                <tbody>
                       

                                </tbody>
                              </table>

                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection


