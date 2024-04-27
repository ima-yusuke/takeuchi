
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



