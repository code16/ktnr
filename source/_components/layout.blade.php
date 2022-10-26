@props([
    'page' => null,
    'activeNav' => null,
    'container' => true,
])

@extends('_layouts.app', [
    'page' => $page ?? \Illuminate\Container\Container::getInstance()->get('pageData')->page,
])
