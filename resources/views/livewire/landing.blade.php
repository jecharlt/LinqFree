<div class="background container-fluid" x-data="{ sharebar: false, isMobile: window.innerWidth < 768 }" x-cloak
@resize.window = "isMobile = window.innerWidth < 768">
    <div class="outside-container d-flex align-items-center justify-content-center">
        <div x-show="sharebar">
            <div class="sharebar d-flex justify-content-center"
            :class="isMobile ? 'align-items-end' : 'align-items-center'">
                <div class="container" @click.outside="sharebar = false"
                :class="isMobile ? 'sharebar-content-mobile' : 'sharebar-content'">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <h6 class="mb-0">Share this Profile</h6>
                        <button class="close-sharebar d-flex align-items-center justify-content-center"
                                @click="sharebar=false">
                            <svg width="16" height="16" viewBox="0 0 16 16" data-testid="CloseButton" enable-background="new 0 0 24 24" class="sc-gKsewC iPWGYb"><path d="M13.3536 3.35357L13.7072 3.00001L13.0001 2.29291L12.6465 2.64646L13.3536 3.35357ZM2.64652 12.6465L2.29297 13L3.00008 13.7071L3.35363 13.3536L2.64652 12.6465ZM3.35363 2.64646L3.00008 2.29291L2.29297 3.00001L2.64652 3.35357L3.35363 2.64646ZM12.6465 13.3536L13.0001 13.7071L13.7072 13L13.3536 12.6465L12.6465 13.3536ZM12.6465 2.64646L2.64652 12.6465L3.35363 13.3536L13.3536 3.35357L12.6465 2.64646ZM2.64652 3.35357L12.6465 13.3536L13.3536 12.6465L3.35363 2.64646L2.64652 3.35357Z" fill="black"></path></svg>
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center flex-column">

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="snapchat://creativeKitWeb/camera/1?attachmentUrl={{ $this->custom_url }}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 24 24" data-testid="ShareIcon-snapchat"
                                     shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><g clip-path="url(#a)"><rect
                                            width="100%" height="100%" rx="4" fill="#FFFC00"></rect><path fill="#fff" d="M18.78 15.392c-.058-.193-.337-.329-.337-.329l-.07-.036a5.385 5.385 0 0 1-1.224-.802 4.15 4.15 0 0 1-.71-.809 3.049 3.049 0 0 1-.391-.806c-.026-.104-.022-.146 0-.2.018-.046.072-.09.097-.11.157-.111.41-.275.565-.375.135-.087.25-.162.318-.21.218-.152.368-.308.456-.476a.821.821 0 0 0 .039-.69c-.12-.317-.416-.505-.792-.505-.083 0-.17.01-.255.027-.216.047-.42.124-.59.19a.018.018 0 0 1-.026-.018c.019-.423.04-.992-.008-1.533a3.78 3.78 0 0 0-.307-1.26 3.378 3.378 0 0 0-.548-.821 3.374 3.374 0 0 0-.867-.697 4.017 4.017 0 0 0-2.022-.515 4.02 4.02 0 0 0-2.02.515c-.45.257-.737.547-.868.697-.168.193-.383.46-.548.82-.166.36-.266.771-.307 1.261a11.821 11.821 0 0 0-.009 1.533c0 .014-.012.024-.026.018a3.98 3.98 0 0 0-.59-.19 1.227 1.227 0 0 0-.256-.027c-.375 0-.67.188-.791.505a.821.821 0 0 0 .039.69c.089.168.237.324.455.476.067.048.183.123.318.21.151.099.397.258.556.368a.33.33 0 0 1 .106.117c.023.055.027.097-.002.208a3.06 3.06 0 0 1-.39.798c-.19.29-.43.561-.709.809-.347.306-.76.577-1.224.802-.023.011-.049.024-.077.04 0 0-.278.142-.33.325-.078.271.129.525.339.661.344.223.763.342 1.006.407.068.018.13.035.185.052a.37.37 0 0 1 .16.093c.047.06.052.136.07.22.025.143.085.32.262.442.194.133.44.143.752.156.326.012.732.027 1.197.182.215.07.411.191.636.33.472.29 1.06.651 2.062.651 1.004 0 1.596-.362 2.07-.654.226-.137.419-.257.63-.326.465-.154.87-.17 1.197-.182.312-.012.558-.02.752-.156.19-.13.243-.325.268-.47.014-.072.023-.138.064-.19a.364.364 0 0 1 .154-.09c.057-.019.121-.035.192-.055.243-.065.548-.142.92-.351.446-.254.477-.565.43-.72Z"></path><path fill="#000" d="M19.168 15.242c-.1-.269-.288-.412-.502-.531a1.235 1.235 0 0 0-.108-.057c-.064-.034-.13-.066-.195-.099-.667-.354-1.19-.801-1.55-1.33a3.12 3.12 0 0 1-.267-.472c-.03-.09-.03-.14-.007-.185a.293.293 0 0 1 .086-.089c.115-.076.233-.153.314-.204.143-.093.257-.167.329-.217.275-.191.466-.395.586-.623.17-.32.19-.688.06-1.032-.18-.478-.634-.775-1.18-.775-.115 0-.23.013-.344.038l-.089.02a9.962 9.962 0 0 0-.031-1.01c-.103-1.195-.521-1.82-.957-2.32a3.81 3.81 0 0 0-.974-.784C13.677 5.192 12.927 5 12.11 5c-.815 0-1.565.192-2.227.57a3.777 3.777 0 0 0-.975.785c-.436.499-.854 1.125-.957 2.32-.029.338-.036.685-.032 1.01l-.089-.02a1.612 1.612 0 0 0-.343-.038c-.547 0-1 .297-1.18.775-.13.344-.11.71.06 1.031.12.228.312.432.586.624.073.051.186.125.329.217.078.05.19.123.301.197a.336.336 0 0 1 .098.097c.023.047.023.098-.012.193-.058.13-.143.287-.262.462-.354.518-.861.957-1.507 1.307-.343.182-.698.303-.848.711-.114.308-.039.66.248.955.095.102.214.192.364.275.353.195.653.29.889.356a.568.568 0 0 1 .18.08c.105.092.09.23.23.434.084.126.182.212.262.268.293.202.624.215.973.229.316.012.674.026 1.082.16.17.056.346.165.549.29.489.301 1.16.712 2.28.712 1.122 0 1.795-.414 2.288-.715.203-.124.378-.232.542-.286.408-.135.766-.149 1.082-.161.35-.014.678-.027.973-.23.092-.063.208-.167.3-.326.1-.17.099-.291.193-.373a.564.564 0 0 1 .17-.077 3.95 3.95 0 0 0 .9-.36c.16-.087.284-.183.382-.292l.005-.004c.267-.292.336-.632.224-.934Zm-.996.535c-.608.336-1.012.3-1.326.501-.267.173-.11.543-.303.677-.239.165-.943-.011-1.852.288-.75.249-1.23.961-2.58.961-1.354 0-1.82-.71-2.58-.96-.91-.3-1.615-.124-1.853-.29-.193-.133-.036-.503-.303-.676-.313-.202-.718-.166-1.326-.501-.387-.214-.168-.346-.039-.408 2.203-1.065 2.553-2.712 2.57-2.836.019-.147.04-.264-.123-.415-.157-.146-.855-.578-1.048-.712-.321-.224-.461-.447-.357-.722.072-.19.25-.261.437-.261.059 0 .118.007.175.019.352.076.693.253.89.3.028.007.052.01.073.01.105 0 .141-.053.134-.174-.022-.385-.078-1.134-.016-1.836.083-.963.394-1.441.763-1.865.178-.202 1.011-1.083 2.604-1.083 1.597 0 2.426.88 2.604 1.083.369.423.68.9.763 1.865.061.702.009 1.451-.016 1.836-.009.126.03.174.134.174.021 0 .046-.003.073-.01.197-.047.538-.224.89-.3a.823.823 0 0 1 .175-.02c.187 0 .365.073.437.262.104.275-.037.498-.357.722-.193.134-.891.566-1.048.712-.163.15-.142.267-.122.415.015.124.366 1.77 2.569 2.836.125.062.345.194-.042.408Z"></path></g><defs><clipPath id="a"><rect width="24" height="24" fill="#fff" rx="4"></rect></clipPath></defs></svg>
                                <span class="sharebar-link-text">Share on Snapchat</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="https://www.facebook.com/sharer.php?u={{ $this->custom_url }}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 24 24" data-testid="ShareIcon-facebook" shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><rect width="100%"
                                                                                              height="100%" rx="4" fill="#1877F2"></rect><path d="M18 12.0002C18 8.68611 15.3141 6.00012 12 6.00012C8.68594 6.00012 6 8.68611 6 12.0002C6 14.9956 8.19375 17.4777 11.0625 17.9277V13.7346H9.53906V12.0002H11.0625V10.6783C11.0625 9.17479 11.9578 8.34391 13.3289 8.34391C13.9852 8.34391 14.6719 8.4611 14.6719 8.4611V9.93769H13.9148C13.1695 9.93769 12.9375 10.4006 12.9375 10.8752V12.0002H14.6016L14.3355 13.7346H12.9375V17.9277C15.8062 17.4777 18 14.9956 18 12.0002Z" fill="white"></path></svg>
                                <span class="sharebar-link-text">Share on Facebook</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="https://www.linkedin.com/sharing/share-offsite/?url={{ $this->custom_url }}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 24 24" data-testid="ShareIcon-linkedin" shape="rect"
                                     class="small-svg" enable-background="new 0 0 24 24"><g
                                    clip-path="url
                                     (#clip0_657_585)"><rect width="100%" height="100%" rx="4" fill="#0A66C2"></rect><path d="M8.65574 10.1318H6.19672V18.0008H8.65574V10.1318ZM8.87705 7.42687C8.87835 7.24086 8.84299 7.05642 8.77301 6.88407C8.70302 6.71173 8.59977 6.55486 8.46916 6.42242C8.33855 6.28997 8.18313 6.18456 8.01178 6.11218C7.84043 6.03981 7.6565 6.0019 7.47049 6.00061H7.42623C7.04797 6.00061 6.6852 6.15088 6.41773 6.41835C6.15026 6.68583 6 7.0486 6 7.42687C6 7.80513 6.15026 8.16791 6.41773 8.43538C6.6852 8.70285 7.04797 8.85312 7.42623 8.85312C7.61225 8.8577 7.79734 8.82557 7.97094 8.75859C8.14454 8.69161 8.30324 8.59107 8.43797 8.46273C8.57271 8.33439 8.68083 8.18076 8.75617 8.01062C8.83151 7.84047 8.87258 7.65715 8.87705 7.47113V7.42687ZM18 13.2204C18 10.8548 16.4951 9.93511 15 9.93511C14.5105 9.91059 14.0231 10.0149 13.5864 10.2375C13.1498 10.4601 12.7791 10.7934 12.5115 11.204H12.4426V10.1318H10.1311V18.0008H12.5902V13.8155C12.5546 13.3869 12.6896 12.9615 12.9659 12.6318C13.2421 12.3022 13.6373 12.0948 14.0656 12.0548H14.159C14.941 12.0548 15.5213 12.5466 15.5213 13.786V18.0008H17.9803L18 13.2204Z" fill="white"></path></g><defs><clipPath id="clip0_657_585"><path d="M0 4.00049C0 1.79135 1.79086 0.000488281 4 0.000488281H20C22.2091 0.000488281 24 1.79135 24 4.00049V20.0009C24 22.2101 22.2091 24.0009 20 24.0009H4C1.79086 24.0009 0 22.2101 0 20.0009V4.00049Z" fill="white"></path></clipPath></defs></svg>
                                <span class="sharebar-link-text">Share on LinkedIn</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="https://x.com/intent/tweet?text=Check%20out%20{{$this->profile_name}}%20-%20{{$this->custom_url}}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 48 48" data-testid="ShareIcon-x" shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><rect width="100%"
                                                                                              height="100%"
                                                                                        rx="4" fill="black"></rect><path d="M11.559 12.251L20.825 25.1736L11.5 35.6775H13.6L21.763 26.4794L28.359 35.6786H35.5L25.712 22.029L34.392 12.25H32.293L24.775 20.7211L18.7 12.251H11.559ZM14.645 13.8625H17.925L32.413 34.0661H29.133L14.644 13.8635L14.645 13.8625Z" fill="white"></path></svg>
                                <span class="sharebar-link-text">Share on X</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="https://wa.me/?text=Check%20out%20{{$this->profile_name}}%20-%20{{$this->custom_url}}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 24 24" data-testid="ShareIcon-whatsapp" shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><g clip-path="url
                                     (#clip0_657_572)"><rect width="100%" height="100%" rx="4" fill="#00E676"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M16.201 7.74608C15.0805 6.61991 13.5866 6.00122 11.9957 6.00122C8.71989 6.00122 6.05132 8.66984 6.04847 11.9457C6.04847 12.9949 6.32217 14.0156 6.84105 14.9194L6 18.0014L9.15324 17.1746C10.0228 17.6479 11.0007 17.8988 11.9957 17.8988H11.9986C15.2744 17.8988 17.943 15.2302 17.9458 11.9514C17.943 10.3634 17.3243 8.86941 16.201 7.74608ZM11.9957 16.8924C11.1062 16.8924 10.2366 16.6529 9.47826 16.2024L9.29865 16.0941L7.42837 16.5844L7.9273 14.7598L7.81041 14.5716C7.31433 13.7847 7.05488 12.8752 7.05488 11.9429C7.05488 9.22295 9.27299 7.0048 11.9986 7.0048C13.3186 7.0048 14.5588 7.52085 15.4939 8.45315C16.4262 9.38831 16.9394 10.6285 16.9394 11.9486C16.9366 14.6771 14.7185 16.8924 11.9957 16.8924ZM14.7071 13.1917C14.5588 13.1175 13.8289 12.7583 13.6921 12.707C13.5552 12.6585 13.4555 12.6328 13.3585 12.7811C13.2587 12.9294 12.9736 13.2658 12.8881 13.3627C12.8026 13.4625 12.7142 13.4739 12.5659 13.3998C12.4177 13.3257 11.9387 13.1688 11.3713 12.6614C10.9294 12.2679 10.6329 11.7804 10.5445 11.6321C10.459 11.4839 10.536 11.404 10.6101 11.3299C10.6757 11.2643 10.7584 11.156 10.8325 11.0704C10.9066 10.9849 10.9323 10.9222 10.9808 10.8224C11.0292 10.7226 11.0064 10.6371 10.9694 10.563C10.9323 10.4888 10.6358 9.7561 10.5103 9.45959C10.3906 9.16878 10.268 9.20869 10.1768 9.20584C10.0912 9.20014 9.99145 9.20014 9.89166 9.20014C9.79187 9.20014 9.63222 9.2372 9.49537 9.38546C9.35852 9.53371 8.97648 9.89295 8.97648 10.6257C8.97648 11.3584 9.50962 12.0626 9.58375 12.1624C9.65788 12.2622 10.6301 13.7619 12.1212 14.4062C12.4747 14.5602 12.7512 14.6514 12.9679 14.7198C13.3243 14.8339 13.6465 14.8168 13.9031 14.7797C14.1882 14.7369 14.7812 14.4205 14.9066 14.0726C15.0292 13.7248 15.0292 13.4283 14.9922 13.3656C14.9551 13.3028 14.8553 13.2658 14.7071 13.1917Z" fill="white"></path></g><defs><clipPath id="clip0_657_572"><path d="M0 4.00122C0 1.79208 1.79086 0.0012207 4 0.0012207H20C22.2091 0.0012207 24 1.79208 24 4.00122V20.0016C24 22.2108 22.2091 24.0016 20 24.0016H4C1.79086 24.0016 0 22.2108 0 20.0016V4.00122Z" fill="white"></path></clipPath></defs></svg>
                                <span class="sharebar-link-text">Share via WhatsApp</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="https://www.messenger.com/new">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 24 24" data-testid="ShareIcon-messenger" shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><g clip-path="url
                                     (#clip0_657_559)"><rect width="100%" height="100%" rx="4" fill="#F1F1F1"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00171C8.62002 6.00171 6 8.4776 6 11.8218C6 13.5711 6.71688 15.0826 7.88434 16.1267C7.98234 16.2144 8.0415 16.3373 8.04552 16.4688L8.0782 17.5361C8.08864 17.8765 8.44029 18.0981 8.75181 17.9605L9.94273 17.4348C10.0437 17.3903 10.1568 17.382 10.2632 17.4113C10.8104 17.5618 11.3929 17.6419 12 17.6419C15.38 17.6419 18 15.166 18 11.8218C18 8.4776 15.38 6.00171 12 6.00171Z" fill="url(#paint0_radial_657_559)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.39691 13.5238L10.1594 10.7275C10.4398 10.2827 11.0401 10.1719 11.4608 10.4874L12.8626 11.5388C12.9912 11.6353 13.1682 11.6347 13.2962 11.5375L15.1895 10.1007C15.4421 9.90896 15.772 10.2114 15.6029 10.4797L13.8404 13.276C13.56 13.7208 12.9596 13.8316 12.539 13.5161L11.1372 12.4647C11.0086 12.3682 10.8316 12.3688 10.7035 12.466L8.81031 13.9028C8.55762 14.0945 8.22777 13.7921 8.39691 13.5238Z" fill="white"></path></g><defs><radialGradient id="paint0_radial_657_559" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(8.3097 17.9377) scale(13.0752 13.0754)"><stop stop-color="#0099FF"></stop><stop offset="0.609754" stop-color="#A033FF"></stop><stop offset="0.934823" stop-color="#FF5280"></stop><stop offset="1" stop-color="#FF7061"></stop></radialGradient><clipPath id="clip0_657_559"><path d="M0 4.00171C0 1.79257 1.79086 0.00170898 4 0.00170898H20C22.2091 0.00170898 24 1.79257 24 4.00171V20.0021C24 22.2113 22.2091 24.0021 20 24.0021H4C1.79086 24.0021 0 22.2113 0 20.0021V4.00171Z" fill="white"></path></clipPath></defs></svg>
                                <span class="sharebar-link-text">Share via Messenger</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <a class="sharebar-link-outer-container" target="_blank"
                        href="mailto:?subject=%20Check%20out%{{$this->profile_name}}%20&body=%20Check%20out%20{{$this->profile_name}}%20-%20{{$this->custom_url}}">
                            <div class="sharebar-link-inner-container d-flex align-items-center
                            justify-content-start">
                                <svg viewBox="0 0 48 48" data-testid="ShareIcon-email" shape="rect"
                                     enable-background="new 0 0 24 24" class="small-svg"><rect width="100%"
                                                                                              height="100%" rx="8" fill="#60696C"></rect><path d="M24.154 26.5681C24.2473 26.6569 24.3712 26.7064 24.5 26.7061C24.6288 26.7064 24.7527 26.6569 24.846 26.5681L26.2624 25.2141L31.454 30.1901C31.5471 30.2793 31.6711 30.3291 31.8 30.3291C32.0042 30.3291 32.1879 30.205 32.264 30.0155C32.3401 29.8261 32.2934 29.6093 32.146 29.4681L26.986 24.5224L32.214 19.5251C32.3432 19.4016 32.3966 19.2187 32.3543 19.0451C32.312 18.8715 32.1803 18.7337 32.0088 18.6836C31.8373 18.6335 31.6522 18.6786 31.523 18.8021L25.9411 24.1376C25.9242 24.1517 25.9083 24.1669 25.8934 24.1832L24.5 25.5151L23.1138 24.1901C23.1093 24.185 23.1047 24.18 23.1 24.1751C23.0849 24.1593 23.0689 24.1447 23.0524 24.1313L17.477 18.8021C17.3478 18.6786 17.1627 18.6335 16.9912 18.6836C16.8197 18.7337 16.688 18.8715 16.6457 19.0451C16.6034 19.2187 16.6568 19.4016 16.786 19.5251L22.0145 24.5229L16.853 29.4701C16.7062 29.6116 16.66 29.8281 16.7363 30.0172C16.8126 30.2063 16.9961 30.3301 17.2 30.3301C17.3296 30.3306 17.4544 30.2808 17.548 30.1911L22.7381 25.2147L24.154 26.5681Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M35 29.3181C34.9978 31.349 33.3519 32.9949 31.321 32.9971H17.679C15.6481 32.9949 14.0022 31.349 14 29.3181V19.6761C14.0022 17.6451 15.6481 15.9993 17.679 15.9971H31.321C33.3519 15.9993 34.9978 17.6451 35 19.6761V29.3181ZM17.679 16.9971C16.2001 16.9987 15.0017 18.1972 15 19.6761V29.3181C15.0017 30.797 16.2001 31.9954 17.679 31.9971H31.321C32.7999 31.9954 33.9983 30.797 34 29.3181V19.6761C33.9983 18.1972 32.7999 16.9987 31.321 16.9971H17.679Z" fill="white"></path></svg>
                                <span class="sharebar-link-text">Share via Email</span>
                                <svg width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 24 24"
                                     class="sharebar-link-caret"><path fill-rule="evenodd" clip-rule="evenodd"
                                                                       fill="black"
                                                                       d="M4.70714 1.29297L5.06069 1.64652L11.0607 7.64652V8.35363L5.06069 14.3536L4.70714 14.7072L4.00003 14.0001L4.35358 13.6465L10 8.00008L4.35358 2.35363L4.00003 2.00008L4.70714 1.29297Z" fill="black"></path></svg>
                            </div>
                        </a>

                        <div class="sharebar-copy-link-outer-container mt-2" x-data="{clipboardStatus: 'Copy'}"
                        @click="navigator.clipboard.writeText($refs.clipboardText.innerHTML);
                        clipboardStatus = 'Copied'; setTimeout(() => clipboardStatus = 'Copy', 1000);">
                            <div class="sharebar-link-inner-container d-flex align-items-center justify-content-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     class="small-svg">
                                    <path d="M15.197 3.35462C16.8703 1.67483 19.4476 1.53865 20.9536 3.05046C22.4596
                                    4.56228 22.3239 7.14956 20.6506 8.82935L18.2268 11.2626M10.0464 14C8.54044 12.4882 8.67609 9.90087 10.3494 8.22108L12.5 6.06212" stroke="#696969" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M13.9536 10C15.4596 11.5118 15.3239 14.0991 13.6506 15.7789L11.2268 18.2121L8.80299 20.6454C7.12969 22.3252 4.55237 22.4613 3.0464 20.9495C1.54043 19.4377 1.67609 16.8504 3.34939 15.1706L5.77323 12.7373" stroke="#696969"
                                          stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                                <span class="sharebar-copy-link-text" x-ref="clipboardText">{{ $this->short_custom_url }}</span>
                                <div class="sharebar-link-copy" x-text="clipboardStatus"
                                :class="clipboardStatus === 'Copied' && 'text-success'">Copy</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content container d-flex align-items-center justify-content-start flex-column">

            <div class="container mt-4 px-4 px-md-0 top-bar d-flex align-items-center justify-content-end mx-auto">
                <button class="top-bar-link-share-button" @click="sharebar = true">
                    <svg width="16" height="16" viewBox="0 0 16 16" class=""><path fill="currentColor" stroke="currentColor" d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z"></path><path fill="currentColor" stroke="currentColor" d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z"></path><path fill="currentColor" stroke="currentColor" d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z"></path></svg>
                </button>
            </div>

            <div class="profile-picture">
                <div class="initials">{{ $this->initial }}</div>
            </div>
            <div class="profile-name-container">
                <h1 class="profile-name"><span>@</span>{{ $this->profile_name }}</h1>
            </div>

            <div class="links">
                @foreach($links as $link)
                    <div class="link-object">
                        <div class="link-container">
                            <a href="{{$link['link-url']}}" class="link">
                                <p class="link-description">{{$link['link-name']}}</p>
                            </a>
                            <button class="link-share-button my-auto" @click="sharebar = true">
                                <svg width="16" height="16" viewBox="0 0 16 16" class=""><path fill="currentColor" stroke="currentColor" d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z"></path><path fill="currentColor" stroke="currentColor" d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z"></path><path fill="currentColor" stroke="currentColor" d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z"></path></svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
