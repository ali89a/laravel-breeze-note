<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        @if(!empty($notes))
                        @foreach($notes as $row)

                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <h4 class="underline text-gray-900 dark:text-white">{{ $row->title }}</h4>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{ $row->note }}
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>