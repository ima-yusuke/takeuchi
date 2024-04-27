<ul class="flex justify-center gap-4 mt-4">
    <li class="side_li">
        <a href="{{ route("open_home") }}" id="name-search-link-home" class="text-2xl flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <input type="radio" id="name-search-radio-home">名前検索
        </a>
    </li>
    <li class="side_li">
        <a href="{{ route("open_address") }}" id="address-search-link" class="text-2xl flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <input type="radio" id="address-search-radio">住所検索
        </a>
    </li>
</ul>

<script>
    // 名前検索リンク要素を取得
    const nameSearchLink = document.getElementById('name-search-link-home');
    // 名前検索ラジオボタン要素を取得
    const nameSearchRadio = document.getElementById('name-search-radio-home');
    // 住所検索リンク要素を取得
    const addressSearchLink = document.getElementById('address-search-link');
    // 住所検索ラジオボタン要素を取得
    const addressSearchRadio = document.getElementById('address-search-radio');

    window.addEventListener('DOMContentLoaded', function() {
        // 現在のURLを取得
        const currentUrl = window.location.pathname;

        // ページが '/' の場合
        if (currentUrl === '/') {
            // 名前検索ラジオボタンにチェックを入れる
            nameSearchRadio.checked = true;
        }else if(currentUrl === '/open-address'){
            addressSearchRadio.checked = true;
        }
    });

    // 名前検索ラジオボタンがクリックされたときの処理
    nameSearchRadio.addEventListener('click', function() {
        // 名前検索リンクをクリックする
        nameSearchLink.click();
    });

    // 住所検索ラジオボタンがクリックされたときの処理
    addressSearchRadio.addEventListener('click', function() {
        // 住所検索リンクをクリックする
        addressSearchLink.click();
    });
</script>
