<x-layout title="お名前検索">
    <x-header></x-header>

    <div class="overflow-y-auto overflow-x-auto shadow-md sm:rounded-lg mb-6 h-[700px]">
        {{--table--}}
            <table class="whitespace-nowrap mb-8 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th class="text-2xl sticky top-0 left-0 z-10 px-1 py-3 bg-gray-50">
                        氏名
                    </th>
                    <th class="text-2xl sticky top-0 left-0 px-2 py-3 bg-gray-50">
                        住所
                    </th>
                    <th class="text-2xl sticky top-0 left-0  px-2 py-3 bg-gray-50">
                        備考1
                    </th>
                    <th class="text-2xl sticky top-0 left-0  px-2 py-3 bg-gray-50">
                        金額
                    </th>
                    <th class="text-2xl sticky top-0 left-0  px-2 py-3 bg-gray-50">
                        備考2
                    </th>
                    <th class="text-2xl sticky top-0 left-0  px-2 py-3 bg-gray-50">
                        備考3
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $value)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="sticky left-0 z-1 bg-gray-50 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="text-xl flex justify-center items-center">
                                {{$value["name"]}}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            <div class="text-xl flex justify-center items-center">
                                {{$value["address"]}}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            <div class="text-xl flex justify-center items-center">
                                {{$value["note1"]}}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            <div class="text-xl flex justify-center items-center">
                                ¥{{number_format((int)$value["money"])}}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            <div class="text-xl flex justify-center items-center">
                                {{$value["note2"]}}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            <div class="text-xl flex justify-center items-center">
                                @if(isset($value["note3"]))
                                    {{$value["note3"]}}
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>


    <div class="screen_cover"></div>
</x-layout>


