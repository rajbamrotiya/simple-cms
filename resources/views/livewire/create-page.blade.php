<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Add page</h1>
                <p class="mt-2 text-sm text-gray-700">Fill all form detail</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="/page"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    Back To List
                </a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <form wire:submit.prevent="save">
                        <div class="mb-6">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Parent
                                Page</label>
                            <select wire:model="page.parent_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select Parent"
                                    required>
                                <option value="0">No Parent</option>
                                @foreach($pages as $page)
                                    <option value="{{ $page->id }}">{{ Str::ucfirst($page->title) }}</option>
                                @endforeach


                            </select>
                            @error('page.title') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-6">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Page
                                Title</label>
                            <input type="text"
                                   wire:model="page.title"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Title"
                                   required="">
                            @error('page.title') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Page
                                Slug</label>
                            <input type="text"
                                   wire:model="page.slug"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Slug" required="">
                            @error('page.slug') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Page
                                Content</label>
                            <textarea
                                   wire:model="page.content"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Content" required="">
                            </textarea>
                            @error('page.content') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex items-center justify-start space-x-4">
                            <a href="/page" class="text-gray-900  font-medium  text-sm ">Back</a>
                            <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
