<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Create Inquiry') }}
    </h2>
</x-slot>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
              <form action="{{route('inquiries.store')}}" method="post">
                @csrf
                <div class="row">
              <div class="form-group col-sm-12 col-lg-6">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Contact No.</label>
                <input type="tel" class="form-control" name="contact" id="contact" required>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">City</label>
                <input type="text" class="form-control" name="city" id="city" required>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Course</label>
                <select class="form-control" name="course_id" id="course_id" required>
                  <option value=""></option>
                  <option value="1">Course One</option>
                  <option value="2">Course Two</option>
                </select>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Interested</label>
                <select class="form-control" name="interest" id="interest" required>
                  <option value=""></option>
                  <option value="0">yes</option>
                  <option value="1">no</option>
                </select>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Status</label>
                <select class="form-control" name="status" id="status" required>
                  <option value=""></option>
                  <option value="0">Enrolled</option>
                  <option value="1">Not Enrolled</option>
                </select>
              </div>
              <div class="form-group  col-sm-12 col-lg-6">
                <label for="">Follow up date</label>
                <input type="date" class="form-control" name="date" id="date" required>
              </div>
             
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
          </div>
      </div>
  </div>
</div>
</x-app-layout> 