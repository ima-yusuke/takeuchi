<x-layout title="お名前検索">
    <x-header></x-header>

    <h1 class="text-xl text-red-600">あいうえお順に表示</h1>
    <section>
        <table>
            <thead>
            <tr>
                <th>/</th>
                <th>氏名</th>
                <th>住所</th>
                <th>金額</th>
                <th>備考</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
                <tr>
                    <td>{{$value["id"]}}</td>
                    <td>{{$value["name"]}}</td>
                    <td>{{$value["address"]}}</td>
                    <td>{{$value["price"]}}</td>
                    <td>{{$value["note"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <div class="screen_cover"></div>
</x-layout>
