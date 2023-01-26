@extends('layouts.main')
@section('container')
<form action="/barang/editsimpan" method="POST">
@csrf
  <div class="mb-6">
    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama barang</label>
    <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('nama', $edit->nama_barang) }}" required>
    <input type="hidden" name="id_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $edit->id_barang }}" required>
  </div>
  <div class="mb-6">
    <label for="Merk Barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk Barang</label>
    <input type="text" name="merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('merk', $edit->merk_barang) }}" required>
  </div>
  <div class="mb-6">
    <label for="total_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Barang</label>
    <input type="number" name="total_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('telepon', $edit->telepon_barang) }}" required>
  </div>
  <div class="mb-6">
    <label for="no_seri_pabrik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Seri Pabrik</label>
    <input type="text" name="no_seri_pabrik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('no_seri_pabrik', $edit->no_seri_pabrik) }}" required>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection