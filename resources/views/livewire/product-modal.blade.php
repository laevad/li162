<div class="fixed z-1 w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="fixed w-full h-full bg-gray-500 opacity-50"></div>
    <div class="relative  bg-white p-8 mx-auto rounded-xl flex flex-col items-center">
        <div  class="relative w-auto">
            <div class="flex flex-shrink-0 items-center justify-between border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800">{{ $isEdit ? 'Update Product' : 'Add new product' }}</h5>
            </div>
            <div class="relative p-4">
                <div class="mb-4">
                    <input
                        wire:model="productState.name"
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Product Name"
                    />
                </div>
                <div class="mb-4">
                    <input
                        wire:model="productState.price"
                        type="number"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Price"
                    />
                </div>
                <div class="mb-4">
                    <input
                        wire:model="productState.description"
                        type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Description"
                    />
                </div>
            </div>
            <div  class="flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button
                    wire:click="closeModal"
                    type="button"
                    class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Close</button>
                <button
                    wire:click.prevent="{{ $isEdit ? 'update' : 'store' }}"
                    type="button"
                    class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Save</button>
            </div>
        </div>

    </div>
</div>

