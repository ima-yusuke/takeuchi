<x-layout title="お名前検索">

    <x-header></x-header>

    {{--メインパート--}}
    <div class="flex flex-col justify-center items-center min-h-full h-auto">
        <form action="{{route('search_data')}}" method="post" class="search-form-1">
            @csrf
            <label>
                <input type="text" placeholder="お名前..." name="name">
            </label>
            <button type="submit" aria-label="検索"></button>
        </form>

        @if(isset($selectedData))
            <ul>
                <li>氏名:{{$selectedData['name']}}</li>
                <li>住所：{{$selectedData['address']}}</li>
                <li>金額：{{$selectedData['money']}}</li>
                <li>備考：{{$selectedData['note1']}}</li>

            </ul>
        @endif
    </div>

    <div class="screen_cover"></div>
</x-layout>


