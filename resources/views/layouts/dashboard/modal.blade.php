<div x-data="modal">
    <button class="btn btn-primary mr-1 mt-4" @click="toggle">Tambah Data</button>
    <div class="fixed w-full h-full top-0 z-50" x-show="open">
        <span x-show.transition="open" x-bind="backdropTransition"
            class="fixed bg-secondary-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
        <!-- Mobile navbar -->
        <nav class="fixed inset-x-0 w-auto max-w-lg mx-auto my-6 z-40 mt-4">
            <div x-show.transition="open" x-bind="modalFadeInUpTransition">
                <div
                    class="flex flex-col w-full bg-white dark:bg-dark-card dark:border-secondary-800 border rounded-lg shadow-lg outline-none focus:outline-none">
                    <div
                        class="flex p-4 border-b border-secondary-200 dark:border-secondary-800 border-solid rounded-t">
                        <h5 class="mx-0 text-xl dark:text-white">Modal title</h5>
                        <button type="button"
                            class="px-6 py-2 m-1 ml-auto -mt-2 -mb-2 -mr-2 text-lg font-semibold text-center dark:text-secondary-600 text-black bg-transparent rounded b-0"
                            @click="toggle">X</button>
                    </div>
                    <div class="flex-auto p-4 text-secondary-600">I will not close if you click outside
                        me. Don't even try to press
                        escape key.</div>
                    <div
                        class="flex flex-wrap justify-end p-2 border-t border-secondary-200 dark:border-secondary-800 border-solid">
                        <button type="button" class="btn bg-secondary-600 hover:bg-secondary-700 text-white mr-1"
                            @click="toggle">Close</button>
                        <button type="button" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
