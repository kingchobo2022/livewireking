<div>
<button wire:navigate href="customers/create" class="btn btn-success btn-sm mb-2">Create</button>    

<livewire:flash-message />

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
                <button wire:navigate href="/customers/edit/{{ $customer->id }}" class="btn btn-secondary btn-sm">Edit</button>
                <button wire:click="deleteCustomer({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
