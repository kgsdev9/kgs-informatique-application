@extends('master.master')
@section('content')
<main>


<section class="bg-light-subtle bg-opacity-10  pb-xl-0 py-5 ">
    <div class="container">
        <div class="row g-xl-7 gy-5">
            <div class="col-lg-6 col-12">
                <div class="me-xl-7">
                    <div class="mb-5">
                        <h1 class="mb-3">{{$detailApp->title}}</h1>
                        <p>{{$detailApp->description}}</p>
                    </div>
                    <div class="mb-5">
                        <a href="{{$detailApp->url}}" target="_blank" class="btn btn-outline-dark">
                            Une démonstration complete
                            <span class="ms-1">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"></path>
                               </svg>
                            </span>
                         </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 ">

                <div class="plyr plyr--full-ui plyr--video plyr--youtube plyr--fullscreen-enabled plyr__poster-enabled plyr--paused plyr--is-touch">
                    <div class="plyr__controls">
                        <button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-pressed="false" aria-label="Play">
                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-pause"></use>
                            </svg>
                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-play"></use>
                            </svg>
                            <span class="label--pressed plyr__sr-only">Pause</span>
                            <span class="label--not-pressed plyr__sr-only">Play</span>
                        </button>
                        <div class="plyr__controls__item plyr__progress__container">
                            <div class="plyr__progress">
                                <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="111.089" aria-valuenow="12.13856908201599" id="plyr-seek-5730" aria-valuetext="00:12 of 01:51" style="--value: 10.93%;">
                                <progress class="plyr__progress__buffer" min="0" max="100" value="36.00806560505541" role="progressbar" aria-hidden="true">
                                    % buffered
                                </progress>
                                <span class="plyr__tooltip">00:00</span>
                            </div>
                        </div>
                        <div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time" role="timer">
                            -01:38
                        </div>
                        <div class="plyr__controls__item plyr__volume">
                            <button type="button" class="plyr__control" data-plyr="mute" aria-pressed="false">
                                <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                    <use xlink:href="#plyr-muted"></use>
                                </svg>
                                <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                    <use xlink:href="#plyr-volume"></use>
                                </svg>
                                <span class="label--pressed plyr__sr-only">Unmute</span>
                                <span class="label--not-pressed plyr__sr-only">Mute</span>
                            </button>
                            <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-5730" aria-valuetext="100.0%" style="--value: 100%;">
                        </div>
                        <button class="plyr__controls__item plyr__control" type="button" data-plyr="captions" aria-pressed="false">
                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-captions-on"></use>
                            </svg>
                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-captions-off"></use>
                            </svg>
                            <span class="label--pressed plyr__sr-only">Disable captions</span>
                            <span class="label--not-pressed plyr__sr-only">Enable captions</span>
                        </button>
                        <div class="plyr__controls__item plyr__menu">
                            <button aria-haspopup="true" aria-controls="plyr-settings-5730" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings" aria-pressed="false">
                                <svg aria-hidden="true" focusable="false">
                                    <use xlink:href="#plyr-settings"></use>
                                </svg>
                                <span class="plyr__sr-only">Settings</span>
                            </button>
                            <div class="plyr__menu__container" id="plyr-settings-5730" hidden="">
                                <div>
                                    <div id="plyr-settings-5730-home">
                                        <div role="menu">
                                            <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden="">
                                                <span>Captions<span class="plyr__menu__value">Disabled</span></span>
                                            </button>
                                            <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden="">
                                                <span>Quality<span class="plyr__menu__value">undefined</span></span>
                                            </button>
                                            <button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true">
                                                <span>Speed<span class="plyr__menu__value">Normal</span></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="plyr-settings-5730-captions" hidden="">
                                        <button type="button" class="plyr__control plyr__control--back">
                                            <span aria-hidden="true">Captions</span>
                                            <span class="plyr__sr-only">Go back to previous menu</span>
                                        </button>
                                        <div role="menu"></div>
                                    </div>
                                    <div id="plyr-settings-5730-quality" hidden="">
                                        <button type="button" class="plyr__control plyr__control--back">
                                            <span aria-hidden="true">Quality</span>
                                            <span class="plyr__sr-only">Go back to previous menu</span>
                                        </button>
                                        <div role="menu"></div>
                                    </div>
                                    <div id="plyr-settings-5730-speed" hidden="">
                                        <button type="button" class="plyr__control plyr__control--back">
                                            <span aria-hidden="true">Speed</span>
                                            <span class="plyr__sr-only">Go back to previous menu</span>
                                        </button>
                                        <div role="menu">
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button>
                                            <button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="plyr__controls__item plyr__control" type="button" data-plyr="pip" aria-pressed="false">
                            <svg aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-pip"></use>
                            </svg>
                            <span class="plyr__sr-only">PIP</span>
                        </button>
                        <button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen" aria-pressed="false">
                            <svg class="icon--pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-exit-fullscreen"></use>
                            </svg>
                            <svg class="icon--not-pressed" aria-hidden="true" focusable="false">
                                <use xlink:href="#plyr-enter-fullscreen"></use>
                            </svg>
                            <span class="label--pressed plyr__sr-only">Exit fullscreen</span>
                            <span class="label--not-pressed plyr__sr-only">Enter fullscreen</span>
                        </button>
                    </div>
                    <div class="plyr__video-wrapper plyr__video-embed" style="aspect-ratio: 16 / 9;">
                    <iframe id="youtube-2382" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Player for Online Education Website New Template - Geeks UI" width="640" height="500" src="{{$detailApp->url}}?autoplay=0&amp;controls=0&amp;disablekb=1&amp;playsinline=1&amp;cc_load_policy=0&amp;cc_lang_pref=auto&amp;widget_referrer=file%3A%2F%2F%2Fmedia%2Fkgs%2FDATA%2FKGS%2520EVENT%2Fblock.codescandy.com%2Fservice-v3.html&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;customControls=true&amp;noCookie=false&amp;enablejsapi=1&amp;widgetid=1" data-gtm-yt-inspected-6="true"></iframe>
                        <div class="plyr__poster" style="background-image: url(&quot;https://i.ytimg.com/vi/CivuutI6lXY/maxresdefault.jpg&quot;);"></div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
 </main>
@endsection
