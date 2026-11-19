/** پخش ویدئوی آپلودشده در پنجره‌ی داخل سایت (بدون JS، لینک مستقیم فایل باز می‌شود) */
export function initVideoModal() {
    const dialog = document.getElementById('video-dialog');
    if (!dialog || typeof dialog.showModal !== 'function') return;

    const video = dialog.querySelector('video');

    dialog.querySelector('.video-close').addEventListener('click', () => dialog.close());
    dialog.addEventListener('click', (e) => {
        if (e.target === dialog) dialog.close();
    });
    dialog.addEventListener('close', () => {
        video.pause();
        video.removeAttribute('src');
        video.removeAttribute('poster');
        video.load();
    });

    document.querySelectorAll('a[data-video-src]').forEach((a) => {
        a.addEventListener('click', (e) => {
            e.preventDefault();
            video.src = a.dataset.videoSrc;
            if (a.dataset.videoPoster) video.poster = a.dataset.videoPoster;
            dialog.showModal();
            video.play().catch(() => {});
        });
    });
}
