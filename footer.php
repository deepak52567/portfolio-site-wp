<footer>
    <div class="texture-1"></div>
    <div class="texture-2"></div>
    <div class="social-con">
        <a href="https://www.facebook.com/himani.bajaj.5" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/bajaj_himani/" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="">
            <i class="fab fa-skype"></i>
        </a>
    </div>
    <div class="details-sec">
        2018 | Himani Bajaj
    </div>
</footer>
</body>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</html>