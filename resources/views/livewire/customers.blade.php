<div>
<button wire:navigate href="customers/create" class="btn btn-success btn-sm">Create</button>    
<table class="table">
    <thead>
        <tr> 
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <button wire:navigate href="/customers/view/{{ $customer->id }}" class="btn btn-primary btn-sm">View</button>
                <button class="btn btn-secondary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
