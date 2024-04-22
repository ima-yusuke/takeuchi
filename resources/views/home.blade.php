<x-layout title="お名前検索">
    {{--メインパート--}}

    <x-header></x-header>
    <div class="flex flex-col justify-center items-center gap-6 min-h-full h-auto">
        <form action="{{route('search_data')}}" method="post" class="search-form-1" id="search-form">
            @csrf
            <label>
                <input type="text" placeholder="お名前..." name="name" id="search-input">
            </label>
            <button type="submit" aria-label="検索"></button>
        </form>

        @if(isset($selectedData))
            <p class="text-4xl font-bold">{{count($selectedData)}}件</p>
            <div class="flex flex-col items-center gap-6">
                @foreach($selectedData as $key=>$value)
                    <div class="card card-skin">
                        <div class="card__imgframe h-[150px] bg-gray-300 flex flex-col items-center justify-center gap-2">
                            <p class="text-xl">【{{$value["address"]}}】</p>
                            <p class="text-4xl">{{$value["name"]}}</p>
                            <p class="text-2xl">¥{{number_format((int)$value["money"])}}</p>
                        </div>
                        <div class="card__textbox">
                            <div class="card__titletext">
                                <p>備考①：{{$value["note1"]}}</p>
                                <p>備考②：{{$value["note2"]}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>



    <div class="screen_cover"></div>
{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function() {--}}
{{--            const searchInput = document.getElementById('search-input');--}}

{{--            searchInput.addEventListener('keypress', function(event) {--}}
{{--                // Enterキーが押されたかを確認--}}
{{--                if (event.key === 'Enter') {--}}
{{--                    // フォームのデフォルトの送信を阻止する--}}
{{--                    event.preventDefault();--}}

{{--                    // ここに呼び出したい関数を記述する--}}
{{--                    searchFunction();--}}
{{--                }--}}
{{--            });--}}

{{--            function searchFunction() {--}}
{{--                // ここに検索を実行するコードを記述する--}}
{{--                document.getElementById('search-form').submit();--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
</x-layout>


