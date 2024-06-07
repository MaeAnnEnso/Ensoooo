@extends('layouts.appp')
@section('content')
<div class="col-md-12">
   <div class="page_title">
      <h1>Student</h1>
   </div>
</div>
<div class="col-md-12">
   <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
            <h2>Add Student</h2>
         </div>
      </div>
      <form method="POST" action="/save/student">
         @csrf
         <div class="row pl-3 p-3 mb-0 ">
            <div class="col-6">
               <input type="hidden" name="studentid">
               <div class="form-group">
                  <label for="FirstName">First Name</label>
                  <input type="text" class="form-control" name="FirstName" placeholder="Enter your firstname">
                  @error('FirstName') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <div class="form-group">
                  <label for="LastName">Last Name</label>
                  <input type="text" class="form-control" name="LastName" placeholder="Enter your lastname">
                  @error('LastName') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <div class="form-group">
                  <label for="MiddleName">Middle Name</label>
                  <input type="text" class="form-control" name="MiddleName" placeholder="Enter your middlename">
                  @error('MiddleName') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <div class="form-group">
                  <label for="ContactNo">Contact No.</label>
                  <input type="text" class="form-control" name="ContactNo" placeholder="#">
                  @error('ContactNo') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <div class="form-group">
                  <label for="Nationality">Nationality</label>
                  <input type="text" class="form-control" name="Nationality" placeholder="Enter your nationality">
                  @error('Nationality') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="Suffix">Suffix</label>
                  <select class="form-control" name="Suffix">
                     <option selected></option>
                     <option value="Jr.">Jr.</option>
                     <option value="Sr.">Sr.</option>
                     <option value="I">I</option>
                     <option value="II">II</option>
                     <option value="III">III</option>
                     <option value="IV">IV</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="Gender">Gender</label>
                  <select class="form-control" name="Gender">
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="BirthDate">Date of Birth</label>
                  <input type="date" class="form-control" name="BirthDate" placeholder="BirthDate">
                  @error('BirthDate') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
               <div class="form-group">
                  <label for="CivilStatus">CivilStatus</label>
                  <select class="form-control" name="CivilStatus">
                     <option value="single">Single</option>
                     <option value="married">Married</option>
                     <option value="divorce">Divorce</option>
                     <option value="widowed">Widowed</option>
                     <option value="seprated">Seprated</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="Occupation">Occupation</label>
                  <input type="text" class="form-control" name="Occupation" placeholder="Occupation">
                  @error('Occupation') <div class="text-danger"><i class="fa fa-exclamation-circle me-2"></i> {{ $message }}</div>@enderror
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
@endsection