<div class="fbtns">
    <div class="fbtn" id="whatsapp_btn" data-aos="fade-up">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" fill="currentColor" />
        </svg>
    </div>
    <div class="whatsapp__chat__box hidden" id="whatsapp__chat__box">
        <div class="chat__close__btn" onclick="toggleWhatsappChat()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" fill="currentColor" />
            </svg>
        </div>
        <div class="chat__head">
            <div class="chat__profile">
                <img src="/images/whatsapp_profile.png" alt="">
            </div>
            <div class="chat__headText">
                <div class="chat__name">fitsexpress</div>
                <div class="chat__availability">We'll get to you as soon as possible</div>
            </div>
        </div>
        <div class="chat__display">
            <div class="chat__gapLarge"></div>
            <div class="message__block__in">
                <div class="message">
                    <div class="side__triangle">
                        <svg viewBox="0 0 8 13" height="13" width="8" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 8 13" xml:space="preserve">
                            <path opacity="0.13" fill="#0000000" d="M1.533,3.568L8,12.193V1H2.812 C1.042,1,0.474,2.156,1.533,3.568z"></path>
                            <path fill="currentColor" d="M1.533,2.568L8,11.193V0L2.812,0C1.042,0,0.474,1.156,1.533,2.568z" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;"></path>
                        </svg>
                    </div>
                    <div class="message__text">
                        <p>How can we help you?</p>
                    </div>
                </div>
            </div>
            <div class="chat__gapLarge"></div>
        </div>
        <div class="chat__input">
            <input type="text" name="chat_input" id="chat__input">
            <div class="send__btn" onclick="sendWhatsappMessage()">
                <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve">
                    <path fill="currentColor" d="M1.101,21.757L23.8,12.028L1.101,2.3l0.011,7.912l13.623,1.816L1.112,13.845 L1.101,21.757z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="fbtn" id="facebook_btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" fill="currentColor" />
        </svg>
    </div>
    <div class="fbtn" id="messenger_btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z" fill="currentColor" />
        </svg>
    </div>
    <script>
        document.getElementById('whatsapp_btn').addEventListener('click', () => {
            //   fbq('trackCustom', 'ClickContactBtn', {
            //     type: "whatsapp"
            //   });
            //   gtag('event', 'ClickContactBtn', {
            //     type: "whatsapp"
            //   });
            toggleWhatsappChat();
        });
        
        document.getElementById('facebook_btn').addEventListener('click', () => {
            //   fbq('track', 'Contact');
            //   fbq('trackCustom', 'ClickContactBtn', {
            //     type: "facebook"
            //   });
            //   gtag('event', 'ClickContactBtn', {
            //     type: "facebook"
            //   });
            document.location = 'https://www.facebook.com/';

        });
        document.getElementById('messenger_btn').addEventListener('click', () => {
            //   fbq('track', 'Contact');
            //   fbq('trackCustom', 'ClickContactBtn', {
            //     type: "messenger"
            //   });
            //   gtag('event', 'ClickContactBtn', {
            //     type: "messenger"
            //   });
            document.location = 'https://m.me/';
        });

        function toggleWhatsappChat() {
            document.getElementById('whatsapp__chat__box').classList.toggle("hidden");
            document.getElementById('whatsapp_btn').classList.toggle("hidden");
        }

        function sendWhatsappMessage() {
            message_text = document.getElementById('chat__input').value;
            const url = new URL(`https://wa.me/94775742272/?text=${message_text}`);
            //   fbq('track', 'Contact');
            //   gtag('event', 'SendWhatsappMessage', {
            //     type: "whatsapp"
            //   });
            document.location = url.href;
        }

        function startWhatsappBtnAppearWorker() {
            setTimeout(toggleWhatsappChat, 5000)
        }
    </script>
</div>