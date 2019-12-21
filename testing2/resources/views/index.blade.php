@extends('layouts/main')

@section('title', 'Hefa Computer')
@section('iniIsi')

<div class="iniIsi">
    <div class="container">
        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <div class="section">
            <div class="box">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input has-text-centered" type="search" placeholder="--- Find Product You Need ---">
                    </div>
                    <div class="control">
                        <a class="button is-info">Search</a>
                    </div>
                </div>
            </div>
            
            <div class="row columns is-multiline">
                @foreach( $products as $product )
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="{{ URL::to('/') }}/img/{{ $product->gambar }}" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="{{ URL::to('/') }}/img/{{ $product->gambar }}" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">{{ $product->merek }}</p>
                                    <p><span class="title is-6">
                                        <a href="">{{ $product->merek }}</a>
                                         - 
                                        <a href="">{{ $product->katalog }}</a>
                                    </span></p>
                                    <p class="subtitle is-6">Rp {{ number_format($product->harga, 2, ',', '.') }}-</p>
                                    <a href="{{ url('/detail') }}/{{ $product->id }}" class="button is-link modal-button">Detail</a>
                                </div>
                            </div>
                            <p>{{ $product->seri }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<a class="myBtn" href="#top" onclick="scrollToTop();return false">▲</a>
<script src="{{ asset('js/bulma.js') }}"></script>