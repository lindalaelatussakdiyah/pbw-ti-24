@extends('layouts.main');

@section('content')
    <h1>Tambah Mahasiswa </h1>
        <div class="card">
        <div class="card-body">
            <from action="insertdata" method="POST" enctype="multipart/from-data">
                @csrf
                <div class="mb-3">
                    <table for="nama" class="from-label">nama</label>
                    <input type="text" name="nama" id="nama" class="from-control">
                </div>
                <div class="mb3">
                    <table for="nim" class="from-label">Nomor Induk (NIM):</label>
                    <input type="number" name="nim" id="nim" class="from-control">
                </div>
                <div class="mb3">
                    <table for="prodi" class="from-label">Program Studi</label>
                    <input type="text" name="prodi" id="prodi" class="from-control">
                </div>
                 <div class="mb3">
                    <table for="email" class="from-label">Email</label>
                    <input type="text" name="email" id="email" class="from-control">
                </div>
                <div class="mb3">
                    <table for="nohp" class="from-label">Nomor Handphone</label>
                    <input type="number" name="nohp" id="nohp" class="from-control">
                </div>

 