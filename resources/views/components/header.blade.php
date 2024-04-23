<!-- drawer component -->
<div class="side_wrapper">
    <div class="side_menu_off pt-4">
        <h5 class="text-xl font-semibold text-gray-500 px-5 pt-2">メニュー</h5>
        <button type="button" class="side_li text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center" >
            <svg aria-hidden="true" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div class="pt-12 overflow-y-auto ml-2">
            <ul class="space-y-4 font-medium">
                <li class="side_li">
                    <a href="{{route("open_home")}}" class="text-2xl flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <i class="fa-solid fa-magnifying-glass"></i><span class="ms-3">名前検索</span>
                    </a>
                </li>
                <li class="side_li">
                    <a href="{{route("open_address")}}" class="text-2xl flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <i class="fa-solid fa-house"></i><span class="ms-3">住所検索</span>
                    </a>
                </li>
                <li class="side_li">
                    <a href="{{route("open_lists")}}" class="text-2xl flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <i class="fa-solid fa-users"></i><span class="ms-3">一覧表示</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

{{--ハンバーガーボタン--}}
<div>
    <i class="hamburger fa-solid fa-bars text-4xl mb-4 px-4 py-2.5 border border-solid border-gray-300 rounded-md hover:bg-sky-100 hover:cursor-pointer"></i>
</div>
