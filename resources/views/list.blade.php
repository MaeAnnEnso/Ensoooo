@extends('layouts.appp')
@section('content')
<div class="col-md-12">
    <div class="page_title">
        <h1>Masterlist</h1>
    </div>
</div>
<div class="white_shd full margin_bottom_30">
    <div class="table_section padding_infor_info">
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>CivilStatus</th>
                        <th>Contact No.</th>
                        <th>Nationality</th>
                        <th>Occupation</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($list))
                          @foreach($list as $c)
                    <tr>
                        <td>{{ $c->studentid }}</td>
                        <td>{{ $c->firstname . ' '.$c->lastname }}</td>
                        <td>{{ ($c->gender) }}</td>
                        <td>{{ date('M. d, Y', strtotime($c->birthdate)) }}</td>
                        <td>{{ ($c->civilstatus) }}</td>
                        <td>{{ ($c->contactno) }}</td>
                        <td>{{ ($c->nationality) }}</td>
                        <td>{{ ($c->occupation) }}</td>
                    </tr>
                    @endforeach 
                @endif 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection