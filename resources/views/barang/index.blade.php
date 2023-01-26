@extends('layouts.main')
@section('container')
<a href="/barang/tambah">
<div class="flex flex-row-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
        </div>
</a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nama Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Merk Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Total Barang
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    No Seri Pabrik    
                </th>
                <th scope="col" class="px-20 py-8 bg-gray-50 dark:bg-gray-800">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{$key->nama_barang}}
                </th>
                <td class="px-6 py-4" >
                    {{$key->merk_barang}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{$key->total_barang}}
                </td>
                <td class="px-6 py-4" >
                    {{$key->no_seri_pabrik}}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    <a href="/barang/edit/{{$key->id_barang}}">
                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                    </a>
                    <a href="/barang/hapus/{{$key->id_barang}}">69
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </a>
                </td>
            </tr>  
            @endforeach
        </tbody>
    </table>
   
</div>