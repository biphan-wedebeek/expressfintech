<script>
    (function () {
        const url   = '{{ url('/admin/mark-contacts-read') }}';
        const token = '{{ csrf_token() }}';
        let sent    = false;

        function markRead() {
            if (sent) return;
            sent = true;

            if (navigator.sendBeacon) {
                const blob = new Blob(
                    [JSON.stringify({ _token: token })],
                    { type: 'application/json' }
                );
                navigator.sendBeacon(url, blob);
            } else {
                fetch(url, {
                    method: 'POST',
                    keepalive: true,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token,
                    },
                    body: JSON.stringify({ _token: token }),
                });
            }
        }

        window.addEventListener('beforeunload', markRead);
        document.addEventListener('livewire:navigating', function () {
            markRead();
            window.removeEventListener('beforeunload', markRead);
        });
    })();
</script>