<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Pages Tree View</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the pages in Tree View.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="/page/add"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    Add Page
                </a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <!-- Breadcrumb -->
                    <nav
                        class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                        aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a
                                    class="ml-1 text-sm font-medium text-gray-500 w-full inline-block md:ml-2 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg p-6 mt-5">
                        <ul class="py-6 px-5" style="list-style: numeric;">
                            <?php
                            /** @var \App\Models\Page $page */
                            ?>
                            @foreach($pages as $page)
                                @php
                                    $parentSlug = '/'.urlencode($page->slug);
                                @endphp
                                <li>
                                    <a class="text-blue-500 hover:text-blue-800" href="{{$parentSlug}}">
                                        {{ Str::ucfirst($page->title) }}
                                    </a>
                                    @if(count($page->children))
                                        @include('livewire._.page-child',['children' => $page->children,'parentSlug'=>$parentSlug])
                                    @endif
                                </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

