<!--Overlay-->
<div style="background-color: rgba(0,0,0,0.5)" class="fixed inset-0">
    <!--Dialog-->
    <div class="bg-white w-11/12 md:max-w-md m-auto rounded shadow-lg py-4 text-left px-6 h-48 fixed inset-0">

        <!--Title-->
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Are you sure?</p>
            <div class="cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>

        <!-- content -->
        <p>If you proceed, your account will be deleted entirely</p>

        <!--Footer-->
        <div class="flex justify-end pt-8">
            <button
                class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Cancel</button>
            <button
                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Continue</button>
        </div>


    </div>
    <!--/Dialog -->
</div>
