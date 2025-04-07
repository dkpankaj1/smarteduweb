<x-app-layout>
    <div class="card">
     <div class="card-body" >
    <form action="{{ route('admin.crousals.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label">Title</label>
        <input  class="form-control mb-3" type="text" name="title" >
        @error('title')
        <div class="text-danger mb-3">{{ $message }}</div>
       @enderror
    
        <label class="form-label">Description</label>
        <textarea class="form-control mb-3" name="description" ></textarea>
        @error('description')
        <div class="text-danger mb-3">{{ $message }}</div>
      @enderror
    
        <label class="form-label">Image</label>
        <input  class="form-control mb-3" type="file" name="image">
        @error('image')
        <div class="text-danger mb-3">{{ $message }}</div>
      @enderror
    
        <label class="form-label">Status</label>
        <select class="form-select mb-3"  name="is_active">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        @error('is_active')
        <div class="text-danger mb-3">{{ $message }}</div>
        @enderror
    
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>
</div>  
    

</x-app-layout>