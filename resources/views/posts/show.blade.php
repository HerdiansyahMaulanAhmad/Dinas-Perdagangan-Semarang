<x-app-layout>
    <article class="bg-white min-h-screen">
        <!-- Header -->
        <header class="bg-navy-900 py-16">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-base font-semibold text-gold-500 tracking-wide uppercase">
                    {{ $post->category->name ?? 'Berita' }}
                </p>
                <h1 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    {{ $post->title }}
                </h1>
                <p class="mt-4 text-gray-300">
                    Dipublikasikan pada {{ \Carbon\Carbon::parse($post->published_at ?? now())->format('d F Y') }}
                </p>
            </div>
        </header>

        <!-- Content -->
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="prose prose-lg prose-indigo mx-auto text-gray-500">
                {!! nl2br(e($post->content)) !!}
            </div>

            <div class="mt-12 border-t border-gray-200 pt-8">
                <a href="{{ route('posts.index') }}" class="text-navy-900 font-medium hover:text-gold-600 transition">
                    &larr; Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </article>
</x-app-layout>