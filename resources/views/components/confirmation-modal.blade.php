@props(['name'])

<div x-data="{ show: false }" x-show="show" @hashchange.window="
    show = (location.hash === '#{{ $name }}')
">
    <!--Overlay-->
    <div style="background-color: rgba(0,0,0,0.5)" class="fixed inset-0">
        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md m-auto rounded shadow-lg py-4 text-left px-6 h-48 fixed inset-0">

            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">{{ $title }}</p>
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
            {{ $body }}

            <!--Footer-->
            <div class="flex justify-end pt-8">
                {{ $footer }}
            </div>


        </div>
        <!--/Dialog -->
    </div>
</div>
