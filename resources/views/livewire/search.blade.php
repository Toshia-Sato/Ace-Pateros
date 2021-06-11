<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search a Doctor..." wire:model="searchTerm" />

        <table class="table table-bordered table-responsive-lg mt-4">
        <tr>
            <th>Name</th>
            <th>Service Type</th>
            <th>Specialization</th>
            <th>Category</th>
            <th>Room</th>
            <th>Schedule</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($doctors as $doctor)
            <tr>
                
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->service->service_type }}</td>
                <td>{{ $doctor->specialization->specialization }}</td>
                <td>{{ $doctor->category}}</td>
                <td>{{ $doctor->room }}</td>
                <td>
                    <a href="{{ route('schedule.index', $doctor->id) }}" title="show">
                    <button class="btn btn-success"> View Schedule</button></td>
                    </a>
                
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