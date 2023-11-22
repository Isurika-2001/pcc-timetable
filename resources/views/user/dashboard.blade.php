<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timetable') }}
        </h2>
    </x-slot>



    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-search-bar></x-search-bar>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php
                    $columns = ['column1', 'column2', 'column3', 'column4'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';
                @endphp

                <x-table>
                    <x-slot name="title">Grade {{ $title }}</x-slot>
                    <x-slot name="description">{{ $description }}</x-slot>
                    <x-slot name="head">
                        <x-th>period</x-th>
                        <x-th>mon</x-th>
                        <x-th>tue</x-th>
                        <x-th>wed</x-th>
                        <x-th>thu</x-th>
                        <x-th>fri</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($tableData as $row)
                            <x-tr>
                                <x-td>{{ $row['column1'][0] }}<br>{{ $row['column1'][1] }}</x-td>
                                <x-td>{{ $row['column2'][0] }}<br>{{ $row['column2'][1] }}</x-td>
                                <x-td>{{ $row['column3'][0] }}<br>{{ $row['column3'][1] }}</x-td>
                                <x-td>{{ $row['column4'][0] }}<br>{{ $row['column4'][1] }}</x-td>
                                <x-td>{{ $row['column5'][0] }}<br>{{ $row['column5'][1] }}</x-td>
                                <x-td>{{ $row['column6'][0] }}<br>{{ $row['column6'][1] }}</x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
