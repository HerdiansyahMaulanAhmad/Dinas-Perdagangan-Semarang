<x-app-layout>
    <div class="bg-navy-900 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-gold-500 font-semibold tracking-wide uppercase">Kabar Dinas</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Berita & Artikel
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                    Informasi terbaru seputar kegiatan dan kebijakan Dinas Perdagangan.
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white">
                        <div class="flex-shrink-0">
                            <!-- Placeholder Image -->
                            <div class="h-48 w-full bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">Image</span>
                            </div>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gold-600">
                                    {{ $post->category->name ?? 'Umum' }}
                                </p>
                                <a href="{{ route('posts.show', $post->id) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $post->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500 line-clamp-3">
                                        {{ Str::limit($post->content, 100) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="text-sm text-gray-500">
                                    <time datetime="{{ $post->published_at }}">
                                        {{ \Carbon\Carbon::parse($post->published_at ?? now())->format('d M Y') }}
                                    </time>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>