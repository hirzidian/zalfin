// Tombol Mute / Unmute Video Hero
const heroVideo = document.getElementById('heroVideo');
const muteButton = document.getElementById('muteButton');
const muteIcon = document.getElementById('muteIcon');

muteButton.addEventListener('click', function () {
    heroVideo.muted = !heroVideo.muted;

    if (heroVideo.muted) {
        muteIcon.className = 'fa-solid fa-volume-xmark';
    } else {
        muteIcon.className = 'fa-solid fa-volume-high';
    }
});