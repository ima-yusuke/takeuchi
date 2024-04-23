<x-layout title="お名前検索">
    {{--メインパート--}}

    <x-header></x-header>
    <div class="flex flex-col justify-center items-center gap-6 min-h-full h-auto">
        <form action="{{route('search_address')}}" method="post" class="search-form-1" id="search-form">
            @csrf
            <select name="address" id="address-select" class="text-2xl">
                <option>住所を選択してください</option>
                @foreach($addressOptions as $value)
                    <option value="{{$value}}">{{$value}}</option>
                @endforeach
            </select>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addressSelect = document.getElementById('address-select');

                // セレクトボックスが変更されたときのイベントリスナーを追加
                addressSelect.addEventListener('change', function() {
                    // フォームを送信
                    document.getElementById('search-form').submit();
                });
            });
        </script>
</x-layout>


