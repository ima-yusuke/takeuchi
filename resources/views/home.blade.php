<x-layout title="お名前検索">
    {{--メインパート--}}
    @if(!isset($selectedData))
        <x-header></x-header>
        <div class="flex flex-col justify-center items-center min-h-full h-auto">

                <form action="{{route('search_data')}}" method="post" class="search-form-1">
                    @csrf
                    <label>
                        <input type="text" placeholder="お名前..." name="name">
                    </label>
                    <button type="submit" aria-label="検索"></button>
                </form>

        </div>
    @endif

    @if(isset($selectedData))
        <div class="flex flex-col justify-center items-center h-full">
            <div class="absolute top-0 left-0 z-30">
                <x-header></x-header>
            </div>
        <div class="container h-full">

            <a href="#" class="card">
                <div class="touch touch__1"></div>
                <div class="touch touch__2"></div>
                <div class="touch touch__3"></div>
                <div class="touch touch__4"></div>
                <div class="touch touch__6"></div>
                <div class="touch touch__7"></div>
                <div class="touch touch__8"></div>
                <div class="touch touch__9"></div>
                <div class="main">
                    <div class="icon">
                        <img class="img" src="https://pbs.twimg.com/profile_images/1568001848795353088/6IicRRIF_400x400.jpg" alt="">
                    </div>

                    <span class="name">{{$selectedData['name']}}</span>
                    <span class="account">{{$selectedData['address']}} / {{$selectedData['note1']}}</span>
                    <span class="link text">{{$selectedData['money']}}</span>
                    <span class="comment text">{{$selectedData['note2']}}</span>
                </div>
            </a>

            <div class="circle circle_1"></div>
            <div class="circle circle_2"></div>
            <div class="circle circle_3"></div>
            <div class="circle circle_4"></div>
            <div class="circle circle_5"></div>
            <div class="circle circle_6"></div>
            <div class="circle circle_7"></div>
            <div class="circle circle_8"></div>
        </div>
        </div>
   @endif

    <div class="screen_cover"></div>
</x-layout>


