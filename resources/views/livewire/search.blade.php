<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search a Doctor..." wire:model="searchTerm" />

        <table class="table table-bordered table-responsive-lg mt-4">
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Specialization</th>
            <th>Category</th>
            <th>Schedule</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($doctors as $doctor)
            <tr>
                
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialization->specialization }}</td>
                <td>{{ $doctor->category}}</td>
                <td>{{ $doctor->schedule }}</td>
                <td>
                @if(!($doctor->image))
                    <img src="/storage/uploads/default.png" class="img-thumbnail" style="width: 100px;">
                @else 
                     <img src="/storage/{{ $doctor->image}}" alt="" class="img-thumbnail" style="width: 100px;">
                @endif
                </td>
                
                <td>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">

                        <a href="{{ route('doctors.show', $doctor->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="doctors/{{$doctor->id}}/edit">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
            {{ $doctors->links() }}
        </div>
    </div>
</div>