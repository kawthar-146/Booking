<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.team.create') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Employee</a>
</div>
</div>

    <div class="py-12">
        
<div class="flex flex-col">
       
    <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="px-4 py-2 bg-indigo-700 hover:bg-indigo-500 rounded-lg text-white md:border-grey-500 text-left block md:table-cell">Name</th>
				<th class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white md:border md:border-grey-500 text-left block md:table-cell">Image</th>
				<th class="px-4 py-2 bg-indigo-700 hover:bg-indigo-500 rounded-lg text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Phone</th>
				<th class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Type</th>
				<th class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
			@foreach ($team as $employee)
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $employee->name }}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"> <img src="{{ Storage::url($employee->image) }}"/></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $employee->phone }}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $employee->type->name }}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded" >Edit</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
				</td>
			</tr>	
			@endforeach		
		</tbody>
	</table>
</div>
</div>
</x-admin-layout>
