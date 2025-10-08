@extends('app')

@section('title', 'Create Class Session')

@section('content')
    <div class="flex flex-col gap-[25px] justify-center items-center bg-white rounded-2xl shadow-2xl max-w-[800px] mx-auto mt-[40px] p-[30px]">
        <h1 class="font-bold text-[18px]">Create Class Session</h1>
        <form class="flex flex-col w-full gap-[25px]" action="{{ route('timetables.session-groups.store', $timetable) }}" method="POST">
            @csrf

            <!-- Horizontal row for main fields -->
            <div class="flex gap-5 w-full">
                <x-input.text
                    label="Session Letter"
                    name="session_name"
                    class="flex-1"
                />

                <x-input.select
                    label="Academic Program"
                    name="academic_program_id"
                    :options="$academic_program_options"
                    class="flex-1"
                />

                <x-input.select
                    label="Year Level"
                    name="year_level"
                    :options="$year_level_options"
                    class="flex-1"
                />
            </div>

            <!-- Text area -->
            <x-input.text-area
                label="Short Description"
                name="short_description"
                rows="3"
                class="w-full"
            />

            <!-- Buttons -->
            <div class="flex justify-between w-full mt-[15px]">
                <a href="{{ route('timetables.session-groups.index', $timetable) }}">
                    <button type="button" class="pt-[8px] pb-[8px] pl-[16px] pr-[16px] rounded-[10px] text-[14px] bg-[#aaa] text-[#fff] cursor-pointer font-[600]">
                        Back
                    </button>
                </a>

                <button type="submit" class="pt-[8px] pb-[8px] pl-[16px] pr-[16px] rounded-[10px] text-[14px] bg-[#5e0b0b] text-[#fff] cursor-pointer font-[600]">
                    Add
                </button>
            </div>
        </form>
    </div>
@endsection
