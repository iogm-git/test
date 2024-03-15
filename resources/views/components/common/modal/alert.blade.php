<div class="fixed inset-0 flex items-center justify-center z-[55]" style="background-color: rgba(0, 0, 0, .5)">
    <div
        class="min-w-[50vw] min-h-[50vh] h-max w-max max-w-[90vw] max-h-[90vh] bg-gray-50 p-8 box-border rounded-lg grid auto-rows-max gap-8 border border-gray-300">
        <div class="bg-red-600 text-red-100 text-sm font-bold hover:outline hover:outline-4 hover:outline-red-100 max-w-6 w-6 max-h-6 h-7 flex rounded-full cursor-pointer"
            style="place-self: center end" onclick="this.parentElement.parentElement.remove()">
            <p class="m-auto mt-[.1px]">&times;</p>
        </div>
        <div class="p-4 border border-gray-200 rounded overflow-auto max-h-[50vh]">
            <div class="grid place-items-center">
                {!! $content !!}
            </div>
        </div>
    </div>
</div>
