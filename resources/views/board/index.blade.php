<div class="flex">
    <!-- Navigation -->
    <x-navigation :project='$project'/>
    
    <x-app-layout>

        <div class="dark:text-gray-300">
        
            {{-- header --}}
            <x-slot name="header">
                <div class="flex items-center ml-[56px] md:ml-0">
                    {{-- toggle nav --}}
                    <x-toggle-nav style="mr-2 py-1.5"/>
                    {{ __('Board') }}
                </div>
            </x-slot>

            {{-- project title --}}
            <div class="flex items-center justify-between px-4 py-1.5 shadow bg-indigo-500 dark:bg-indigo-900">
                <p class="font-medium text-lg text-white">{{ $project->title }}</p>
                <div class="flex items-center gap-2 bg-white p-2 rounded-md shadow-sm border text-sm dark:bg-neutral-900 dark:border-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span>{{ $project->deadline }}</span>
                </div>
            </div>

            {{-- board --}}
            <x-tasks-board :project="$project" :tasks="$project->tasks"/>

        </div>

    </x-app-layout>
</div>
