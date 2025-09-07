<x-app-layout>

    <div class="py-5">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 text-gray-900">
                    <x-category-tabs />
                </div>
            </div>
            <div class="mt-8">
                @forelse ($posts as $p)
                    <x-post-item :post="$p"></x-post-item>
                @empty 
                    <div>
                        <p class="text-center text-gray-400 py-16">No posts were found.</p>
                    </div>
                @endforelse
            </div>

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
