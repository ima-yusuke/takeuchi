<x-layout title="お名前検索">
    <x-header></x-header>

    {{--メインパート--}}
    <div class="flex flex-col justify-center items-center gap-6 min-h-full h-auto">
        <form action="{{route('search_data')}}" method="post" class="mb-8 search-form-1" id="search-form">
            @csrf
            <label>
                <input type="text" class="text-xl" placeholder="お名前" name="name" id="search-input">
            </label>
            <button type="submit" class="text-4xl" aria-label="検索"></button>
        </form>


        @if(isset($selectedData))
            <p class="text-4xl font-bold">{{count($selectedData)}}件</p>
            <div class="flex flex-col items-center gap-6">
                @foreach($selectedData as $key=>$value)
                    <div class="card card-skin">
                        <div class="card__imgframe h-[200px] bg-gray-300 flex flex-col items-center justify-center gap-4">
                            <p class="text-xl">【 {{$value["address"]}} 】</p>
                            <aside class="flex flex-col gap-1">
                                <p class="text-xl">{{$value["note1"]}}</p>
                                <p class="text-4xl">{{$value["name"]}}</p>
                            </aside>
                            <p class="text-2xl font-bold">¥{{number_format((int)$value["money"])}}</p>
                        </div>
                        <div class="card__textbox">
                            <div class="text-xl flex flex-col gap-1">
                                @if(isset($value["note2"]))
                                    <p class="px-1">・{{$value["note2"]}}</p>
                                @endif
                                @if(isset($value["note3"]))
                                    <p class="px-1">・{{$value["note3"]}}</p>
                                @endif
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


