@extends('layouts.main');

@section('content')
    <h1>Edit Data Mahasiswa </h1>
        <div class="card">
        <div class="card-body">
            <from action="/edit data/" method= "POST" enctype="multipart/from-data">
                @csrf
                <div class="mb-3">
                    <table for="nama" class="from-label">nama</label>
                    <input type="text" name="nama" id="nama" value=" {{ $data['name'] }} " "from-control">
                </div>
                <div class="mb3">
                    <table for="nim" class="from-label">Nomor Induk (NIM):</label>
                    <input type="number" name="nim" id="nim" value=" {{ $data[prodi] }}"from-control">
                </div>
                <div class="mb3">
                    <table for="prodi" class="from-label">Program Studi</label>
                    <input type="text" name="prodi" id="prodi" value=" "from-control">
                </div>
                 <div class="mb3">
                    <table for="email" class="from-label">Email</label>
                    <input type="text" name="email" id="email" value="from-control">
                </div>
                <div class="mb3">
                    <table for="nohp" class="from-label">Nomor Handphone</label>
                    <input type="number" name="nohp" id="nohp" value ="from-control">
                </div>

 