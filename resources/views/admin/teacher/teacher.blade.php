<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teachers') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between items-center">

                <a href="{{ route('admin.register') }}">
                    <x-add-button>
                        Add New
                    </x-add-button>
                </a>

                <x-search-bar></x-search-bar>

                <div class="my-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                        <span class="ml-2 text-gray-700">Select Sectional Heads</span>
                    </label>
                </div>

                <div class="my-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" />
                        <span class="ml-2 text-gray-700">Select Class Teachers</span>
                    </label>
                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => 'Value1', 'column2' => 'Value2', 'column3' => 'Value3', 'column4' => 'Value4', 'column5' => 'Value5'],
                        ['column1' => 'Value1', 'column2' => 'Value2', 'column3' => '', 'column4' => 'Value4', 'column5' => 'Value5'],
                        ['column1' => 'Value1', 'column2' => 'Value2', 'column3' => 'Value3', 'column4' => 'Value4', 'column5' => 'Value5'],
                        // Add more rows as needed
                    ];

                    $title = 'Teachers';
                    $description = 'List of available teachers';
                @endphp

                <x-table>
                    <x-slot name="title">{{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>id</x-th>
                        <x-th>name</x-th>
                        <x-th>class</x-th>
                        <x-th>sectional head</x-th>
                        <x-th>manage</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'] }}</x-td>
                                <x-td>{{ $row['column2'] }}</x-td>
                                <x-td>{{ $row['column3'] }}</x-td>
                                <x-td>
                                    <x-button>Add</x-button>
                                </x-td>
                                <x-td>
                                    <x-edit-button>Edit</x-edit-button>
                                    <x-delete-button class="bg-red-500 text-white px-4 py-2">Delete</x-delete-button>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
