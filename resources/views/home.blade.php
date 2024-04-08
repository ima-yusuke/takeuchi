<x-layout title="お名前検索">

    <!-- drawer component -->
    <div class="side_wrapper">
        <div class="side_menu_off pt-4">
            <h5 class="text-base font-semibold text-gray-500 px-5">メニュー</h5>
            <button type="button" class="side_li text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>

            <div class="py-4 overflow-y-auto">
                <ul class="space-y-2 font-medium">
                    <li class="side_li">
                        <a href="{{route("add_person")}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="ms-3">新規登録</span>
                        </a>
                    </li>
                    <li class="side_li">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="ms-3">一覧表示</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{--ハンバーガーボタン--}}
    <div>
        <i class="hamburger fa-solid fa-bars px-4 py-2.5 border border-solid border-gray-300 rounded-md hover:bg-sky-100 hover:cursor-pointer"></i>
    </div>

    {{--メインパート--}}
    <div class="flex flex-col justify-center items-center min-h-full h-auto">
        <form action="#" class="search-form-1">
            <label>
                <input type="text" placeholder="Enter name">
            </label>
            <button type="submit" aria-label="検索"></button>
        </form>
    </div>

    <div class="screen_cover"></div>
</x-layout>

<script>
    let hamburger = document.getElementsByClassName("hamburger")[0];
    let side_menu = document.getElementsByClassName("side_menu_off")[0];
    let main = document.getElementsByTagName("body")[0];
    let flag = false;

    // 画面グレー&サイドメニュー表示
    hamburger.addEventListener("click",function (){
        // 画面背景色グレーに
        let screen_cover = document.getElementsByClassName("screen_cover")[0];
        screen_cover.classList.add("popup-bg-cover");

        // サイドメニュー表示
        side_menu.classList.remove("side_menu_off")
        side_menu.classList.add("side_menu_show")

        // mainをスクロール不可に
        main.classList.add("scroll_none")

        // flag = true;

    })

    // メニューのいずれかもしくは✗クリック時に画面グレー&サイドメニュー非表示
    let side_li = document.getElementsByClassName("side_li");
    for(let i= 0; i<side_li.length;i++){
        side_li[i].addEventListener("click",function (e){
            let screen_cover = document.getElementsByClassName("screen_cover")[0];
            screen_cover.classList.remove("popup-bg-cover");

            side_menu.classList.remove("side_menu_show")
            side_menu.classList.add("side_menu_off")

            main.classList.remove("scroll_none")
        })
    }

    // サイドメニューの外をクリックしたらサイドメニュー閉じる
    document.addEventListener("click",function (e){
        if((!e.target.closest('div.side_wrapper'))&& e.target!==hamburger) {
            let screen_cover = document.getElementsByClassName("screen_cover")[0];
            screen_cover.classList.remove("popup-bg-cover");

            side_menu.classList.remove("side_menu_show")
            side_menu.classList.add("side_menu_off")

            main.classList.remove("scroll_none")
        }
    })


</script>
