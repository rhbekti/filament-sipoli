import './bootstrap';

window.addEventListener('announce', (e) => {
    if (window.responsiveVoice) {
        responsiveVoice.speak(e.detail.text, e.detail.lang);
    }
});
