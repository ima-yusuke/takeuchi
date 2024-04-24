<x-layout title="お名前検索">
    <div class="flex flex-col justify-center items-center h-full">
        <div class="container h-full">
            <a class="card">
{{--                タッチすると動く機能--}}
{{--                <div class="touch touch__1"></div>--}}
{{--                <div class="touch touch__2"></div>--}}
{{--                <div class="touch touch__3"></div>--}}
{{--                <div class="touch touch__4"></div>--}}
{{--                <div class="touch touch__6"></div>--}}
{{--                <div class="touch touch__7"></div>--}}
{{--                <div class="touch touch__8"></div>--}}
{{--                <div class="touch touch__9"></div>--}}
                <div class="main">
                    <div class="icon flex justify-center items-center">
                        <img src="{{asset("/flag.svg")}}" alt="">
                    </div>

                    <span class="name text-xl">パスワード</span>
                    <form action="{{ route('login_try') }}" method="POST">
                        @csrf
                        <input type="password" name="password" class="my-4 text-black" placeholder="password">
                        <span class="link text"><button type="submit">ログイン</button></span>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
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
</x-layout>

