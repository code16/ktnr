@props([
    'page' => null,
    'activeNav' => null,
    'container' => true,
    'title' => null,
])

@extends('_layouts.app', [
    'page' => $page ?? app('pageData')->page,
])
