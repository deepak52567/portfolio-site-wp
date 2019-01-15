<footer>
    <div class="texture-1"></div>
    <div class="texture-2"></div>
    <?php $main_top_page = get_field('cover_image'); ?>
    <div class="details-sec">
        2018 | <?php echo $main_top_page['first_name']; ?> <?php echo $main_top_page['last_name']; ?>
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
    document.querySelector('div.resbars').addEventListener('click', function (e) {
    	e.preventDefault();

        var element = document.getElementsByClassName('outer-nav')[0];

        if (element.classList.contains("active")) { 
            element.classList.toggle("active");
        } else {
        // For IE9
            var classes = element.className.split(" ");
            var i = classes.indexOf("active");

        if (i >= 0) 
            classes.splice(i, 1);
        else 
            classes.push("active");
            element.className = classes.join(" "); 
        }

    });
</script>
</html>