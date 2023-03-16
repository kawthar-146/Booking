<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.service.create') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Service</a>
</div>
</div>

    <div class="py-12">
        
<div class="flex flex-col">
       
    <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="px-4 py-2 bg-indigo-700 hover:bg-indigo-500 rounded-lg text-white md:border-grey-500 text-left block md:table-cell">Name</th>
				<th class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white md:border md:border-grey-500 text-left block md:table-cell">Price</th>
                <th class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
			@foreach ($services as $service)
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $service->name }}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $service->price }}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					
                                                <div class="flex space-x-2">
					<a href="{{ route('admin.service.edit', $service->id) }}"
                                                        class="px-4 py-2  bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Edit</a>
					<form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                        method="POST"
                                                        action="{{ route('admin.service.destroy', $service->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
0                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
</div>
				</td>
			</tr>	
			@endforeach		
		</tbody>
	</table>
</div>
</div>
</x-admin-layout>
