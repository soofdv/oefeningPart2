<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 6/2/2021
 * Time: 5:01 PM
 */
?>
{{--@extends('layouts.app)--}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Home Page
        </h2>
    </x-slot>

    <div class="container" style="margin-top: 4rem">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    @foreach($competitions as $competition)
                        <h3>{{$competition->name}}</h3>
                        <p>{{$competition->description}}</p>
                        <p>{{$competition->date}}</p>
                    @endforeach
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Round</th>
                        <th scope="col">Name</th>
                        <th scope="col">School</th>
                        <th scope="col">Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                        <tr>
                            <th scope="row">-</th>
                            <td>{{$player->name}}</td>
                            <td>{{$player->school->name}}</td>
                            <td>-</td>
                        </tr>
                    @endforeach
                    <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
