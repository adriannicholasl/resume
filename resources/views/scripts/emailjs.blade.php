<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("5rDzjamES5-36garl");
    })();

    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();

        emailjs.sendForm("service_199uaao", "template_i03qhec", this)
            .then(function() {
                alert("✅ Pesan berhasil dikirim!");
                document.getElementById("contact-form").reset();
            }, function(error) {
                alert("❌ Gagal mengirim pesan. Silakan coba lagi.");
                console.error("EmailJS Error:", error);
            });
    });
</script>