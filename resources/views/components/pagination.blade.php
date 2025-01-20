<div class="flex flex-row justify-between items-center p-3">
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Menampilkan <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->firstItem() }}</span> hingga <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->lastItem() }}</span> dari <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->total() }}</span> data
    </span>
    <div class="inline-flex xs:mt-0 gap-2 ">
        @if ($paginator->onFirstPage())
            <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800  cursor-not-allowed rounded-lg" disabled>
                <
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800  hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white rounded-lg">
                <
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white rounded-lg">
                >
            </a>
        @else
            <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 cursor-not-allowed rounded-lg" disabled>
                >
            </button>
        @endif
    </div>
</div>
