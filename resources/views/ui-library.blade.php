@extends('layouts.template')
@section('title', 'Bievenido al panel')

@section('content') 
<!--** 
    * FONT
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Fonts</div>

        <h1>h1 Head</h1>

        <h2>h2 Title</h2>

        <h3>h3 Call to action</h3>

        <p>p Paragraphs and paragraphs</p>

        <p class="p--description">p--description A little description</p>

    </div>
<!--** 
    * BUTTON
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Buttons</div>
        <div id="container--temp">
    <!-- ||| BUTTONS OVER WHITE ||| -->
        <!-- 1 Positive -->
            <button class="button--positive-ow">
                Positive
            </button>
        <!-- 2 Negative-->
            <button class="button--negative-ow">
                Negative
            </button>
        <!-- 3 Neutral-->
            <button class="button--neutral-ow">
                Neutral
            </button>
        <!-- 4 Whatsapp-->
            <button class="button--whatsapp-ow">
                Whatsapp 
                <img src="img/social-media/whatsapp-w.svg">
            </button>
        <!-- 5 Alternative-->
            <button class="button--alternative-ow">Alternative</button>
    <!-- ||| BUTTONS OVER WHITE ||| -->
        </div><div id="container--temp" class="onblue">
    <!-- ||| BUTTONS OVER BLUE ||| -->
        <!-- 1 Positive button over blue -->
            <button class="button--positive-ob">
                Positive
            </button>
        <!-- 2 Negative button over blue -->
            <button class="button--negative-ob">
                Negative
            </button>
        <!-- 3 Neutral button over blue -->
            <button class="button--neutral-ob">
                Neutral
            </button>
        <!-- 4 Whatsapp button over blue -->
            <button class="button--whatsapp-ob">
                Whatsapp
                <img src="img/social-media/whatsapp-w.svg" alt="">
            </button>
    <!-- ||| BUTTONS OVER BLUE ||| -->
        </div>
    </div>
<!--** 
    * LABEL
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Label</div>
    <!-- Simple label -->
        <label class="label">
            This is a label
        </label>

    </div>
<!--** 
    * OUTLINE
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Outline</div>

        <div id="container--temp">
        <!-- Blue outline -->
            <a class="a--icon outl--blue">
                <img src="img/social-media/fb-rounded-b.svg">
            </a>

        </div><div id="container--temp" class="onblue">
        <!-- White outline -->
            <a class="a--icon outl--white">
                <img src="img/social-media/fb-rounded-w.svg">
            </a>

        </div>
    </div>
<!--** 
    * INPUTS
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Input search</div>
        <div id="container--temp">
        <!-- Input search over white -->
            <div class="input input--ow outl--blue">
                <label for="text-a"><i class="bx bx-search"></i></label>
                <input id="text-a" type="text" placeholder="Search bar">
            </div>
            
        </div><div id="container--temp" class="onblue">
        <!-- Input search over blue -->
            <div class="input input--ob outl--white">
                <label for="text-b"><i class="bx bx-search"></i></label>
                <input id="text-b" type="text" placeholder="Search bar">    
            </div>

        </div><div id="container--temp">
        <!-- Input password over white -->
            <div class="input input--ow input--password">
                <label for="input--pass"><i class="bx bxs-lock-alt"></i></label>
                <input id="input--pass" type="password" placeholder="Password bar">
                <i class="bx bxs-hide" id="icon--pass"></i>
            </div>

        </div>
    </div>
<!--** 
    * CHECKBOX
    *
-->
    <div id="container--temp" class="parent">
        <div id="container--title">Checkbox</div>
    <!-- Input checkbox -->
        <label class="checkbox">
            <input type="checkbox" checked="checked">
            <div class="checkmark outl--blue"><i class='bx bx-check'></i></div>
            This is a checkbox
        </label>

    </div>
    <script src="js/scripts.js"></script>
<!--** 
    * MODAL
    *
-->
    <div class="modal-shadow modal-shadow--panel">
        <div class="box--ow-max modal">
            <div class="content">
                <!-- ... -->
            </div>
        </div>
    </div>
<!--** 
    * LOADING
    *
-->
    <div class="loading"><i class='bx bx-loader-alt'></i></div>
@endsection