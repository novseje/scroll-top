<div id="wpfront-scroll-top-container"><img src="/wp-content/themes/yourtheme-child/images/scroll-top.png" alt="" title="" /></div>
<style>
    #wpfront-scroll-top-container {display:none;position:fixed;cursor:pointer;z-index:9999;opacity:0;right: 20px;bottom: 20px;transition: opacity 0.2s linear;}
    #wpfront-scroll-top-container img {width: auto;height: auto;}
</style>
<script>
    const scrollTop = document.getElementById("wpfront-scroll-top-container");
    const scrollToTop = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
    scrollTop.onclick = scrollToTop;

    document.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            scrollTop.style.opacity = 0.8;
            scrollTop.style.display = 'block';
        } else {
            scrollTop.style.opacity = 0;
            setTimeout(() => { if (scrollTop.style.opacity === 0) scrollTop.style.display = 'none';}, 200);
        }
    }, true);
</script>
