<x-app-layout>
    <div class="card">
        <div class="card-body">
           @if(Session::has('success'))
           <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            {{ Session::get('success') }}
            </div>
          </div>
           

           @endif


           @if(Session::has('errors'))
           <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            {{ Session::get('errors') }}
            </div>
          </div>

           @endif


            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>

                <tbody>
                           
                            @foreach ($items as $item)
                            <tr>
                                
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->image}}</td>
                                <td>{{$item->is_active}}</td>
                                
                                 
                                </td>
                            </tr>
                            @endforeach

                           
                                
                           
                </tbody>

            </table>


        </div>
        
        <div class="card-footer">
            {{$items->links() }}
        </div>
       
    </div>


</x-app-layout>