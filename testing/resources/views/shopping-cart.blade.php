@extends('main')

@section('title', 'Detail')
@section('iniIsi')

<div class="iniIsi">
    <div class="container">
        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <section class="hero is-fullheight is-default is-bold">
            <div class="hero-body">
                <div class="container inidetail">
                    <div class="columns is-vcentered jarak">
                        <div class="column is-5 has-text-centered">
                            <figure class="image">
                                <img src="{{ URL::to('/') }}/img/{{ $product->gambar }}">
                            </figure>
                        </div>
                        <br>
                        <div class="column is-6 is-offset-1">
                            <h1 class="title is-2 has-text-centered">{{ $product->seri }}</h1>
                            <h2 class="subtitle is-4 has-text-centered">{{ $product->merek }}</h2>
                            <p class="has-text-justified">
                                <div class="has-text-weight-bold">Spesifikasi:</div>
                                <div class="has-text-justified">{{ $product->spek }}</div>
                            </p>
                            <p class="has-text-justified">
                                <div class="has-text-weight-bold">Socket:</div>
                                <div class="has-text-justified">{{ $product->socket }}</div>
                            </p>
                            <br><br>
                            <div class="columns is-vcentered has-text-centered">
                                <div class="column has-text-weight-bold">
                                    Rp {{ number_format($product->harga, 2, ',', '.') }}-
                                </div>
                                <div class="column">
                                    <a class="button is-medium is-info is-outlined">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>