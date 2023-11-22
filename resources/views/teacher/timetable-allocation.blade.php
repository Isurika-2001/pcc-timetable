<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timetabel Allocation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @php

                    $columns = ['column1', 'column2', 'column3', 'column4', 'column5'];
                    $tableData = [
                        ['column1' => ['', '1'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '2'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        ['column1' => ['', '3'], 'column2' => ['subject2', 'teacher2'], 'column3' => ['subject3', 'teacher3'], 'column4' => ['subject4', 'teacher4'], 'column5' => ['subject5', 'teacher5'], 'column6' => ['subject6', 'teacher6']],
                        // Add more rows as needed
                    ];

                    $title = '6A';
                    $description = '1st Term 2023';

                    // create array of 5 teachers
                    $teachers = array(
                        'Teacher 1',
                        'Teacher 2',
                        'Teacher 3',
                        'Teacher 4',
                        'Teacher 5'
                    );

                    // create array of 5 subjects
                    $subjects = array(
                        'Subject 1',
                        'Subject 2',
                        'Subject 3',
                        'Subject 4',
                        'Subject 5'
                    );

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
                                @foreach ($columns as $column)
                                    <x-td>
                                        <select name="{{ $column }}_subject" id="{{ $column }}_subject">
                                            <option value="">Select Subject</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject }}">{{ $subject }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <select name="{{ $column }}_teacher" id="{{ $column }}_teacher">
                                            <option value="">Select Teacher</option>
                                            @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher }}">{{ $teacher }}</option>
                                            @endforeach
                                        </select>
                                    </x-td>
                                @endforeach
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>