<x-layout title="お名前検索">
    {{--メインパート--}}

    <x-header></x-header>
    <div class="flex flex-col justify-center items-center gap-6 min-h-full h-auto">
        <form action="{{route('search_data')}}" method="post" class="search-form-1">
            @csrf
            <label>
                <input type="text" placeholder="お名前..." name="name">
            </label>
            <button type="submit" aria-label="検索"></button>
        </form>

        @if(isset($selectedData))
        <div>
            <ul>
                <li class="text-2xl">住所：{{$selectedData["address"]}}</li>
                <li class="text-2xl">備考1：{{$selectedData["note1"]}}</li>
                <li class="text-2xl">氏名：{{$selectedData["name"]}}</li>
                <li class="text-2xl">金額：{{$selectedData["money"]}}</li>
                <li class="text-2xl">備考2：{{$selectedData["note2"]}}</li>
            </ul>
        </div>
        @endif
    </div>



    <div class="screen_cover"></div>
</x-layout>


