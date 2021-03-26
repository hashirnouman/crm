<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Inquiries') }}
      </h2>
  </x-slot>

  <div class="py-2">
      <div class=" mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <div class="table-responisve">
                  <table class="table table-hover"> 
                    <thead class="thead-dark">
                      <tr class="bg-primary tex-white">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Course</th>
                        <th>Interest</th>
                        <th>Status</th>
                        <th>Follow up</th>
                        <th>Added By</th>
                        <th>Created At</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      @foreach($result as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->number}}</td>
                        <td>{{$item->city}}</td>
                        <td><span class="text-primary">{{$item->course_id}}</span></td>
                        <td>{{$item->interest}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->follow_up}}</td>
                        <td>{{$item->added_by}}</td>
                        <td>{{$item->created_at}}</td>
                       
                     
                        <td>
                          <form action="{{url('inquiries/'.$item->id)}}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                        <button href="{{route('inquiries.destroy',['inquiry'=>$item->id])}}" class="btn btn-sm btn-link text-danger"> <i class="fa fa-trash"></i> </button>
                          </form>

                        </td>
                        <td>
                          <form action="{{url('inquiries/'.$item->id)}}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                        <button href="{{route('inquiries.show',['inquiry'=>$item->id])}}" class="btn btn-sm btn-link text-danger"> <i class="fa fa-edit"></i> </button>
                          </form>

                        </td>
                        

                         
                      </tr>
                      @endforeach
                    </tbody>


                  </table>
                </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
