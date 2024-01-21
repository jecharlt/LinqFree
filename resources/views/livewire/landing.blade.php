<div class="background container-fluid"
     x-data="{ sharebar: false, isMobile: window.innerWidth < 768 }"
     x-cloak
     @resize.window="isMobile = window.innerWidth < 768"
>
    <div class="outside-container d-flex align-items-center justify-content-center">
        <div x-show="sharebar">
            <div class="sharebar d-flex justify-content-center"
                 :class="isMobile ? 'align-items-end' : 'align-items-center'">
                <div class="container"
                     @click.outside="sharebar = false"
                     :class="isMobile ? 'sharebar-content-mobile' : 'sharebar-content'">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h6 class="mb-0">Share this Profile</h6>
                        <button class="close-sharebar d-flex align-items-center justify-content-center"
                                @click="sharebar=false">
                            @include("svg.close_svg")
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center flex-column">
                        @foreach($sharebar_links as $sharebar_link)
                            <a class="sharebar-link-outer-container"
                               target="_blank"
                               href="{{ $sharebar_link['referral-url'] }}">
                                <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                    @include("{$sharebar_link['component-svg']}", ['class' => 'small-svg'])
                                    <span class="sharebar-link-text">{{ $sharebar_link['link-text'] }}</span>
                                    @include('svg.link-caret-svg', ['class' => 'sharebar-link-caret'])
                                </div>
                            </a>
                        @endforeach

                        <div class="sharebar-copy-link-outer-container mt-2"
                             x-data="{clipboardStatus: 'Copy'}"
                             @click="navigator.clipboard.writeText($refs.clipboardText.innerHTML);
                             clipboardStatus = 'Copied'; setTimeout(() => clipboardStatus = 'Copy', 1000);">
                            <div class="sharebar-link-inner-container d-flex align-items-center justify-content-start">
                                @include("svg.link_svg", ['class' => 'small-svg'])
                                <span class="sharebar-copy-link-text"
                                      x-ref="clipboardText">{{ $this->short_custom_url }}</span>
                                <div class="sharebar-link-copy"
                                     x-text="clipboardStatus"
                                     :class="clipboardStatus === 'Copied' && 'text-success'">Copy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content container d-flex align-items-center justify-content-start flex-column">
            <div class="container mt-4 px-4 px-md-0 top-bar d-flex align-items-center justify-content-end mx-auto">
                <button class="top-bar-link-share-button"
                        @click="sharebar = true">
                    @include("svg.three_dots_svg", ["class" => "three-dots"])
                </button>
            </div>

            <div class="profile-picture">
                @if(!$this->profile_picture)
                    <span class="initials">{{$this->initial}}</span>
                @endif
            </div>

            <div class="profile-name-container">
                <h1 class="profile-name"><span>@</span>{{ $this->profile_name }}</h1>
            </div>

            <div class="paragraph-text-container pt-3 d-flex text-center">
                <p class="paragraph-text"> {{ $this->paragraph_text }} </p>
            </div>

            <div class="links">
                @foreach($links as $link)
                    <div class="link-object">
                        <div class="link-container d-flex align-items-center justify-content-start">
                            @include("{$link['component-svg']}", ['class' => 'link-svg'])
                            <a href="{{$link['link-url']}}"
                               class="link">
                                <p class="link-description">{{$link['link-name']}}</p>
                            </a>
                            <button class="link-share-button my-auto"
                                    @click="sharebar = true">
                                @include("svg.three_dots_svg", ["class" => "three-dots"])
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        let root = document.documentElement;
        root.style.setProperty('--background', "{{ $this->background ?? 'white'}}");
        root.style.setProperty('--profile_picture', "{{ $this->profile_picture ?? 'gray' }}");
        root.style.setProperty('--link_background', "{{ $this->link_background ?? 'rgba(255, 255, 255, 0.8);' }}")
    </script>
</div>
